@extends('layouts.front')

@section('seo_title', 'About Us – Africa Strategic Advisory & Digital Transformation')
@section('seo_description', 'Learn about Cherub Apps Consult — a Nairobi-based strategic advisory firm helping African financial institutions, fintechs, and enterprises build resilient digital systems and scale across Africa.')
@section('seo_keywords', 'about Cherub Apps Consult, Africa advisory firm, Nairobi consulting firm, digital transformation Africa, Africa fintech advisory, strategic advisory Kenya, African digital future, financial institutions consulting Africa, enterprise advisory Africa, Africa technology firm')
@section('og_title', 'About Cherub Apps Consult – Africa\'s Digital Advisory Partner')
@section('og_description', 'We are a strategic advisory firm built for Africa\'s next decade — helping institutions build resilient systems, scalable ecosystems, and future-ready leadership.')
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "@id": "{{ config('app.url') }}/about#webpage",
  "url": "{{ config('app.url') }}/about",
  "name": "About Cherub Apps Consult",
  "description": "Cherub Apps Consult is a strategic advisory firm based in Nairobi, Kenya, specialising in digital finance, fintech advisory, infrastructure resilience, AI transformation and pan-African market expansion.",
  "isPartOf": { "@id": "{{ config('app.url') }}/#website" },
  "about": { "@id": "{{ config('app.url') }}/#organization" }
}
</script>
@endsection
@section('content')

<!-- PAGE HERO -->
<section class="ch-page-hero">
  <div class="ch-page-hero__eyebrow"><span>About Cherub Apps</span></div>
  <h1 class="ch-page-hero__title">Building Africa's <span class="accent">Digital Future.</span></h1>
  <p class="ch-page-hero__desc">
    Cherub Apps Consult — Building resilient systems. Unlocking scalable growth.
    Powering Africa's digital future.
  </p>
</section>

<!-- STORY -->
<section class="ch-about-story">
  <div class="ch-about-story__inner">
    <div class="ch-about-story__content">
      <p class="ch-section-label">Our Story</p>
      <h2 class="ch-section-heading">Advisory that drives growth across the continent</h2>
      <p>
        Cherub Apps Consult was founded on a clear conviction: <strong>Africa's next wave of economic growth
        would be shaped by the organizations that build most resiliently, partner most intelligently,
        and transform most decisively.</strong>
      </p>
      <p>
        We are a global consultancy that supports SMEs and fintechs across Africa with operations,
        finance, AI, and tech systems execution. Our positioning sits at the convergence of
        <strong>financial innovation, digital infrastructure resilience, and enterprise transformation</strong> —
        three sectors that are redefining Africa's next decade.
      </p>
      <p>
        As institutions increasingly prioritize uptime, intelligent automation, digital finance, and
        cross-border scale, Cherub is building a differentiated advisory platform capable of serving
        both enterprise and ecosystem-level transformation across the continent.
      </p>
      <div style="margin-top:28px;">
        <a href="{{ route('who-we-are') }}" class="btn-primary" style="margin-right:12px;">Meet Our Team &rarr;</a>
        <a href="{{ route('contact') }}" class="btn-outline">Talk to Us</a>
      </div>
    </div>

    <div class="ch-spot-box">
      <p class="ch-spot-box__label">The Cherub Spot</p>
      <h3 class="ch-spot-box__title">Robust enough for institutional finance.<br>Modern enough for fintech users.<br>Intelligent enough to lead the AI era.</h3>
      <ul class="ch-spot-list">
        <li>
          <i class="fas fa-check-circle"></i>
          <span><strong style="color:#fff;">Innovative</strong> — We bring fresh thinking to Africa's oldest institutional challenges, combining global best practices with continent-specific insight.</span>
        </li>
        <li>
          <i class="fas fa-check-circle"></i>
          <span><strong style="color:#fff;">Commercially Viable</strong> — Every strategy we design is built for real adoption, monetization, and sustainable revenue — not just conceptual elegance.</span>
        </li>
        <li>
          <i class="fas fa-check-circle"></i>
          <span><strong style="color:#fff;">Regulator-Aware</strong> — We navigate Africa's complex and evolving regulatory landscapes with precision, helping clients stay compliant as they scale.</span>
        </li>
        <li>
          <i class="fas fa-check-circle"></i>
          <span><strong style="color:#fff;">Purpose-Built for Africa</strong> — Our solutions are not adapted from Western playbooks. They are built for Africa's infrastructure realities, market dynamics, and growth opportunities.</span>
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- INVESTMENT THESIS -->
<section class="ch-thesis">
  <div class="ch-thesis__inner">
    <p class="ch-section-label" style="text-align:center;">Investment Thesis</p>
    <h2 class="ch-section-heading" style="text-align:center;margin-bottom:32px;">Positioned at Africa's convergence point</h2>
    <p class="ch-thesis__quote">
      "Cherub Apps Consult is positioned at the convergence of financial innovation, digital infrastructure resilience, and enterprise transformation."
    </p>
    <p class="ch-thesis__body">
      These three sectors are redefining Africa's next decade of economic growth. As institutions
      increasingly prioritize uptime, intelligent automation, digital finance, and cross-border scale,
      Cherub is building a differentiated advisory platform capable of serving both enterprise and
      ecosystem-level transformation.
    </p>
    <p class="ch-thesis__body">
      We help organizations answer the three questions that define strategic success in Africa:
      <strong>Where should we expand? Who should we partner with? What model scales fastest?</strong>
      The answers require more than frameworks — they require deep African market intelligence,
      technical depth, and commercial clarity working together.
    </p>
    <div class="ch-thesis__vision">
      <p>
        <span>Vision:</span> To become Africa's trusted strategic partner for
        digital finance, resilient infrastructure, and transformation advisory —
        helping organizations lead the continent's most important growth wave.
      </p>
    </div>
  </div>
