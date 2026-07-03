@extends('layouts.front')

@section('seo_title', 'Strategic Advisory for Africa Digital Future')
@section('seo_description', 'Cherub Apps Consult helps financial institutions, fintechs, telcos and governments build resilient systems, adopt AI, expand across Africa and scale digital finance. Nairobi, Kenya.')
@section('seo_keywords', 'Africa digital transformation consulting, fintech advisory Africa, strategic advisory Africa, digital finance consulting Africa, Africa market expansion strategy, infrastructure resilience Africa, AI transformation consulting Africa, Kenya consulting firm, Nairobi advisory firm, pan-African business strategy, mobile money strategy Africa, digital banking advisory, SACCO consulting Kenya, MFI technology Africa, financial inclusion Africa, embedded finance Africa, open banking Kenya, Africa scaling strategy, Africa business strategy, Africa strategic partner')
@section('og_title', 'Cherub Apps Consult – Strategic Advisory for Africa Digital Future')
@section('og_description', 'We partner with financial institutions, fintechs, telcos and governments to build resilient systems and scale across Africa. Nairobi, Kenya.')
@section('content')

<!-- =========================================================
     HERO
     ========================================================= -->
<section class="ch-hero">

  {{-- Banner photo background --}}
  <img
    class="ch-hero__bg-img"
    src="{{ asset('images/hero-banner.png') }}"
    alt=""
    fetchpriority="high"
  >
  {{-- Left-side gradient veil so text stays legible --}}
  <div class="ch-hero__veil" aria-hidden="true"></div>

  <div class="ch-hero__inner">
    <div class="ch-hero__content">
      <div class="ch-hero__eyebrow">
        <span>Strategic Advisory for Africa's Digital Future</span>
      </div>
      <h1 class="ch-hero__heading">
        We help organizations<br>
        build resilient systems<br>
        and scale <span class="accent">across Africa.</span>
      </h1>
      <p class="ch-hero__desc">
        We partner with financial institutions, fintechs, telcos, governments,
        and growth-stage enterprises to solve critical challenges in digital
        finance, infrastructure resilience, enterprise transformation,
        and market expansion.
      </p>
      <div class="ch-hero__actions">
        <a href="#services" class="btn-primary">What We Do &rarr;</a>
        <a href="#contact" class="btn-outline">Let's Talk &#128172;</a>
      </div>
    </div>
  </div>

</section>

<!-- =========================================================
     TICKER STRIP
     ========================================================= -->
<div class="ch-ticker" aria-hidden="true">
  <div class="ch-ticker__track">
    <span>Digital Finance Advisory</span><span class="ch-ticker__sep">◆</span>
    <span>Infrastructure Resilience</span><span class="ch-ticker__sep">◆</span>
    <span>AI &amp; Enterprise Transformation</span><span class="ch-ticker__sep">◆</span>
    <span>Market Expansion Across Africa</span><span class="ch-ticker__sep">◆</span>
    <span>Fintech Strategy</span><span class="ch-ticker__sep">◆</span>
    <span>Digital Banking Advisory</span><span class="ch-ticker__sep">◆</span>
    <span>Africa Growth Strategy</span><span class="ch-ticker__sep">◆</span>
    <span>Digital Finance Advisory</span><span class="ch-ticker__sep">◆</span>
    <span>Infrastructure Resilience</span><span class="ch-ticker__sep">◆</span>
    <span>AI &amp; Enterprise Transformation</span><span class="ch-ticker__sep">◆</span>
    <span>Market Expansion Across Africa</span><span class="ch-ticker__sep">◆</span>
    <span>Fintech Strategy</span><span class="ch-ticker__sep">◆</span>
    <span>Digital Banking Advisory</span><span class="ch-ticker__sep">◆</span>
    <span>Africa Growth Strategy</span><span class="ch-ticker__sep">◆</span>
  </div>
</div>

<!-- =========================================================
     WHAT WE DO
     ========================================================= -->
