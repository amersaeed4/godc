---
title: Site Forms
published: true
visible: false
routable: false
cache_enable: false
robots: noindex,nofollow
forms:
  booking-appointment:
    name: booking-appointment
    classes: form-compact
    fields:
      name:
        type: text
        label: Full name
        validate:
          required: true
        placeholder: Your full name
        autocomplete: name
      phone:
        type: tel
        label: Phone number
        validate:
          required: true
        placeholder: "+92 300 0000000"
        autocomplete: tel
      email:
        type: email
        label: Email
        validate:
          required: true
        placeholder: "you@example.com"
        autocomplete: email
      doctor:
        type: select
        label: Preferred doctor
        default: "Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery"
        options:
          Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery: "Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery"
          Dr. Arooj Fatima Gillani – Lifestyle Medicine & Clinical Nutrition: "Dr. Arooj Fatima Gillani – Lifestyle Medicine & Clinical Nutrition"
          No preference: No preference
      appointment_type:
        type: select
        label: Appointment type
        default: In-person consultation
        options:
          In-person consultation: In-person consultation
          Online consultation: Online consultation
          Follow-up appointment: Follow-up appointment
      message:
        type: textarea
        label: Tell us about your health goals
        rows: 4
        placeholder: Briefly describe your concern or goals
      honeypot:
        type: honeypot
    buttons:
      submit:
        type: submit
        value: Request an Appointment
        classes: btn btn-primary
    process:
      - save:
          fileprefix: appointments-
          dateformat: Ymd-His
          extension: txt
          body: "{% include 'forms/data.txt.twig' %}"
          folder: forms/appointments
      - email:
          subject: "[GODC] Appointment request from {{ form.value.name|e }}"
          body: "{% include 'forms/data.html.twig' %}"
      - message: Thank you. Your request has been received and our team will contact you shortly to confirm.
      - reset: true
  quick-booking:
    name: quick-booking
    classes: form-compact
    fields:
      name:
        type: text
        label: Full name
        validate:
          required: true
        placeholder: Your full name
        autocomplete: name
      phone:
        type: tel
        label: Phone number
        validate:
          required: true
        placeholder: "+92 300 0000000"
        autocomplete: tel
      email:
        type: email
        label: Email
        validate:
          required: true
        placeholder: "you@example.com"
        autocomplete: email
      doctor:
        type: select
        label: Preferred doctor
        default: "Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery"
        options:
          Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery: "Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery"
          Dr. Arooj Fatima Gillani – Lifestyle Medicine & Clinical Nutrition: "Dr. Arooj Fatima Gillani – Lifestyle Medicine & Clinical Nutrition"
          No preference: No preference
      date:
        type: date
        label: Preferred date
        validate:
          required: false
      time:
        type: time
        label: Preferred time
        validate:
          required: false
      message:
        type: textarea
        label: Message
        rows: 3
        placeholder: "How can we help?"
      honeypot:
        type: honeypot
    buttons:
      submit:
        type: submit
        value: Book an Appointment
        classes: btn btn-primary
    process:
      - save:
          fileprefix: quick-appointments-
          dateformat: Ymd-His
          extension: txt
          body: "{% include 'forms/data.txt.twig' %}"
          folder: forms/quick-appointments
      - email:
          subject: "[GODC] Quick appointment request from {{ form.value.name|e }}"
          body: "{% include 'forms/data.html.twig' %}"
      - message: Thank you. Your request has been received and our team will contact you shortly to confirm.
      - reset: true
  consultation:
    name: consultation
    fields:
      name:
        type: text
        label: Full name
        validate:
          required: true
        autocomplete: name
      email:
        type: email
        label: Email address
        validate:
          required: true
        autocomplete: email
      phone:
        type: tel
        label: Phone number
        validate:
          required: true
        autocomplete: tel
      age:
        type: number
        label: Age
        validate:
          required: false
          min: 0
          max: 120
      gender:
        type: select
        label: Gender
        placeholder: Select gender
        options:
          Male: Male
          Female: Female
          Other: Other
      doctor:
        type: select
        label: Preferred doctor
        default: "Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery"
        options:
          Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery: "Prof. Dr. Mohsin Gillani – Bariatric, Laparoscopic & Diabetes Surgery"
          Dr. Arooj Fatima Gillani – Lifestyle Medicine & Clinical Nutrition: "Dr. Arooj Fatima Gillani – Lifestyle Medicine & Clinical Nutrition"
          No preference: No preference
      service:
        type: select
        label: Select service
        placeholder: "Choose a medical speciality…"
        options:
          Obesity & Bariatric Surgery: Obesity & Bariatric Surgery
          Diabetes Care & Metabolic Surgery: Diabetes Care & Metabolic Surgery
          Advanced Laparoscopic & Cancer Surgery (ALCOS): Advanced Laparoscopic & Cancer Surgery (ALCOS)
          Medi Wellness: Medi Wellness
          Obesity & Metabolic Health: Obesity & Metabolic Health
          Cardiometabolic Disorders: Cardiometabolic Disorders
          Cardiovascular Diseases: Cardiovascular Diseases
          Neurological Disorders: Neurological Disorders
          Musculoskeletal Disorders: Musculoskeletal Disorders
          Geriatric & Palliative Care Nutrition: Geriatric & Palliative Care Nutrition
          Specialized Nutrition: Specialized Nutrition
          Renal Disorders: Renal Disorders
          Clinical & Critical Care Nutrition: Clinical & Critical Care Nutrition
          Aesthetic & Preventive Nutrition: Aesthetic & Preventive Nutrition
          Lifestyle Medicine: Lifestyle Medicine
          Corporate Wellness: Corporate Wellness
      date:
        type: date
        label: Preferred date
        validate:
          required: false
      time:
        type: time
        label: Preferred time
        validate:
          required: false
      message:
        type: textarea
        label: Message / symptoms description
        rows: 5
      privacy:
        type: checkbox
        label: "I have read and agree to the [Privacy Policy](/privacy-policy)"
        markdown: true
        validate:
          required: true
      newsletter:
        type: checkbox
        label: Keep me up to date with news and offers from GODC (Gillani Obesity and Diabetes Clinic)
      honeypot:
        type: honeypot
    buttons:
      submit:
        type: submit
        value: Submit
        classes: btn btn-primary
    process:
      - save:
          fileprefix: consultations-
          dateformat: Ymd-His
          extension: txt
          body: "{% include 'forms/data.txt.twig' %}"
          folder: forms/consultations
      - email:
          subject: "[GODC] Consultation request from {{ form.value.name|e }}"
          body: "{% include 'forms/data.html.twig' %}"
      - message: Thank you. Your request has been received and our team will contact you shortly to confirm.
      - reset: true
  corporate-enquiry:
    name: corporate-enquiry
    fields:
      name:
        type: text
        label: Name
        validate:
          required: true
        autocomplete: name
      organization:
        type: text
        label: Organization
        validate:
          required: true
        autocomplete: organization
      email:
        type: email
        label: Email
        validate:
          required: true
        autocomplete: email
      phone:
        type: tel
        label: Phone number
        validate:
          required: true
        autocomplete: tel
      team_size:
        type: select
        label: Team size
        placeholder: Team size
        options:
          2-10: "2-10"
          11-20: "11-20"
          21-49: "21-49"
          50+: "50+"
      interest:
        type: select
        label: Interested in
        placeholder: Select a service
        options:
          Wellness Seminars and Educational Sessions: Wellness Seminars and Educational Sessions
          Corporate Wellness Packages: Corporate Wellness Packages
          Executive Health and Leadership Wellness: Executive Health and Leadership Wellness
          Employee Health Assessments: Employee Health Assessments
          Workplace Wellness Campaigns: Workplace Wellness Campaigns
      message:
        type: textarea
        label: Tell us about your workforce and goals
        rows: 5
      honeypot:
        type: honeypot
    buttons:
      submit:
        type: submit
        value: Submit Form
        classes: btn btn-primary
    process:
      - save:
          fileprefix: corporate-enquiries-
          dateformat: Ymd-His
          extension: txt
          body: "{% include 'forms/data.txt.twig' %}"
          folder: forms/corporate-enquiries
      - email:
          subject: "[GODC] Corporate wellness enquiry from {{ form.value.organization|e }}"
          body: "{% include 'forms/data.html.twig' %}"
      - message: Thank you. Our corporate team will review your enquiry and be in touch shortly.
      - reset: true
  global-enquiry:
    name: global-enquiry
    fields:
      organization:
        type: text
        label: Organization name
        validate:
          required: true
        autocomplete: organization
      org_email:
        type: email
        label: Organization email
        validate:
          required: true
        autocomplete: email
      contact:
        type: text
        label: Contact person name
        validate:
          required: true
        autocomplete: name
      phone:
        type: tel
        label: Contact number
        validate:
          required: true
        autocomplete: tel
      message:
        type: textarea
        label: Tell us about your queries
        rows: 5
      honeypot:
        type: honeypot
    buttons:
      submit:
        type: submit
        value: Submit Form
        classes: btn btn-primary
    process:
      - save:
          fileprefix: global-enquiries-
          dateformat: Ymd-His
          extension: txt
          body: "{% include 'forms/data.txt.twig' %}"
          folder: forms/global-enquiries
      - email:
          subject: "[GODC] Global health enquiry from {{ form.value.organization|e }}"
          body: "{% include 'forms/data.html.twig' %}"
      - message: Thank you. Our global health team will review your requirements and respond shortly.
      - reset: true
  review:
    name: review
    fields:
      name:
        type: text
        label: Full name
        validate:
          required: true
        autocomplete: name
      email:
        type: email
        label: Email address
        validate:
          required: true
        autocomplete: email
      message:
        type: textarea
        label: Your experience
        rows: 4
        validate:
          required: true
      privacy:
        type: checkbox
        label: "I confirm that I have read and agree to the [Privacy Policy](/privacy-policy)."
        markdown: true
        validate:
          required: true
      honeypot:
        type: honeypot
    buttons:
      submit:
        type: submit
        value: Send Feedback
        classes: btn btn-primary
    process:
      - save:
          fileprefix: reviews-
          dateformat: Ymd-His
          extension: txt
          body: "{% include 'forms/data.txt.twig' %}"
          folder: forms/reviews
      - email:
          subject: "[GODC] Patient feedback from {{ form.value.name|e }}"
          body: "{% include 'forms/data.html.twig' %}"
      - message: Thank you for sharing your experience with us.
      - reset: true
---

Form definitions used across the site. Edit labels, options and success messages here.