</section>

<!-- WHO WE SERVE -->
<section class="ch-serve">
  <div class="ch-serve__inner">
    <div class="ch-serve__header">
      <p class="ch-section-label">Who We Serve</p>
      <h2 class="ch-section-heading">Partnering with institutions, founders,<br>and growth-stage enterprises</h2>
      <p class="ch-section-desc" style="max-width:560px;margin:0 auto;">
        We work with organizations shaping the future of finance and innovation across Africa —
        from established banks to emerging fintechs and development partners.
      </p>
    </div>
    <div class="ch-serve__grid">
      <div class="ch-serve-card">
        <div class="ch-serve-card__icon"><i class="fas fa-university"></i></div>
        <h3 class="ch-serve-card__title">Banks</h3>
        <p class="ch-serve-card__desc">Commercial and retail banking institutions building digital capabilities, resilient infrastructure, and new revenue streams across Africa.</p>
      </div>
      <div class="ch-serve-card">
        <div class="ch-serve-card__icon"><i class="fas fa-mobile-alt"></i></div>
        <h3 class="ch-serve-card__title">Fintechs</h3>
        <p class="ch-serve-card__desc">Digital financial technology companies and innovators scaling across African markets — from payments and lending to embedded finance and wallets.</p>
      </div>
      <div class="ch-serve-card">
        <div class="ch-serve-card__icon"><i class="fas fa-users"></i></div>
        <h3 class="ch-serve-card__title">SACCOs</h3>
        <p class="ch-serve-card__desc">Savings and Credit Cooperative Organizations modernizing their digital offerings and expanding their member value proposition.</p>
      </div>
      <div class="ch-serve-card">
        <div class="ch-serve-card__icon"><i class="fas fa-hand-holding-usd"></i></div>
        <h3 class="ch-serve-card__title">MFIs</h3>
        <p class="ch-serve-card__desc">Microfinance institutions and lending service providers scaling digital credit, improving operational resilience, and reaching underserved markets.</p>
      </div>
      <div class="ch-serve-card">
        <div class="ch-serve-card__icon"><i class="fas fa-store"></i></div>
        <h3 class="ch-serve-card__title">SMEs</h3>
        <p class="ch-serve-card__desc">Small and medium-sized enterprises adopting digital finance tools, AI systems, and operational frameworks to compete and grow across African markets.</p>
      </div>
      <div class="ch-serve-card">
        <div class="ch-serve-card__icon"><i class="fas fa-globe"></i></div>
        <h3 class="ch-serve-card__title">Development Partners</h3>
        <p class="ch-serve-card__desc">International agencies and funding organizations supporting digital infrastructure, fintech ecosystems, and enterprise transformation across the continent.</p>
      </div>
    </div>
  </div>
