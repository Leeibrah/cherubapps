@extends('layouts.front')

@section('seo_title', 'Strategic Advisory for Africa Digital Future')
@section('seo_description', 'Cherub Apps Consult helps financial institutions, fintechs, telcos and governments build resilient systems, adopt AI, expand across Africa and scale digital finance. Nairobi, Kenya.')
@section('seo_keywords', 'Africa digital transformation consulting, fintech advisory Africa, strategic advisory Africa, digital finance consulting Africa, Africa market expansion strategy, infrastructure resilience Africa, AI transformation consulting Africa, Kenya consulting firm, Nairobi advisory firm, pan-African business strategy, mobile money strategy Africa, digital banking advisory, SACCO consulting Kenya, MFI technology Africa, financial inclusion Africa, embedded finance Africa, open banking Kenya, Africa scaling strategy, Africa business strategy, Africa strategic partner')
@section('og_title', 'Cherub Apps Consult – Strategic Advisory for Africa Digital Future')
@section('og_description', 'We partner with financial institutions, fintechs, telcos and governments to build resilient systems and scale across Africa. Nairobi, Kenya.')
@section('content')

<!-- =========================================================
     HERO SLIDER
     ========================================================= -->
@php
  $cairiScores = [
    'Leadership' => 80,
    'Strategy'   => 74,
    'Data'       => 58,
    'Technology' => 69,
    'People'     => 62,
    'Governance' => 51,
    'Operations' => 66,
  ];
  $cairiLowest = min($cairiScores);
