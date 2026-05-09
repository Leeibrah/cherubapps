<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Cherub Apps – Strategic Advisory for Africa's Digital Future</title>
  <meta name="description" content="We help organizations build resilient systems and scale across Africa.">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
          <div class="ch-blog-menu">

            <div class="ch-blog-menu__sidebar">
              <p class="ch-blog-menu__label">Categories</p>
              <a href="{{ route('insights') }}" class="ch-blog-menu__cat-link ch-blog-menu__cat-link--all">
                <i class="fas fa-th-large"></i> All Posts
              </a>
              @foreach($navCategories as $cat)
                <a href="{{ route('categories.view', $cat->id) }}" class="ch-blog-menu__cat-link">
                  {{ $cat->title }}
                </a>
              @endforeach
            </div>

            <div class="ch-blog-menu__posts">
              <p class="ch-blog-menu__label">Latest Posts</p>
              @foreach($navPosts as $post)
                <a href="{{ route('posts.view', $post->id) }}" class="ch-blog-menu__post">
                  @if($post->image)
                    <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="ch-blog-menu__post-img">
                  @endif
                  <div class="ch-blog-menu__post-body">
                    <span class="ch-blog-menu__post-cat">{{ optional($post->categories->first())->title ?? 'Insights' }}</span>
                    <p class="ch-blog-menu__post-title">{{ $post->title }}</p>
                    <span class="ch-blog-menu__post-date">{{ $post->created_at->format('M j, Y') }}</span>
                  </div>
                </a>
              @endforeach
            </div>

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
  <ul>
    <li><a href="{{ route('home') }}">Home</a></li>
    <li><a href="{{ route('who-we-are') }}">Who We Are</a></li>
    <li><a href="{{ route('what-we-do') }}">What We Do</a></li>
    <li><a href="{{ route('insights') }}">Insights</a></li>
    <li>
      <a href="{{ route('insights') }}">Blog</a>
      <ul class="ch-mobile-subnav">
        @foreach($navPosts as $post)
          <li><a href="{{ route('posts.view', $post->id) }}">{{ $post->title }}</a></li>
        @endforeach
      </ul>
    </li>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('contact') }}">Contact</a></li>
  </ul>
  <div class="ch-mobile-nav__cta">
    <a href="#contact" class="btn-primary">Let's Talk &rarr;</a>
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
</script>
</body>
</html>
