@extends('layouts.front')
@section('content')

<!-- =========================================================
     HERO
     ========================================================= -->
<section class="ch-hero">
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

    <div class="ch-hero__map">
      <img src="{{ asset('images/africa-map.png') }}" alt="Africa connectivity map" class="ch-hero__map-img">
    </div>

  </div>
</section>

<!-- =========================================================
     WHAT WE DO
     ========================================================= -->
<section class="ch-services" id="services">
  <div class="ch-services__inner">

    <div class="ch-services__intro">
      <p class="ch-section-label">What We Do</p>
      <h2 class="ch-section-heading">Strategic solutions.<br>Measurable impact.</h2>
      <p class="ch-section-desc">
        We combine strategy, technology and market insight to help
        organizations grow with confidence.
      </p>
      <a href="#" class="ch-link-arrow">Explore all services &rarr;</a>
    </div>

    <div class="ch-services__grid">

      <div class="ch-service-card">
        <div class="ch-service-card__icon ch-service-card__icon--green">
          <i class="fas fa-coins"></i>
        </div>
        <h3 class="ch-service-card__title ch-service-card__title--green">
          Digital Finance &amp; Fintech Advisory
        </h3>
        <p class="ch-service-card__desc">
          Design, launch and scale innovative financial products and ecosystems.
        </p>
        <a href="#" class="ch-service-card__arrow"><i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="ch-service-card">
        <div class="ch-service-card__icon ch-service-card__icon--orange">
          <i class="fas fa-shield-alt"></i>
        </div>
        <h3 class="ch-service-card__title ch-service-card__title--orange">
          Infrastructure Resilience
        </h3>
        <p class="ch-service-card__desc">
          Build always-on systems with robust architecture, redundancy and business continuity.
        </p>
        <a href="#" class="ch-service-card__arrow"><i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="ch-service-card">
        <div class="ch-service-card__icon ch-service-card__icon--green">
          <i class="fas fa-brain"></i>
        </div>
        <h3 class="ch-service-card__title ch-service-card__title--green">
          AI &amp; Enterprise Transformation
        </h3>
        <p class="ch-service-card__desc">
          Prepare your organization for the future with AI readiness, automation and operating model transformation.
        </p>
        <a href="#" class="ch-service-card__arrow"><i class="fas fa-arrow-right"></i></a>
      </div>

      <div class="ch-service-card">
        <div class="ch-service-card__icon ch-service-card__icon--orange">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3 class="ch-service-card__title ch-service-card__title--orange">
          Market Expansion Across Africa
        </h3>
        <p class="ch-service-card__desc">
          Enter new markets, build partnerships and scale across Africa with clarity and speed.
        </p>
        <a href="#" class="ch-service-card__arrow"><i class="fas fa-arrow-right"></i></a>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================
     WHY CHERUB
     ========================================================= -->
<section class="ch-why">
  <div class="ch-why__inner">

    <div class="ch-why__intro">
      <p class="ch-section-label">Why Cherub</p>
      <h2 class="ch-section-heading">The advantage<br>you need.</h2>
    </div>

    <div class="ch-why__advantages">

      <div class="ch-advantage">
        <div class="ch-advantage__icon"><i class="fas fa-bullseye"></i></div>
        <h3 class="ch-advantage__title">Strategic Lens</h3>
        <p class="ch-advantage__desc">Executive-level advisory grounded in measurable business outcomes.</p>
      </div>

      <div class="ch-advantage">
        <div class="ch-advantage__icon"><i class="fas fa-server"></i></div>
        <h3 class="ch-advantage__title">Technical Depth</h3>
        <p class="ch-advantage__desc">Deep expertise in infrastructure, fintech rails and resilience architecture.</p>
      </div>

      <div class="ch-advantage">
        <div class="ch-advantage__icon"><i class="fas fa-chart-bar"></i></div>
        <h3 class="ch-advantage__title">Commercial Focus</h3>
        <p class="ch-advantage__desc">Solutions designed for adoption, monetization and long-term scale.</p>
      </div>

      <div class="ch-advantage">
        <div class="ch-advantage__icon"><i class="fas fa-globe-africa"></i></div>
        <h3 class="ch-advantage__title">Africa Expertise</h3>
        <p class="ch-advantage__desc">Strong understanding of regional opportunity, regulation and ecosystems.</p>
      </div>

    </div>
  </div>
</section>

<!-- =========================================================
     TRUSTED BY
     ========================================================= -->
<section class="ch-trusted">
  <div class="ch-trusted__inner">

    <div class="ch-trusted__header">
      <div class="ch-trusted__line"></div>
      <span>Trusted by Organizations Building Africa's Future</span>
      <div class="ch-trusted__line"></div>
    </div>

    <div class="ch-trusted__icons">
      <div class="ch-trust-item">
        <span class="ch-trust-item__icon"><i class="fas fa-university"></i></span>
        <span class="ch-trust-item__label">Banks</span>
      </div>
      <div class="ch-trust-item">
        <span class="ch-trust-item__icon"><i class="fas fa-users"></i></span>
        <span class="ch-trust-item__label">SACCOs</span>
      </div>
      <div class="ch-trust-item">
        <span class="ch-trust-item__icon"><i class="fas fa-mobile-alt"></i></span>
        <span class="ch-trust-item__label">Fintechs</span>
      </div>
      <div class="ch-trust-item">
        <span class="ch-trust-item__icon"><i class="fas fa-broadcast-tower"></i></span>
        <span class="ch-trust-item__label">Telcos</span>
      </div>
      <div class="ch-trust-item">
        <span class="ch-trust-item__icon"><i class="fas fa-landmark"></i></span>
        <span class="ch-trust-item__label">Governments</span>
      </div>
      <div class="ch-trust-item">
        <span class="ch-trust-item__icon"><i class="fas fa-shield-alt"></i></span>
        <span class="ch-trust-item__label">Insurers</span>
      </div>
      <div class="ch-trust-item">
        <span class="ch-trust-item__icon"><i class="fas fa-hand-holding-usd"></i></span>
        <span class="ch-trust-item__label">Investors</span>
      </div>
    </div>

  </div>
</section>

<!-- =========================================================
     INSIGHTS
     ========================================================= -->
<section class="ch-insights" id="insights">
  <div class="ch-insights__inner">

    <div class="ch-insights__intro">
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
        <a href="{{ route('posts.view', $post->id) }}" class="ch-article-card">
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
  <div class="ch-cta__inner">

    <div>
      <h2 class="ch-cta__heading">Ready to build<br>what's next?</h2>
      <p class="ch-cta__desc">
        Let's discuss how we can help you build resilient systems,<br>
        unlock growth and scale across Africa.
      </p>
    </div>

    <div class="ch-cta__center">
      <a href="mailto:hello@cherubapps.com" class="ch-cta__btn">Let's Talk &rarr;</a>
    </div>

    <div class="ch-cta__contact">
      <div class="ch-contact-item">
        <i class="fas fa-envelope"></i>
        <span>hello@cherubapps.com</span>
      </div>
      <div class="ch-contact-item">
        <i class="fas fa-phone"></i>
        <span>+254 729 696 753</span>
      </div>
      <div class="ch-contact-item">
        <i class="fas fa-map-marker-alt"></i>
        <span>Nairobi, Kenya</span>
      </div>
    </div>

  </div>
</section>

@endsection