<section class="ch-services" id="services">
  <div class="ch-services__inner">

    <div class="ch-services__intro reveal-left">
      <p class="ch-section-label">What We Do</p>
      <h2 class="ch-section-heading">Strategic solutions.<br>Measurable impact.</h2>
      <p class="ch-section-desc">
        We combine strategy, technology and market insight to help
        organizations grow with confidence.
      </p>
      <a href="{{ route('what-we-do') }}" class="ch-link-arrow">Explore all services &rarr;</a>
    </div>

    <div class="ch-services__grid">

      <div class="ch-service-card reveal rv-d1">
        <div class="ch-service-card__icon ch-service-card__icon--green">
          <i class="fas fa-coins"></i>
        </div>
        <h3 class="ch-service-card__title ch-service-card__title--green">
          Digital Finance &amp; Fintech Advisory
        </h3>
        <p class="ch-service-card__desc">
          Design, launch and scale innovative financial products and ecosystems.
        </p>
        <a href="{{ route('what-we-do') }}" class="ch-service-card__arrow"><i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="ch-service-card reveal rv-d2">
        <div class="ch-service-card__icon ch-service-card__icon--orange">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3 class="ch-service-card__title ch-service-card__title--orange">
          Infrastructure Resilience
        </h3>
        <p class="ch-service-card__desc">
          Build always-on systems with robust architecture, redundancy and business continuity.
        </p>
        <a href="{{ route('what-we-do') }}" class="ch-service-card__arrow"><i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="ch-service-card reveal rv-d3">
        <div class="ch-service-card__icon ch-service-card__icon--green">
          <i class="fas fa-brain"></i>
        </div>
        <h3 class="ch-service-card__title ch-service-card__title--green">
          AI &amp; Enterprise Transformation
        </h3>
        <p class="ch-service-card__desc">
          Prepare your organization for the future with AI readiness, automation and operating model transformation.
        </p>
        <a href="{{ route('what-we-do') }}" class="ch-service-card__arrow"><i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="ch-service-card reveal rv-d4">
        <div class="ch-service-card__icon ch-service-card__icon--orange">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="ch-service-card__title ch-service-card__title--orange">
          Market Expansion Across Africa
        </h3>
        <p class="ch-service-card__desc">
          Enter new markets, build partnerships and scale across Africa with clarity and speed.
        </p>
        <a href="{{ route('what-we-do') }}" class="ch-service-card__arrow"><i class="fas fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================
     WHY CHERUB
     ========================================================= -->
<section class="ch-why">

  {{-- Subtle dot-grid on right half --}}
  <div class="ch-why__bg-grid" aria-hidden="true"></div>

  {{-- Advisor photo — absolutely anchored to bottom-left, bleeds above --}}
  <img
    class="ch-why__photo"
    src="{{ asset('images/why-advisor.png') }}"
    alt=""
    aria-hidden="true"
  >

  <div class="ch-why__inner">
    <div class="ch-why__content">
      <p class="ch-section-label">Why Cherub</p>
      <h2 class="ch-why__heading">The advantage you need</h2>
    </div>
  </div>

</section>

<!-- =========================================================
     TRUSTED BY
     ========================================================= -->