@endphp
<section class="ch-slider" id="ch-slider" aria-roledescription="carousel" aria-label="Featured">
  <div class="ch-slider__track">

    {{-- ---------- Slide 1: CAIRI AI Readiness Assessment ---------- --}}
    <div class="ch-slide ch-slide--cairi is-active" role="group" aria-roledescription="slide" aria-label="1 of 2">

      {{-- Decorative concentric rings, top-right --}}
      <svg class="cairi__rings" viewBox="0 0 800 800" aria-hidden="true">
        <circle cx="400" cy="400" r="390" stroke="#0aa86b" stroke-opacity=".14" />
        <circle cx="430" cy="380" r="330" stroke="#e85d04" stroke-opacity=".16" />
        <circle cx="440" cy="390" r="250" stroke="#0aa86b" stroke-opacity=".22" stroke-dasharray="3 9" />
      </svg>

      <div class="cairi__inner">
        <div class="cairi__content">

          <div class="cairi__brand">
            <svg class="cairi__mark" viewBox="0 0 64 64" aria-hidden="true">
              <defs>
                <linearGradient id="cairiArc" x1="0.8" y1="0" x2="0.3" y2="1">
                  <stop offset="0" stop-color="#e8410a" />
                  <stop offset="0.45" stop-color="#f59e0b" />
                  <stop offset="0.75" stop-color="#0aa86b" />
                </linearGradient>
              </defs>
              <path d="M50.4 13.6 A26 26 0 1 0 50.4 50.4" fill="none" stroke="url(#cairiArc)" stroke-width="7" stroke-linecap="round" />
              <path d="M22 19 L30 16 L36 18 L40 22 L44 23 L41 29 L38 34 L37 40 L33 47 L29 48 L27 42 L26 36 L21 33 L17 29 L18 23 Z" fill="none" stroke="#0aa86b" stroke-width="1" stroke-linejoin="round" stroke-opacity=".7" />
              <g stroke="#0aa86b" stroke-width=".6" stroke-opacity=".6">
                <line x1="23" y1="23" x2="31" y2="21" /><line x1="31" y1="21" x2="37" y2="27" />
                <line x1="23" y1="23" x2="29" y2="31" /><line x1="29" y1="31" x2="37" y2="27" />
                <line x1="29" y1="31" x2="32" y2="40" />
              </g>
              <circle cx="23" cy="23" r="1.8" fill="#e85d04" /><circle cx="31" cy="21" r="1.8" fill="#0aa86b" />
              <circle cx="37" cy="27" r="1.8" fill="#e85d04" /><circle cx="29" cy="31" r="1.8" fill="#0aa86b" />
              <circle cx="32" cy="40" r="1.8" fill="#e85d04" />
              <g stroke-width="3" stroke-linecap="round">
                <line x1="47" y1="31" x2="59" y2="31" stroke="#0aa86b" />
                <line x1="49" y1="37" x2="58" y2="37" stroke="#0aa86b" />
                <line x1="58" y1="25" x2="60" y2="25" stroke="#e85d04" />
              </g>
            </svg>
            <div class="cairi__brand-text">
              <strong>CAIRI</strong>
              <span>by Cherubapps Africa</span>
            </div>
          </div>

          <h2 class="cairi__heading">
            Get Your <span class="cairi__accent-orange">AI</span><br>
            <span class="cairi__accent-green">Readiness</span><br>
            Assessment
          </h2>

          <p class="cairi__desc">
            Score your organization's AI maturity from 0 to 100 across seven
            dimensions, then get a prioritized roadmap and a board-ready report.
            Built for African enterprises and government.
          </p>

          <div class="cairi__actions">
            <a href="https://cairiai.com" target="_blank" class="cairi__btn cairi__btn--primary">
              Start free assessment <i class="fas fa-arrow-right"></i>
            </a>
            <a href="https://cairiai.com/pricing" target="_blank" class="cairi__btn cairi__btn--outline">View pricing</a>
          </div>

          <div class="cairi__tagline">
            <span class="cairi__tag cairi__tag--orange">Measure.</span>
            <span class="cairi__tag cairi__tag--green">Understand.</span>
            <span class="cairi__tag cairi__tag--gold">Transform.</span>
            <span class="cairi__meta">Free &middot; 10 questions &middot; No account needed</span>
          </div>
        </div>

        {{-- Sample score card --}}
        <div class="cairi-card" aria-label="Sample AI readiness report: overall score 66 out of 100">
          <div class="cairi-card__head">
            <h3>AI Readiness Score</h3>
            <span class="cairi-card__pill">Sample report</span>
          </div>

          <div class="cairi-card__body">
            <div class="cairi-ring">
              <svg viewBox="0 0 100 100" aria-hidden="true">
                <circle class="cairi-ring__track" cx="50" cy="50" r="42" pathLength="100" />
                <circle class="cairi-ring__val" cx="50" cy="50" r="42" pathLength="100" style="--off: {{ 100 - 66 }}" />
              </svg>
              <div class="cairi-ring__label">
                <strong>66</strong>
                <span>out of 100</span>
              </div>
            </div>

            <ul class="cairi-bars">
              @foreach ($cairiScores as $dimension => $score)
                <li class="cairi-bars__row {{ $score === $cairiLowest ? 'is-low' : '' }}" style="--v: {{ $score }}%; --i: {{ $loop->index }}">
                  <span class="cairi-bars__name">{{ $dimension }}</span>
                  <span class="cairi-bars__track"><span class="cairi-bars__fill"></span></span>
                  <span class="cairi-bars__score">{{ $score }}</span>
                </li>
              @endforeach
            </ul>
          </div>

          <div class="cairi-card__foot">
            <div>
              <span>Top priority</span>
              <strong class="is-orange">Governance</strong>
            </div>
            <div>
              <span>Next step</span>
              <strong>90-day roadmap</strong>
            </div>
            <div>
              <span>Output</span>
              <strong class="is-gold">Board report</strong>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- ---------- Slide 2: Cherub Apps hero ---------- --}}
    <div class="ch-slide ch-hero" role="group" aria-roledescription="slide" aria-label="2 of 2">

      {{-- Banner photo background --}}
      <img
        class="ch-hero__bg-img"
        src="{{ asset('images/hero-banner.png') }}"
        alt=""
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
            <a href="{{ route('contact') }}" class="btn-outline">Let's Talk &#128172;</a>
          </div>
        </div>
      </div>
    </div>

  </div>

  <div class="ch-slider__controls">
    <button class="ch-slider__arrow ch-slider__arrow--prev" type="button" aria-label="Previous slide">
      <i class="fas fa-chevron-left"></i>
    </button>
    <div class="ch-slider__dots" role="tablist" aria-label="Choose slide">
      <button class="ch-slider__dot is-active" type="button" role="tab" aria-selected="true" aria-label="Slide 1"></button>
      <button class="ch-slider__dot" type="button" role="tab" aria-selected="false" aria-label="Slide 2"></button>
    </div>
    <button class="ch-slider__arrow ch-slider__arrow--next" type="button" aria-label="Next slide">
      <i class="fas fa-chevron-right"></i>
    </button>
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
     CAIRI STORIES
     ========================================================= -->
