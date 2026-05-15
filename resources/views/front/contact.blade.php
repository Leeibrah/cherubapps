@extends('layouts.front')

@section('seo_title', 'Contact Us – Talk to Our Africa Advisory Team')
@section('seo_description', 'Get in touch with Cherub Apps Consult. Whether you\'re exploring a new African market, transforming your digital infrastructure, or preparing for AI — start with a conversation. Based in Nairobi, Kenya.')
@section('seo_keywords', 'contact Cherub Apps Consult, Africa advisory contact, Nairobi consulting contact, hire Africa fintech consultant, digital transformation inquiry Africa, Africa strategy consultation, engage Africa advisory firm, Nairobi advisory contact, Kenya consulting firm contact, Africa financial services advisor contact')
@section('og_title', 'Contact Cherub Apps Consult – Let\'s Build Something Together')
@section('og_description', 'Whether you\'re exploring a new market, transforming your infrastructure, or preparing for AI — start with a conversation. We respond within 24 hours.')
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "@id": "{{ config('app.url') }}/contact#webpage",
  "url": "{{ config('app.url') }}/contact",
  "name": "Contact Cherub Apps Consult",
  "description": "Get in touch with Cherub Apps Consult to discuss advisory services, digital transformation projects, or market expansion across Africa.",
  "isPartOf": { "@id": "{{ config('app.url') }}/#website" },
  "mainEntity": {
    "@type": "Organization",
    "@id": "{{ config('app.url') }}/#organization",
    "contactPoint": {
      "@type": "ContactPoint",
      "telephone": "+254707649949",
      "email": "hello@cherubapps.africa",
      "contactType": "customer service",
      "areaServed": "Africa",
      "availableLanguage": "English"
    }
  }
}
</script>
@endsection
@section('content')

<!-- PAGE HERO -->
<section class="ch-page-hero">
  <div class="ch-page-hero__eyebrow"><span>Get In Touch</span></div>
  <h1 class="ch-page-hero__title">Let's Build Something <span class="accent">Together.</span></h1>
  <p class="ch-page-hero__desc">
    Whether you're exploring a new market, transforming your infrastructure, or preparing for AI —
    start with a conversation. We respond within 24 hours.
  </p>
</section>

