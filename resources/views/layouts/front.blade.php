<!DOCTYPE html>
<html lang="en" prefix="og: https://ogp.me/ns#">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- ======================================================
       SEO: Title & Core Meta  (pages override via @section)
       ====================================================== --}}
  @hasSection('seo_title')
    <title>@yield('seo_title') | Cherub Apps Consult</title>
  @else
    <title>Cherub Apps Consult – Strategic Advisory for Africa's Digital Future</title>
  @endif

  <meta name="description" content="@yield('seo_description', 'Cherub Apps Consult is Africa\'s strategic advisory partner for digital finance, fintech, infrastructure resilience, AI transformation and pan-African market expansion. Based in Nairobi, Kenya.')">

  <meta name="keywords" content="@yield('seo_keywords', 'Africa digital transformation consulting, fintech advisory Africa, strategic advisory Africa, digital finance consulting, Africa market expansion strategy, infrastructure resilience Africa, AI transformation Africa, Kenya consulting firm, Nairobi advisory, pan-African business strategy, East Africa fintech consulting, mobile money strategy Africa, digital banking advisory Africa, Africa technology consulting, SACCO digital transformation, MFI technology consulting Africa, financial inclusion Africa, digital payments Africa, embedded finance Africa, API banking Africa, open banking Kenya, Africa business continuity, Africa enterprise consulting, Africa financial technology, bank digital transformation Kenya, enterprise AI Africa, Africa regulatory compliance fintech, Africa scaling strategy, cross-border payments Africa, digital infrastructure Africa, Africa investment advisory, Nairobi technology firm, Africa strategic partner, digital finance infrastructure Africa, Africa partnership strategy, financial services consulting Africa, SME consulting Africa, Africa digital economy, operational resilience Africa, Africa growth strategy, business strategy Africa, Africa market intelligence, telco strategy Africa')">

  <meta name="author" content="Cherub Apps Consult">
  <meta name="robots" content="@yield('seo_robots', 'index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1')">
  <meta name="googlebot" content="index, follow">
  <meta name="theme-color" content="#0d2c1e">

  {{-- Canonical URL --}}
  <link rel="canonical" href="{{ url()->current() }}">

  {{-- ======================================================
       Open Graph (Facebook, LinkedIn, WhatsApp)
       ====================================================== --}}
  <meta property="og:type"        content="@yield('og_type', 'website')">
  <meta property="og:site_name"   content="Cherub Apps Consult">
  <meta property="og:locale"      content="en_KE">
  <meta property="og:url"         content="{{ url()->current() }}">
  <meta property="og:title"       content="@yield('og_title', 'Cherub Apps Consult – Strategic Advisory for Africa\'s Digital Future')">
  <meta property="og:description" content="@yield('og_description', 'We partner with financial institutions, fintechs, telcos and governments to build resilient systems and scale across Africa. Based in Nairobi, Kenya.')">
  <meta property="og:image"       content="@yield('og_image', asset('images/cherub-logo.png'))">
  <meta property="og:image:width"  content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt"   content="Cherub Apps Consult">

  {{-- ======================================================
       Twitter / X Card
       ====================================================== --}}
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:site"        content="@cherubapps">
  <meta name="twitter:creator"     content="@cherubapps">
  <meta name="twitter:title"       content="@yield('og_title', 'Cherub Apps Consult – Strategic Advisory for Africa\'s Digital Future')">
  <meta name="twitter:description" content="@yield('og_description', 'We partner with financial institutions, fintechs, telcos and governments to build resilient systems and scale across Africa.')">
  <meta name="twitter:image"       content="@yield('og_image', asset('images/cherub-logo.png'))">

  {{-- ======================================================
       Geo / Regional
       ====================================================== --}}
  <meta name="geo.region"       content="KE">
  <meta name="geo.placename"    content="Nairobi, Kenya">
  <meta name="geo.position"     content="-1.286389;36.817223">
  <meta name="ICBM"             content="-1.286389, 36.817223">
  <meta name="language"         content="English">
  <meta name="coverage"         content="Africa">
  <meta name="distribution"     content="global">
  <meta name="rating"           content="general">

  {{-- ======================================================
       JSON-LD: Organization + Website (sitewide)
       ====================================================== --}}
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Organization",
        "@id": "{{ config('app.url') }}/#organization",
        "name": "Cherub Apps Consult",
        "alternateName": ["Cherub Apps", "CherubApps"],
        "url": "{{ config('app.url') }}",
        "logo": {
          "@type": "ImageObject",
          "url": "{{ asset('images/cherub-logo.png') }}",
          "width": 570,
          "height": 208
        },
        "image": "{{ asset('images/cherub-logo.png') }}",
        "description": "Cherub Apps Consult is a strategic advisory firm specialising in digital finance, fintech advisory, infrastructure resilience, AI transformation and pan-African market expansion.",
        "foundingDate": "2023",
        "areaServed": {
          "@type": "Place",
          "name": "Africa"
        },
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Nairobi",
          "addressCountry": "KE"
        },
        "contactPoint": [
          {
            "@type": "ContactPoint",
            "telephone": "+254707649949",
            "contactType": "customer service",
            "email": "hello@cherubapps.africa",
            "areaServed": "Africa",
            "availableLanguage": "English"
          }
        ],
        "sameAs": [
          "https://www.linkedin.com/company/cherubapps-consult/"
        ],
        "knowsAbout": [
          "Digital Finance",
          "Fintech Advisory",
          "Infrastructure Resilience",
          "AI Transformation",
          "Market Expansion Africa",
          "Enterprise Consulting",
          "Mobile Money",
          "Digital Banking",
          "Africa Business Strategy"
        ],
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Advisory Services",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Digital Finance & Fintech Advisory",
                "description": "Design, launch and scale innovative financial products and ecosystems across Africa."
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Infrastructure Resilience",
                "description": "Build always-on systems with robust architecture, redundancy and business continuity."
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "AI & Enterprise Transformation",
                "description": "Prepare your organisation for the future with AI readiness, automation and operating model transformation."
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Market Expansion Across Africa",
                "description": "Enter new markets, build partnerships and scale across Africa with clarity and speed."
              }
            }
          ]
        }
      },
      {
        "@type": "WebSite",
        "@id": "{{ config('app.url') }}/#website",
        "url": "{{ config('app.url') }}",
        "name": "Cherub Apps Consult",
        "description": "Strategic Advisory for Africa's Digital Future",
        "publisher": {
          "@id": "{{ config('app.url') }}/#organization"
        },
        "potentialAction": {
          "@type": "SearchAction",
          "target": {
            "@type": "EntryPoint",
            "urlTemplate": "{{ config('app.url') }}/insights?q={search_term_string}"
          },
          "query-input": "required name=search_term_string"
        }
      }
    ]
  }
  </script>

  {{-- Page-specific structured data --}}
  @yield('schema')

  {{-- ====================================================== --}}
  <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('favicon.png') }}">
  <link rel="stylesheet" href="{{ asset('css/cherub.css') }}">
  <script defer src="{{ asset('front/js/fontawesome/all.min.js') }}"></script>