</section>

<!-- PORTFOLIO -->
<section class="ch-portfolio">
  <div class="ch-portfolio__inner">
    <div class="ch-portfolio__header">
      <p class="ch-section-label">Sample Portfolio</p>
      <h2 class="ch-section-heading">Organizations we have partnered with</h2>
      <p class="ch-section-desc" style="max-width:520px;margin:0 auto;">
        From fintech startups to conservation organizations and telecoms infrastructure — a diverse
        ecosystem of partners and products across Africa.
      </p>
    </div>
    <div class="ch-portfolio__grid">
      <div class="ch-portfolio-item">
        <div class="ch-portfolio-item__icon"><i class="fas fa-leaf"></i></div>
        <div class="ch-portfolio-item__name">Earth Interiors</div>
      </div>
      <div class="ch-portfolio-item">
        <div class="ch-portfolio-item__icon"><i class="fas fa-bee" style="color:var(--orange)"></i>🐝</div>
        <div class="ch-portfolio-item__name">Lend'Hive</div>
      </div>
      <div class="ch-portfolio-item">
        <div class="ch-portfolio-item__icon"><i class="fas fa-rocket"></i></div>
        <div class="ch-portfolio-item__name">FutureFast</div>
      </div>
      <div class="ch-portfolio-item">
        <div class="ch-portfolio-item__icon"><i class="fas fa-paw"></i></div>
        <div class="ch-portfolio-item__name">Hirola Conservation</div>
      </div>
      <div class="ch-portfolio-item">
        <div class="ch-portfolio-item__icon"><i class="fas fa-network-wired"></i></div>
        <div class="ch-portfolio-item__name">WAICTANET</div>
      </div>
      <div class="ch-portfolio-item">
        <div class="ch-portfolio-item__icon"><i class="fas fa-sms"></i></div>
        <div class="ch-portfolio-item__name">Buffer SMS</div>
      </div>
      <div class="ch-portfolio-item">
        <div class="ch-portfolio-item__icon"><i class="fas fa-tachometer-alt"></i></div>
        <div class="ch-portfolio-item__name">Founder Productivity Blueprint</div>
      </div>
      <div class="ch-portfolio-item" style="border:2px dashed var(--border);background:transparent;display:flex;align-items:center;justify-content:center;">
        <div>
          <div style="font-size:28px;margin-bottom:8px;text-align:center;color:var(--text-light);">+</div>
          <div class="ch-portfolio-item__name" style="color:var(--text-light);">Your Organization</div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ch-cta">
  <div class="ch-cta__inner">
    <div>
      <h2 class="ch-cta__heading">Let's build the future<br>of digital finance together.</h2>
      <p class="ch-cta__desc">Stay curious. Stay innovative. The next era of African growth starts with the right strategic partner.</p>
    </div>
    <div class="ch-cta__center">
      <a href="{{ route('contact') }}" class="ch-cta__btn">Let's Talk &rarr;</a>
    </div>
    <div class="ch-cta__contact">
      <div class="ch-contact-item"><i class="fas fa-envelope"></i><span>hello@cherubapps.africa</span></div>
      <div class="ch-contact-item"><i class="fas fa-phone"></i><span>0707 649 949</span></div>
      <div class="ch-contact-item"><i class="fab fa-linkedin"></i><span>cherubapps-consult</span></div>
    </div>
  </div>
</section>

@endsection
