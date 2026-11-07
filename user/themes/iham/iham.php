<?php
namespace Grav\Theme;

use Grav\Common\Data\Data;
use Grav\Common\File\CompiledMarkdownFile;
use Grav\Common\Theme;
use RocketTheme\Toolbox\Event\Event;

class Iham extends Theme
{
    public static function getSubscribedEvents()
    {
        return [
            'onTwigInitialized' => ['onTwigInitialized', 0],
            'onFormPageHeaderProcessed' => ['onFormPageHeaderProcessed', 0],
        ];
    }

    /** @var array|null */
    private static $sharedForms;

    /**
     * Forms are defined once on the hidden "Site Forms" page (user/pages/forms) and attached here to every
     * page that uses a form, so a submission is always processed by the page it was posted from.
     */
    public function onFormPageHeaderProcessed(Event $event): void
    {
        $page = $event['page'];
        $header = $event['header'];
        if (!$page || !$header || in_array($page->template(), ['forms', 'sitemap', 'robots'], true)) {
            return;
        }
        if (self::$sharedForms === null) {
            self::$sharedForms = [];
            $path = $this->grav['locator']->findResource('page://forms/forms.md', true);
            if ($path) {
                $data = CompiledMarkdownFile::instance($path)->header();
                self::$sharedForms = is_array($data['forms'] ?? null) ? $data['forms'] : [];
            }
        }
        if (!self::$sharedForms) {
            return;
        }
        $existing = isset($header->forms) && is_array($header->forms) ? $header->forms : [];
        $header->forms = $existing + self::$sharedForms;
    }

    public function onTwigInitialized(): void
    {
        $twig = $this->grav['twig'];

        // Class hooks used by the form plugin's default layouts (styled in css/theme.css).
        $twig->twig_vars = array_merge($twig->twig_vars, [
            'form_field_outer_classes'       => 'form-group',
            'form_field_outer_label_classes' => 'form-label-wrapper',
            'form_field_label_classes'       => 'form-label',
            'form_field_input_classes'       => 'form-input',
            'form_field_textarea_classes'    => 'form-input',
            'form_field_select_classes'      => 'form-select',
            'form_button_classes'            => 'btn btn-primary',
        ]);

        // "one item per line" textareas -> clean array (also accepts an existing array).
        $twig->twig->addFilter(new \Twig\TwigFilter('lines', function ($value): array {
            if (is_array($value)) {
                $out = [];
                foreach ($value as $v) {
                    $out[] = is_array($v) ? ($v['text'] ?? reset($v)) : $v;
                }
                return array_values(array_filter(array_map('trim', $out), 'strlen'));
            }
            $parts = preg_split('/\R/u', (string) $value) ?: [];
            return array_values(array_filter(array_map('trim', $parts), 'strlen'));
        }));

        // Strip markdown/HTML for meta descriptions and JSON-LD.
        $twig->twig->addFilter(new \Twig\TwigFilter('plain', function ($value, int $limit = 0): string {
            $s = html_entity_decode(strip_tags((string) $value), ENT_QUOTES | ENT_HTML5, 'UTF-8');
            $s = preg_replace('/[\*_`#>]+/u', '', $s);
            $s = preg_replace('/!?\[([^\]]*)\]\([^)]*\)/u', '$1', $s);
            $s = trim(preg_replace('/\s+/u', ' ', $s));
            if ($limit > 0 && mb_strlen($s) > $limit) {
                $s = rtrim(mb_substr($s, 0, $limit - 1), " ,;:.-") . '…';
            }
            return $s;
        }));

        // Prefix root-relative links with the site base URL so the site works from a sub-folder.
        $twig->twig->addFilter(new \Twig\TwigFilter('href', function ($value): string {
            $v = trim((string) $value);
            if ($v === '' || $v[0] !== '/' || str_starts_with($v, '//')) {
                return $v;
            }
            $base = rtrim($this->grav['base_url_relative'] ?? '', '/');
            return $base . ($v === '/' ? '/' : rtrim($v, '/'));
        }));

        // tel: link from a human-readable phone number.
        $twig->twig->addFilter(new \Twig\TwigFilter('tel', function ($value): string {
            return preg_replace('/[^\d+]/', '', (string) $value);
        }));
    }
}