</head>
<body>

<!-- HEADER -->
<header class="ch-header">
  <div class="ch-header__inner">
    <a href="{{ route('home') }}" class="ch-logo">
      <img src="{{ asset('images/cherub-logo.png') }}" alt="Cherub Apps" class="ch-logo__img">
    </a>

    @php
      $navPosts      = \App\Models\Post::with('categories')->latest()->get();
      $navCategories = \App\Models\Category::all();
    @endphp

    <nav class="ch-nav">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('who-we-are') }}" class="{{ request()->routeIs('who-we-are') ? 'active' : '' }}">Who We Are</a>
      <a href="{{ route('what-we-do') }}" class="{{ request()->routeIs('what-we-do') ? 'active' : '' }}">What We Do</a>
      <a href="{{ route('insights') }}" class="{{ request()->routeIs('insights') ? 'active' : '' }}">Insights</a>

      <!-- BLOG DROPDOWN -->
      <div class="ch-nav-dropdown {{ request()->routeIs('posts.view') || request()->routeIs('categories.view') ? 'active' : '' }}" id="ch-blog-menu">
        <button class="ch-nav-dropdown__trigger" id="ch-blog-trigger" aria-expanded="false">
          Blog <i class="fas fa-chevron-down ch-nav-dropdown__chevron"></i>
        </button>
        <div class="ch-nav-dropdown__panel" id="ch-blog-panel">
          <div class="ch-blog-menu ch-blog-menu--compact">
            <a href="{{ route('insights') }}" class="ch-blog-menu__cat-link ch-blog-menu__cat-link--all">
              <i class="fas fa-th-large"></i> All Posts
            </a>
            <div class="ch-blog-menu__divider"></div>
            <p class="ch-blog-menu__label">Browse by Category</p>
            @foreach($navCategories as $cat)
              <a href="{{ route('categories.view', $cat->id) }}" class="ch-blog-menu__cat-link">
                <i class="fas fa-tag" style="font-size:10px;opacity:0.5;"></i> {{ $cat->title }}
              </a>
            @endforeach
          </div>
        </div>
      </div>

      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <a href="#contact" class="ch-header__cta">Let's Talk</a>

    <button class="ch-hamburger" id="ch-hamburger" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>
  </div>
</header>