<section class="ch-trusted">
  <div class="ch-trusted__inner">

    <div class="ch-trusted__header reveal">
      <div class="ch-trusted__line"></div>
      <span>Trusted by Organizations Building Africa's Future</span>
      <div class="ch-trusted__line"></div>
    </div>

    <div class="ch-trusted__track-wrap">
      <div class="ch-trusted__track">
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-university"></i></span><span class="ch-trust-item__label">Banks</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-users"></i></span><span class="ch-trust-item__label">SACCOs</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-mobile-alt"></i></span><span class="ch-trust-item__label">Fintechs</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-broadcast-tower"></i></span><span class="ch-trust-item__label">Telcos</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-landmark"></i></span><span class="ch-trust-item__label">Governments</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-shield-alt"></i></span><span class="ch-trust-item__label">Insurers</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-hand-holding-usd"></i></span><span class="ch-trust-item__label">Investors</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-chart-network"></i></span><span class="ch-trust-item__label">MFIs</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-globe-africa"></i></span><span class="ch-trust-item__label">NGOs</span></div>
        <!-- Duplicated for seamless loop -->
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-university"></i></span><span class="ch-trust-item__label">Banks</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-users"></i></span><span class="ch-trust-item__label">SACCOs</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-mobile-alt"></i></span><span class="ch-trust-item__label">Fintechs</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-broadcast-tower"></i></span><span class="ch-trust-item__label">Telcos</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-landmark"></i></span><span class="ch-trust-item__label">Governments</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-shield-alt"></i></span><span class="ch-trust-item__label">Insurers</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-hand-holding-usd"></i></span><span class="ch-trust-item__label">Investors</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-chart-network"></i></span><span class="ch-trust-item__label">MFIs</span></div>
        <div class="ch-trust-item"><span class="ch-trust-item__icon"><i class="fas fa-globe-africa"></i></span><span class="ch-trust-item__label">NGOs</span></div>
      </div>
    </div>

  </div>
</section>

<!-- =========================================================
     INSIGHTS
     ========================================================= -->
<section class="ch-insights" id="insights">
  <div class="ch-insights__inner">

    <div class="ch-insights__intro reveal-left">
      <p class="ch-section-label">Insights</p>
      <h2 class="ch-section-heading">Ideas that<br>drive growth.</h2>
      <p class="ch-section-desc">
        Practical perspectives on digital finance, resilience, AI and
        scaling across Africa.
      </p>
      <a href="{{ route('insights') }}" class="ch-link-arrow">View all insights &rarr;</a>
    </div>

    <div class="ch-insights__grid">
      @forelse ($posts->take(3) as $post)
        <a href="{{ route('posts.view', $post->id) }}" class="ch-article-card reveal rv-d{{ $loop->index + 1 }}">
          @if ($post->image)
            <img
              src="{{ asset('images/' . $post->image) }}"
              alt="{{ $post->title }}"
              class="ch-article-card__img"
            >
          @else
            <div class="ch-article-card__img-placeholder">
              <i class="fas fa-newspaper"></i>
            </div>
          @endif
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">{{ $post->created_at->format('M j, Y') }}</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">
                {{ optional($post->categories->first())->title ?? 'Insights' }}
              </span>
            </div>
            <h3 class="ch-article-card__title">{{ $post->title }}</h3>
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      @empty
        <div class="ch-article-card">
          <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">May 14, 2025</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">Strategy</span>
            </div>
            <h3 class="ch-article-card__title">Why resilience is the new competitive advantage</h3>
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
        <div class="ch-article-card">
          <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">May 7, 2025</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">AI &amp; Transformation</span>
            </div>
            <h3 class="ch-article-card__title">AI readiness in African enterprises: Where to start</h3>
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
        <div class="ch-article-card">
          <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">Apr 30, 2025</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">Market Expansion</span>
            </div>
            <h3 class="ch-article-card__title">Expanding across Africa: Strategy before scale</h3>
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      @endforelse
    </div>

  </div>
</section>

<!-- =========================================================
     CTA
     ========================================================= -->
<section class="ch-cta" id="contact">

  {{-- Subtle green grid overlay --}}
  <div class="ch-cta__bg-grid" aria-hidden="true"></div>

  {{-- Photo anchored bottom-right, bleeds above --}}
  <img
    class="ch-cta__photo"
    src="{{ asset('images/cta-talk.png') }}"
    alt=""
    aria-hidden="true"
  >

  <div class="ch-cta__inner">

    <div class="ch-cta__text">
      <h2 class="ch-cta__heading">Ready to build<br>what's next?</h2>
      <p class="ch-cta__desc">
        Let's discuss how we can help you build resilient systems,
        unlock growth and scale across Africa.
      </p>
    </div>

    <div class="ch-cta__center">
      <a href="{{ route('contact') }}" class="ch-cta__btn">LET'S TALK</a>
    </div>

  </div>
</section>

@endsection
