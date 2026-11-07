(function () {
  'use strict';
  var doc = document;

  // ---- mobile navigation ----
  var toggle = doc.querySelector('.nav-toggle');
  var nav = doc.getElementById('primary-nav');
  function setNav(open) {
    doc.documentElement.classList.toggle('nav-open', open);
    if (toggle) {
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
      toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
    }
  }
  if (toggle && nav) {
    toggle.addEventListener('click', function () { setNav(!doc.documentElement.classList.contains('nav-open')); });
    doc.addEventListener('keydown', function (e) { if (e.key === 'Escape') setNav(false); });
    nav.addEventListener('click', function (e) { if (e.target.closest('a')) setNav(false); });
  }

  // ---- sub-menus (touch / keyboard) ----
  doc.querySelectorAll('.submenu-toggle').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var li = btn.closest('.has-sub');
      var open = !li.classList.contains('is-open');
      li.classList.toggle('is-open', open);
      btn.setAttribute('aria-expanded', open ? 'true' : 'false');
    });
  });
  // On desktop the toggle button is hidden; open sub-menus on hover/focus via CSS.

  // ---- tabs (services overview) ----
  doc.querySelectorAll('[data-tabs]').forEach(function (root) {
    var tabs = Array.prototype.slice.call(root.querySelectorAll('[role="tab"]'));
    var panels = Array.prototype.slice.call(root.querySelectorAll('[role="tabpanel"]'));
    function activate(i, focus) {
      tabs.forEach(function (t, n) {
        var on = n === i;
        t.classList.toggle('is-active', on);
        t.setAttribute('aria-selected', on ? 'true' : 'false');
        t.tabIndex = on ? 0 : -1;
        if (on && focus) t.focus();
      });
      panels.forEach(function (p, n) { p.classList.toggle('is-active', n === i); });
      if (history.replaceState && tabs[i]) {
        try { history.replaceState(null, '', '#' + tabs[i].textContent.trim().toLowerCase().replace(/[^a-z0-9]+/g, '-')); } catch (e) {}
      }
    }
    tabs.forEach(function (t, i) {
      t.addEventListener('click', function () { activate(i); });
      t.addEventListener('keydown', function (e) {
        if (e.key === 'ArrowRight') { e.preventDefault(); activate((i + 1) % tabs.length, true); }
        if (e.key === 'ArrowLeft') { e.preventDefault(); activate((i - 1 + tabs.length) % tabs.length, true); }
      });
    });
    // open the tab named in the URL hash
    var hash = (location.hash || '').slice(1);
    if (hash) {
      tabs.some(function (t, i) {
        if (t.textContent.trim().toLowerCase().replace(/[^a-z0-9]+/g, '-') === hash) { activate(i); return true; }
      });
    }
  });

  // ---- keep the anchor target below the sticky header ----
  if (location.hash && doc.getElementById(location.hash.slice(1))) {
    window.addEventListener('load', function () {
      var el = doc.getElementById(location.hash.slice(1));
      if (el) el.scrollIntoView();
    });
  }
})();
