@extends('layouts.front')

@section('seo_title', 'Who We Are – Our Story, Mission & Team')
@section('seo_description', 'Cherub Apps Consult was founded to accelerate Africa\'s digital transformation. We partner with financial institutions, fintechs, telcos and governments across Africa to build resilient systems and unlock scalable growth.')
@section('seo_keywords', 'Cherub Apps story, Africa digital transformation firm, Africa advisory mission, Nairobi fintech consultant, Africa strategic partner, digital finance experts Africa, fintech advisory team Kenya, Africa consulting leadership, financial services advisory Africa, digital future Africa')
@section('og_title', 'Who We Are – Cherub Apps Consult')
@section('og_description', 'A strategic advisory and digital transformation firm built for Africa\'s next decade — helping institutions build resilient systems, scalable ecosystems, and future-ready leadership.')
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebPage",
  "@id": "{{ config('app.url') }}/who-we-are#webpage",
  "url": "{{ config('app.url') }}/who-we-are",
  "name": "Who We Are – Cherub Apps Consult",
  "description": "The story, mission and team behind Cherub Apps Consult — Africa's strategic advisory partner for digital finance and transformation.",
  "isPartOf": { "@id": "{{ config('app.url') }}/#website" },
  "about": { "@id": "{{ config('app.url') }}/#organization" }
}
</script>
@endsection
@section('content')

<!-- PAGE HERO -->
<section class="ch-page-hero">
  <div class="ch-page-hero__eyebrow"><span>Our Story</span></div>
  <h1 class="ch-page-hero__title">Africa's Growth is Our <span class="accent">Mission.</span></h1>
  <p class="ch-page-hero__desc">
    We are a strategic advisory and digital transformation firm built for Africa's next decade —
    helping institutions build resilient systems, scalable ecosystems, and future-ready leadership.
  </p>
</section>

<!-- MISSION -->
<section class="ch-mission">
  <div class="ch-mission__inner">
    <div class="ch-mission__body">
      <p class="ch-section-label">Who We Are</p>
      <h2 class="ch-section-heading">Built for Africa.<br>Driven by impact.</h2>
      <blockquote class="ch-mission__quote">
        "Africa's next wave of growth will be built on resilient systems, intelligent technology adoption, and strong ecosystem partnerships."
      </blockquote>
      <p>
        Cherub Apps Consult is an <strong>Africa-focused strategic advisory and digital transformation firm</strong>
        helping institutions build resilient infrastructure, scalable financial ecosystems, and future-ready
        operating models.
      </p>
      <p>
        We partner with financial institutions, fintechs, telecommunications providers, governments, and
        growth-stage enterprises to solve critical challenges in <strong>digital continuity, market expansion,
        enterprise transformation, and infrastructure resilience.</strong>
      </p>
      <p>
        Cherub exists at the intersection of strategy, technology, and African market intelligence —
        providing advisory that is not just theoretically sound, but operationally executable and
        commercially viable across the continent's diverse regulatory and ecosystem landscapes.
      </p>
      <div style="margin-top: 28px;">
        <a href="{{ route('what-we-do') }}" class="btn-primary">See What We Do &rarr;</a>
      </div>
    </div>

    <div class="ch-mission__stats">
      <div class="ch-stat-card reveal rv-d1">
        <div class="ch-stat-card__number" data-count="4" data-suffix="+">4+</div>
        <div class="ch-stat-card__label">Core Service Areas</div>
      </div>
      <div class="ch-stat-card reveal rv-d2">
        <div class="ch-stat-card__number" data-count="10" data-suffix="+">10+</div>
        <div class="ch-stat-card__label">African Markets</div>
      </div>
      <div class="ch-stat-card reveal rv-d3">
        <div class="ch-stat-card__number" data-count="3">3</div>
        <div class="ch-stat-card__label">Expert Wings</div>
      </div>
      <div class="ch-stat-card reveal rv-d4">
        <div class="ch-stat-card__number">&#x221E;</div>
        <div class="ch-stat-card__label">Growth Potential</div>
      </div>
    </div>
  </div>
</section>