<section class="cs-section" id="stories">
  <div class="cs-container">
    <div class="cs-header">
      <div class="cs-intro reveal-left">
        <span class="cs-badge">CAIRI Stories</span>
        <h2 class="cs-heading">AI readiness, one story at a time</h2>
        <p class="cs-lead">
          Follow Amina, Kevin and Mama Njeri as their organizations get ready for AI &mdash; short
          episodes, under a minute each.
        </p>
      </div>
      <div class="cs-arrows" data-cs-arrows>
        <button type="button" class="cs-arrow cs-arrow--prev" data-cs-scroll="-1" aria-label="Previous stories" disabled>
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 18l-6-6 6-6"/></svg>
        </button>
        <button type="button" class="cs-arrow cs-arrow--next" data-cs-scroll="1" aria-label="Next stories">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6l6 6-6 6"/></svg>
        </button>
      </div>
    </div>
    <div class="cs-track" data-cs-track></div>
  </div>
</section>

<div class="cs-modal" data-cs-modal role="dialog" aria-modal="true" hidden>
  <button type="button" class="cs-modal-close" data-cs-close aria-label="Close video">
    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" d="M6 6l12 12M18 6 6 18"/></svg>
  </button>
  <div class="cs-modal-inner" data-cs-inner>
    <button type="button" class="cs-modal-nav" data-cs-nav="-1" aria-label="Previous video">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 18l-6-6 6-6"/></svg>
    </button>
    <div class="cs-player">
      <div class="cs-player-frame" data-cs-frame>
        <video class="cs-player-video" data-cs-video controls playsinline></video>
        <button type="button" class="cs-expand" data-cs-expand aria-label="Enlarge video">
          <svg class="cs-expand-open" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 9V4h5M20 9V4h-5M4 15v5h5M20 15v5h-5"/></svg>
          <svg class="cs-expand-shut" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 4v5H4M15 4v5h5M9 20v-5H4M15 20v-5h5"/></svg>
        </button>
      </div>
      <div class="cs-player-meta">
        <p class="cs-player-label" data-cs-label></p>
        <p class="cs-player-title" data-cs-title></p>
        <p class="cs-player-caption" data-cs-caption></p>
      </div>
      <div class="cs-dots" data-cs-dots></div>
    </div>
    <button type="button" class="cs-modal-nav" data-cs-nav="1" aria-label="Next video">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 6l6 6-6 6"/></svg>
    </button>
  </div>
</div>

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