<!-- CONTACT BODY -->
<section class="ch-contact">
  <div class="ch-contact__inner">

    <!-- LEFT: Info -->
    <div>
      <p class="ch-section-label">Contact Information</p>
      <h2 class="ch-section-heading" style="margin-bottom:12px;">Talk to the<br>Cherub team</h2>
      <p class="ch-section-desc" style="margin-bottom:40px;">
        Our team of advisors across fintech, AI, and infrastructure is ready to explore how
        we can help your organization grow with confidence across Africa.
      </p>

      <div class="ch-contact__info-item">
        <div class="ch-contact__info-icon"><i class="fas fa-envelope"></i></div>
        <div>
          <p class="ch-contact__info-label">Email us</p>
          <p class="ch-contact__info-value">
            <a href="mailto:hello@cherubapps.africa">hello@cherubapps.africa</a>
          </p>
        </div>
      </div>

      <div class="ch-contact__info-item">
        <div class="ch-contact__info-icon"><i class="fas fa-phone"></i></div>
        <div>
          <p class="ch-contact__info-label">Call us</p>
          <p class="ch-contact__info-value">
            <a href="tel:0707649949">0707 649 949</a>
          </p>
        </div>
      </div>

      <div class="ch-contact__info-item">
        <div class="ch-contact__info-icon"><i class="fas fa-globe"></i></div>
        <div>
          <p class="ch-contact__info-label">Website</p>
          <p class="ch-contact__info-value">
            <a href="https://www.cherubapps.africa" target="_blank">www.cherubapps.africa</a>
          </p>
        </div>
      </div>

      <div class="ch-contact__info-item">
        <div class="ch-contact__info-icon"><i class="fas fa-map-marker-alt"></i></div>
        <div>
          <p class="ch-contact__info-label">Location</p>
          <p class="ch-contact__info-value">Nairobi, Kenya<br><span style="font-weight:400;font-size:13px;color:var(--text-muted);">Serving clients across Africa</span></p>
        </div>
      </div>

      <div class="ch-contact__socials">
        <a href="https://www.linkedin.com/company/cherubapps-consult/" target="_blank" class="ch-social-btn">
          <i class="fab fa-linkedin"></i> LinkedIn
        </a>
        <a href="mailto:hello@cherubapps.africa" class="ch-social-btn">
          <i class="fas fa-envelope"></i> Email
        </a>
      </div>

      <!-- Quick links to services -->
      <div style="margin-top: 48px; padding-top: 32px; border-top: 1px solid var(--border);">
        <p style="font-size:12px;font-weight:700;letter-spacing:0.12em;text-transform:uppercase;color:var(--text-light);margin-bottom:16px;">Quick links</p>
        <div style="display:flex;flex-direction:column;gap:10px;">
          <a href="{{ route('what-we-do') }}#digital-finance" class="ch-link-arrow" style="font-size:13px;">Digital Finance &amp; Fintech Advisory &rarr;</a>
          <a href="{{ route('what-we-do') }}#infrastructure" class="ch-link-arrow" style="font-size:13px;">Infrastructure Resilience &rarr;</a>
          <a href="{{ route('what-we-do') }}#ai-transformation" class="ch-link-arrow" style="font-size:13px;">AI &amp; Enterprise Transformation &rarr;</a>
          <a href="{{ route('what-we-do') }}#market-expansion" class="ch-link-arrow" style="font-size:13px;">Market Expansion Across Africa &rarr;</a>
        </div>
      </div>
    </div>

    <!-- RIGHT: Form -->
    <div>
      @if(session('success'))
        <div style="background:#dcfce7;border:1px solid #86efac;border-radius:6px;padding:20px 24px;margin-bottom:24px;display:flex;align-items:center;gap:12px;">
          <i class="fas fa-check-circle" style="color:#16a34a;font-size:20px;"></i>
          <p style="font-size:14px;color:#166534;font-weight:600;">{{ session('success') }}</p>
        </div>
      @endif

      <div class="ch-form">
        <h3 class="ch-form__title">Send us a message</h3>
        <p class="ch-form__subtitle">We respond to all enquiries within 24 hours on business days.</p>

        <form action="{{ route('contact.send') }}" method="POST">
          @csrf

          <div class="ch-form__row">
            <div class="ch-form__group">
              <label class="ch-form__label" for="name">Full Name *</label>
              <input
                type="text"
                id="name"
                name="name"
                class="ch-form__input @error('name') is-invalid @enderror"
                placeholder="Your full name"
                value="{{ old('name') }}"
                required
              >
              @error('name')<p style="font-size:12px;color:#dc2626;margin-top:4px;">{{ $message }}</p>@enderror
            </div>
            <div class="ch-form__group">
              <label class="ch-form__label" for="email">Work Email *</label>
              <input
                type="email"
                id="email"
                name="email"
                class="ch-form__input @error('email') is-invalid @enderror"
                placeholder="your@company.com"
                value="{{ old('email') }}"
                required
              >
              @error('email')<p style="font-size:12px;color:#dc2626;margin-top:4px;">{{ $message }}</p>@enderror
            </div>
          </div>

          <div class="ch-form__row">
            <div class="ch-form__group">
              <label class="ch-form__label" for="company">Organization</label>
              <input
                type="text"
                id="company"
                name="company"
                class="ch-form__input"
                placeholder="Your organization name"
                value="{{ old('company') }}"
              >
            </div>
            <div class="ch-form__group">
              <label class="ch-form__label" for="phone">Phone Number</label>
              <input
                type="tel"
                id="phone"
                name="phone"
                class="ch-form__input"
                placeholder="0707 649 949"
                value="{{ old('phone') }}"
              >
            </div>
          </div>

          <div class="ch-form__group">
            <label class="ch-form__label" for="service">Area of Interest</label>
            <select id="service" name="service" class="ch-form__select">
              <option value="">Select a service area</option>
              <option value="digital-finance" {{ old('service') == 'digital-finance' ? 'selected' : '' }}>Digital Finance &amp; Fintech Advisory</option>
              <option value="infrastructure" {{ old('service') == 'infrastructure' ? 'selected' : '' }}>Digital Infrastructure Resilience</option>
              <option value="ai-transformation" {{ old('service') == 'ai-transformation' ? 'selected' : '' }}>AI &amp; Enterprise Transformation</option>
              <option value="market-expansion" {{ old('service') == 'market-expansion' ? 'selected' : '' }}>Market Expansion Across Africa</option>
              <option value="general" {{ old('service') == 'general' ? 'selected' : '' }}>General Enquiry</option>
            </select>
          </div>

          <div class="ch-form__group">
            <label class="ch-form__label" for="message">Message *</label>
            <textarea
              id="message"
              name="message"
              class="ch-form__textarea @error('message') is-invalid @enderror"
              placeholder="Tell us about your organization, your challenge, and what you're hoping to achieve..."
              required
            >{{ old('message') }}</textarea>
            @error('message')<p style="font-size:12px;color:#dc2626;margin-top:4px;">{{ $message }}</p>@enderror
          </div>

          <button type="submit" class="ch-form__submit">
            Send Message <i class="fas fa-paper-plane"></i>
          </button>
          <p class="ch-form__note">
            <i class="fas fa-lock" style="margin-right:4px;"></i>
            Your information is kept confidential and never shared with third parties.
          </p>
        </form>
      </div>
    </div>

  </div>
</section>

<!-- THREE QUESTIONS STRIP -->
<section style="background:var(--bg-light);padding:60px 0;border-top:1px solid var(--border);">
  <div style="max-width:1280px;margin:0 auto;padding:0 40px;">
    <p class="ch-section-label" style="text-align:center;margin-bottom:16px;">Cherub Helps You Answer</p>
    <div style="display:grid;grid-template-columns:repeat(3,1fr);gap:32px;text-align:center;">
      <div>
        <div style="font-size:40px;font-family:'Playfair Display',serif;font-weight:800;color:var(--supernova);margin-bottom:8px;">01</div>
        <p style="font-size:16px;font-weight:700;color:var(--text);">Where should we expand?</p>
        <p style="font-size:13px;color:var(--text-muted);margin-top:6px;line-height:1.7;">Pan-African market intelligence and go-to-market strategy.</p>
      </div>
      <div>
        <div style="font-size:40px;font-family:'Playfair Display',serif;font-weight:800;color:var(--supernova);margin-bottom:8px;">02</div>
        <p style="font-size:16px;font-weight:700;color:var(--text);">Who should we partner with?</p>
        <p style="font-size:13px;color:var(--text-muted);margin-top:6px;line-height:1.7;">Ecosystem mapping and strategic partnership structuring.</p>
      </div>
      <div>
        <div style="font-size:40px;font-family:'Playfair Display',serif;font-weight:800;color:var(--supernova);margin-bottom:8px;">03</div>
        <p style="font-size:16px;font-weight:700;color:var(--text);">What model scales fastest?</p>
        <p style="font-size:13px;color:var(--text-muted);margin-top:6px;line-height:1.7;">Revenue model design, commercial clarity, and monetization.</p>
      </div>
    </div>
  </div>
</section>

@endsection