<!-- VALUES -->
<section class="ch-values">
  <div class="ch-values__inner">
    <div class="ch-values__header">
      <p class="ch-section-label">Our Values</p>
      <h2 class="ch-section-heading">What guides everything we do</h2>
      <p class="ch-section-desc" style="max-width:560px;margin:0 auto;">
        Our values are not slogans — they are the operating principles behind every engagement,
        every recommendation, and every partnership we build.
      </p>
    </div>

    <div class="ch-values__grid">
      <div class="ch-value-card reveal rv-d1">
        <div class="ch-value-card__icon"><i class="fas fa-bullseye"></i></div>
        <h3 class="ch-value-card__title">Impact Over Features</h3>
        <p class="ch-value-card__desc">
          We measure success by business outcomes, not deliverable volume. Every recommendation
          is grounded in measurable, real-world impact for African institutions and their customers.
        </p>
      </div>
      <div class="ch-value-card">
        <div class="ch-value-card__icon"><i class="fas fa-globe-africa"></i></div>
        <h3 class="ch-value-card__title">Africa-First Thinking</h3>
        <p class="ch-value-card__desc">
          We don't apply Western playbooks to African problems. Our advisory is purpose-built for
          Africa's unique regulatory, cultural, and market realities — from Nairobi to Lagos to Accra.
        </p>
      </div>
      <div class="ch-value-card">
        <div class="ch-value-card__icon"><i class="fas fa-handshake"></i></div>
        <h3 class="ch-value-card__title">Ecosystem Partnerships</h3>
        <p class="ch-value-card__desc">
          Sustainable growth across Africa is built on strong partnerships. We help organizations
          identify, structure, and execute the right ecosystem relationships that accelerate scale.
        </p>
      </div>
      <div class="ch-value-card">
        <div class="ch-value-card__icon"><i class="fas fa-shield-alt"></i></div>
        <h3 class="ch-value-card__title">Resilience by Design</h3>
        <p class="ch-value-card__desc">
          Resilience is not an afterthought. We embed continuity, redundancy, and risk awareness
          into every strategy — ensuring systems that grow without breaking under pressure.
        </p>
      </div>
      <div class="ch-value-card">
        <div class="ch-value-card__icon"><i class="fas fa-brain"></i></div>
        <h3 class="ch-value-card__title">Intelligence-Led</h3>
        <p class="ch-value-card__desc">
          From AI readiness to data strategy, we help organizations harness intelligent technology
          not as a trend but as a competitive advantage that drives commercial outcomes.
        </p>
      </div>
      <div class="ch-value-card">
        <div class="ch-value-card__icon"><i class="fas fa-chart-line"></i></div>
        <h3 class="ch-value-card__title">Commercial Clarity</h3>
        <p class="ch-value-card__desc">
          Every strategy we develop is designed for real-world adoption, monetization, and long-term
          scale — not just conceptual elegance but executable commercial growth.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- TEAM -->
<section class="ch-team">
  <div class="ch-team__inner">
    <div class="ch-team__header">
      <p class="ch-section-label">Our Team</p>
      <h2 class="ch-section-heading">The experts behind Cherub</h2>
      <p class="ch-section-desc" style="max-width:540px;margin:0 auto;">
        Three specialized wings. One shared mission: to help African organizations build the
        digital infrastructure and strategy needed to lead the continent's next era of growth.
      </p>
    </div>

    <div class="ch-team__grid">
      <div class="ch-team-card">
        <div class="ch-team-card__avatar"><i class="fas fa-user-tie"></i></div>
        <div class="ch-team-card__body">
          <p class="ch-team-card__wing">Fintech Wing &mdash; Lead Consultant</p>
          <h3 class="ch-team-card__name">Judith Imamai</h3>
          <p class="ch-team-card__bio">
            Judith leads Cherub's fintech advisory practice, bringing deep expertise in digital
            financial solutions, embedded finance, and market entry strategy across Africa.
            She helps financial institutions and fintech founders move from concept to
            commercially viable digital finance products.
          </p>
          <a href="https://www.linkedin.com/in/judith-i-b1689224" target="_blank" class="ch-team-card__linkedin">
            <i class="fab fa-linkedin"></i> Connect on LinkedIn
          </a>
        </div>
      </div>

      <div class="ch-team-card">
        <div class="ch-team-card__avatar"><i class="fas fa-robot"></i></div>
        <div class="ch-team-card__body">
          <p class="ch-team-card__wing">AI Wing &mdash; Advisor</p>
          <h3 class="ch-team-card__name">Michael Michie</h3>
          <p class="ch-team-card__bio">
            Michael leads Cherub's AI readiness and enterprise transformation practice.
            He helps organizations move from AI curiosity to structured implementation —
            through readiness assessments, executive workshops, and intelligent automation roadmaps
            tailored for African leadership teams.
          </p>
          <a href="https://www.linkedin.com/in/michael-michie-10a29664/" target="_blank" class="ch-team-card__linkedin">
            <i class="fab fa-linkedin"></i> Connect on LinkedIn
          </a>
        </div>
      </div>

      <div class="ch-team-card">
        <div class="ch-team-card__avatar"><i class="fas fa-laptop-code"></i></div>
        <div class="ch-team-card__body">
          <p class="ch-team-card__wing">Tech Support &mdash; Advisor</p>
          <h3 class="ch-team-card__name">Lee Ibrahim</h3>
          <p class="ch-team-card__bio">
            Lee heads technology infrastructure and digital systems execution at Cherub.
            He ensures that the strategies Cherub develops are backed by solid technical
            architecture — from infrastructure resilience to digital platform delivery
            across African markets.
          </p>
          <a href="https://www.linkedin.com/in/leeibrahim/" target="_blank" class="ch-team-card__linkedin">
            <i class="fab fa-linkedin"></i> Connect on LinkedIn
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="ch-cta">
  <div class="ch-cta__inner">
    <div>
      <h2 class="ch-cta__heading">Ready to work<br>with our team?</h2>
      <p class="ch-cta__desc">Let's explore how Cherub can help your organization build resilient systems and scale across Africa.</p>
    </div>
    <div class="ch-cta__center">
      <a href="{{ route('contact') }}" class="ch-cta__btn">Get in Touch &rarr;</a>
    </div>
    <div class="ch-cta__contact">
      <div class="ch-contact-item"><i class="fas fa-envelope"></i><span>hello@cherubapps.africa</span></div>
      <div class="ch-contact-item"><i class="fas fa-phone"></i><span>0707 649 949</span></div>
      <div class="ch-contact-item"><i class="fas fa-map-marker-alt"></i><span>Nairobi, Kenya</span></div>
    </div>
  </div>
</section>

@endsection