<!-- MOBILE NAV -->
<div class="ch-mobile-nav" id="ch-mobile-nav">
  <div class="ch-mobile-nav__top">
    <a href="{{ route('home') }}" class="ch-logo">
      <img src="{{ asset('images/cherub-logo.png') }}" alt="Cherub Apps" class="ch-logo__img">
    </a>
    <button class="ch-mobile-nav__close" id="ch-nav-close">&times;</button>
  </div>

  <nav class="ch-mobile-nav__links">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'ch-mobile-nav__link--active' : '' }}">Home</a>
    <a href="{{ route('who-we-are') }}" class="{{ request()->routeIs('who-we-are') ? 'ch-mobile-nav__link--active' : '' }}">Who We Are</a>
    <a href="{{ route('what-we-do') }}" class="{{ request()->routeIs('what-we-do') ? 'ch-mobile-nav__link--active' : '' }}">What We Do</a>
    <a href="{{ route('insights') }}" class="{{ request()->routeIs('insights') ? 'ch-mobile-nav__link--active' : '' }}">Insights</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'ch-mobile-nav__link--active' : '' }}">About</a>
    <a href="{{ route('insights') }}" class="{{ request()->routeIs('posts.view') || request()->routeIs('categories.view') ? 'ch-mobile-nav__link--active' : '' }}">Blog</a>
    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'ch-mobile-nav__link--active' : '' }}">Contact</a>
  </nav>

  <div class="ch-mobile-nav__footer">
    <a href="{{ route('contact') }}" class="btn-primary" style="width:100%;justify-content:center;">Let's Talk &rarr;</a>
    <div class="ch-mobile-nav__footer-links">
      <a href="{{ route('privacy') }}">Privacy Policy</a>
      <a href="{{ route('terms') }}">Terms of Use</a>
    </div>
  </div>
</div>

@yield('content')

<!-- FOOTER -->
<footer class="ch-footer">
  <div class="ch-footer__inner">
    <a href="{{ route('home') }}" class="ch-footer__logo">
      <img src="{{ asset('images/cherub-logo.png') }}" alt="Cherub Apps" class="ch-footer__logo-img">
    </a>

    <div class="ch-footer__links">
      <a href="{{ route('privacy') }}">Privacy Policy</a>
      <a href="{{ route('terms') }}">Terms of Use</a>
    </div>

    <p class="ch-footer__copy">&copy; 2025 Cherub Apps Consult. All rights reserved.</p>
  </div>
</footer>

<script>
  // Mobile nav
  var hamburger = document.getElementById('ch-hamburger');
  var mobileNav = document.getElementById('ch-mobile-nav');
  var navClose  = document.getElementById('ch-nav-close');
  hamburger.addEventListener('click', function() { mobileNav.classList.add('open'); });
  navClose.addEventListener('click',  function() { mobileNav.classList.remove('open'); });

  // Blog dropdown
  var blogMenu    = document.getElementById('ch-blog-menu');
  var blogTrigger = document.getElementById('ch-blog-trigger');
  var blogPanel   = document.getElementById('ch-blog-panel');

  blogTrigger.addEventListener('click', function(e) {
    e.stopPropagation();
    var open = blogMenu.classList.toggle('open');
    blogTrigger.setAttribute('aria-expanded', open);
  });

  document.addEventListener('click', function(e) {
    if (!blogMenu.contains(e.target)) {
      blogMenu.classList.remove('open');
      blogTrigger.setAttribute('aria-expanded', 'false');
    }
  });

  document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
      blogMenu.classList.remove('open');
      blogTrigger.setAttribute('aria-expanded', 'false');
    }
  });

  // Scroll reveal
  (function() {
    var els = document.querySelectorAll('.reveal, .reveal-left, .reveal-right');
    if (!els.length || !window.IntersectionObserver) {
      els.forEach(function(el) { el.classList.add('visible'); });
      return;
    }
    var io = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (e.isIntersecting) {
          e.target.classList.add('visible');
          io.unobserve(e.target);
        }
      });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });
    els.forEach(function(el) { io.observe(el); });
  })();

  // Number counter
  (function() {
    var counters = document.querySelectorAll('[data-count]');
    if (!counters.length || !window.IntersectionObserver) return;
    var io2 = new IntersectionObserver(function(entries) {
      entries.forEach(function(e) {
        if (!e.isIntersecting) return;
        var el = e.target;
        var target = parseInt(el.dataset.count, 10);
        var suffix = el.dataset.suffix || '';
        var start = performance.now();
        var dur = 1800;
        (function tick(now) {
          var p = Math.min((now - start) / dur, 1);
          var eased = 1 - Math.pow(1 - p, 3);
          el.textContent = Math.floor(eased * target) + (p === 1 ? suffix : '');
          if (p < 1) requestAnimationFrame(tick);
        })(start);
        io2.unobserve(el);
      });
    }, { threshold: 0.5 });
    counters.forEach(function(el) { io2.observe(el); });
  })();
</script>
</body>
</html>