@push('scripts')
<script>
  // Hero slider
  (function() {
    var slider = document.getElementById('ch-slider');
    if (!slider) return;
    var slides = slider.querySelectorAll('.ch-slide');
    var dots   = slider.querySelectorAll('.ch-slider__dot');
    var current = 0;
    var delay = 8000;
    var timer = null;
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function show(index) {
      current = (index + slides.length) % slides.length;
      slides.forEach(function(slide, i) {
        var active = i === current;
        slide.classList.toggle('is-active', active);
        slide.setAttribute('aria-hidden', active ? 'false' : 'true');
        slide.inert = !active;
      });
      dots.forEach(function(dot, i) {
        dot.classList.toggle('is-active', i === current);
        dot.setAttribute('aria-selected', i === current ? 'true' : 'false');
      });
    }

    function start() {
      if (reduceMotion) return;
      stop();
      timer = setInterval(function() { show(current + 1); }, delay);
    }
    function stop() { clearInterval(timer); timer = null; }

    slider.querySelector('.ch-slider__arrow--prev').addEventListener('click', function() { show(current - 1); start(); });
    slider.querySelector('.ch-slider__arrow--next').addEventListener('click', function() { show(current + 1); start(); });
    dots.forEach(function(dot, i) {
      dot.addEventListener('click', function() { show(i); start(); });
    });

    slider.addEventListener('keydown', function(e) {
      if (e.key === 'ArrowLeft')  { show(current - 1); start(); }
      if (e.key === 'ArrowRight') { show(current + 1); start(); }
    });

    // Pause while the visitor is interacting with the slider
    slider.addEventListener('mouseenter', stop);
    slider.addEventListener('mouseleave', start);
    slider.addEventListener('focusin', stop);
    slider.addEventListener('focusout', start);

    // Swipe on touch devices
    var touchX = null;
    slider.addEventListener('touchstart', function(e) { touchX = e.touches[0].clientX; }, { passive: true });
    slider.addEventListener('touchend', function(e) {
      if (touchX === null) return;
      var dx = e.changedTouches[0].clientX - touchX;
      if (Math.abs(dx) > 50) { show(current + (dx < 0 ? 1 : -1)); start(); }
      touchX = null;
    });

    show(0);
    start();
  })();

  // CAIRI stories
  (function () {
    // Edit this list to change the stories. Posters are the title-card frame of each video.
    var STORIES = [
      { src: @json(asset('videos/cairi-video-1.mp4')), poster: @json(asset('images/stories/cairi-video-1.jpg')), label: 'Intro', title: 'We’re getting AI!', caption: 'Monday, 9:00 AM. Amina makes an announcement — and the team reacts.', duration: '0:37' },
      { src: @json(asset('videos/cairi-video-2.mp4')), poster: @json(asset('images/stories/cairi-video-2.jpg')), label: 'Episode 1', title: 'Deadline: Friday', caption: '“The board wants our AI plan…” Silence in the boardroom.', duration: '0:47' },
      { src: @json(asset('videos/cairi-video-3.mp4')), poster: @json(asset('images/stories/cairi-video-3.jpg')), label: 'Episode 2', title: 'No new tool needed', caption: 'Kevin finds AI in software the team already pays for.', duration: '0:52' },
      { src: @json(asset('videos/cairi-video-4.mp4')), poster: @json(asset('images/stories/cairi-video-4.jpg')), label: 'Episode 3', title: 'Flag the urgent ones', caption: 'Kevin lets AI read every customer complaint and surface what matters.', duration: '0:50' },
      { src: @json(asset('videos/cairi-video-5.mp4')), poster: @json(asset('images/stories/cairi-video-5.jpg')), label: 'Episode 4', title: 'Mama Njeri’s next step', caption: 'Six years trading mitumba in Gikomba — and a KES 30,000 restock.', duration: '0:57' }
    ];
    var track = document.querySelector('[data-cs-track]');
    var modal = document.querySelector('[data-cs-modal]');
    if (!track || !modal) return;
    var video = modal.querySelector('[data-cs-video]');
    var frame = modal.querySelector('[data-cs-frame]');
    var expandBtn = modal.querySelector('[data-cs-expand]');
    var arrows = document.querySelector('[data-cs-arrows]');
    var prevArrow = document.querySelector('[data-cs-scroll="-1"]');
    var nextArrow = document.querySelector('[data-cs-scroll="1"]');
    var navPrev = modal.querySelector('[data-cs-nav="-1"]');
    var navNext = modal.querySelector('[data-cs-nav="1"]');
    var closeBtn = modal.querySelector('[data-cs-close]');
    var dots = modal.querySelector('[data-cs-dots]');
    var current = null;
    var savedOverflow = '';
    var lastFocus = null;

    function escapeHtml(text) {
      var div = document.createElement('div');
      div.textContent = text;
      return div.innerHTML;
    }

    // Cards
    STORIES.forEach(function (story, i) {
      var card = document.createElement('button');
      card.type = 'button';
      card.className = 'cs-card';
      card.setAttribute('aria-label', 'Play ' + story.label + ': ' + story.title);
      card.innerHTML =
        '<span class="cs-thumb">' +
          '<img src="' + story.poster + '" alt="" loading="lazy" decoding="async">' +
          '<span class="cs-thumb-shade"></span>' +
          '<span class="cs-duration">' + escapeHtml(story.duration) + '</span>' +
          '<span class="cs-play"><span><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5.5v13a1 1 0 0 0 1.52.85l10.4-6.5a1 1 0 0 0 0-1.7L9.52 4.65A1 1 0 0 0 8 5.5Z"/></svg></span></span>' +
        '</span>' +
        '<span class="cs-card-body">' +
          '<span class="cs-card-label">' + escapeHtml(story.label) + '</span>' +
          '<span class="cs-card-title">' + escapeHtml(story.title) + '</span>' +
          '<span class="cs-card-caption">' + escapeHtml(story.caption) + '</span>' +
        '</span>';
      card.addEventListener('click', function () { open(i); });
      track.appendChild(card);

      var dot = document.createElement('button');
      dot.type = 'button';
      dot.className = 'cs-dot';
      dot.setAttribute('aria-label', 'Play ' + story.label);
      dot.addEventListener('click', function () { show(i); });
      dots.appendChild(dot);
    });

    // Row arrows (hidden when every card already fits)
    function updateArrows() {
      arrows.hidden = track.scrollWidth <= track.clientWidth + 4;
      prevArrow.disabled = track.scrollLeft <= 4;
      nextArrow.disabled = track.scrollLeft + track.clientWidth >= track.scrollWidth - 4;
    }
    [prevArrow, nextArrow].forEach(function (button) {
      button.addEventListener('click', function () {
        var card = track.querySelector('.cs-card');
        track.scrollBy({ left: Number(button.dataset.csScroll) * (card.offsetWidth + 20), behavior: 'smooth' });
      });
    });
    track.addEventListener('scroll', updateArrows);
    window.addEventListener('resize', updateArrows);
    updateArrows();

    // Modal
    function show(i) {
      current = i;
      var story = STORIES[i];
      video.poster = story.poster;
      video.src = story.src;
      modal.setAttribute('aria-label', story.label + ': ' + story.title);
      modal.querySelector('[data-cs-label]').textContent = story.label + ' · ' + (i + 1) + ' of ' + STORIES.length;
      modal.querySelector('[data-cs-title]').textContent = story.title;
      modal.querySelector('[data-cs-caption]').textContent = story.caption;
      navPrev.disabled = i === 0;
      navNext.disabled = i === STORIES.length - 1;
      Array.prototype.forEach.call(dots.children, function (dot, d) {
        dot.classList.toggle('is-active', d === i);
      });
      // Opened by a click, so sound is allowed; fall back to muted if the browser refuses.
      video.muted = false;
      video.play().catch(function () {
        video.muted = true;
        video.play().catch(function () {});
      });
    }

    function open(i) {
      lastFocus = document.activeElement;
      savedOverflow = document.body.style.overflow;
      document.body.style.overflow = 'hidden';
      modal.hidden = false;
      show(i);
      closeBtn.focus();
    }

    // Enlarge: full screen on the frame (keeps our button visible); iPhone only allows the video itself
    function fullscreenEl() { return document.fullscreenElement || document.webkitFullscreenElement; }
    function toggleEnlarge() {
      if (fullscreenEl()) {
        (document.exitFullscreen || document.webkitExitFullscreen).call(document);
      } else if (frame.requestFullscreen) {
        frame.requestFullscreen();
      } else if (frame.webkitRequestFullscreen) {
        frame.webkitRequestFullscreen();
      } else if (video.webkitEnterFullscreen) {
        video.webkitEnterFullscreen();
      }
    }
    function syncEnlarge() {
      var on = fullscreenEl() === frame;
      frame.classList.toggle('is-enlarged', on);
      expandBtn.setAttribute('aria-label', on ? 'Exit full screen' : 'Enlarge video');
    }
    expandBtn.addEventListener('click', toggleEnlarge);
    document.addEventListener('fullscreenchange', syncEnlarge);
    document.addEventListener('webkitfullscreenchange', syncEnlarge);

    function close() {
      if (fullscreenEl()) (document.exitFullscreen || document.webkitExitFullscreen).call(document);
      video.pause();
      video.removeAttribute('src');
      video.load();
      modal.hidden = true;
      current = null;
      document.body.style.overflow = savedOverflow;
      if (lastFocus) lastFocus.focus();
    }

    navPrev.addEventListener('click', function () { if (current > 0) show(current - 1); });
    navNext.addEventListener('click', function () { if (current < STORIES.length - 1) show(current + 1); });
    video.addEventListener('ended', function () { if (current !== null && current < STORIES.length - 1) show(current + 1); });
    closeBtn.addEventListener('click', close);
    modal.addEventListener('click', function (e) { if (e.target === modal) close(); });
    modal.querySelector('[data-cs-inner]').addEventListener('click', function (e) {
      if (e.target === e.currentTarget) close();
    });
    document.addEventListener('keydown', function (e) {
      if (current === null) return;
      if (e.key === 'Escape' && !fullscreenEl()) close();
      if (e.key === 'f' || e.key === 'F') toggleEnlarge();
      if (e.key === 'ArrowRight' && current < STORIES.length - 1) show(current + 1);
      if (e.key === 'ArrowLeft' && current > 0) show(current - 1);
    });
  })();
</script>
@endpush
