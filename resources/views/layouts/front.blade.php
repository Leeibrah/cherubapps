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

    <nav class="ch-nav">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('who-we-are') }}" class="{{ request()->routeIs('who-we-are') ? 'active' : '' }}">Who We Are</a>
      <a href="{{ route('what-we-do') }}" class="{{ request()->routeIs('what-we-do') ? 'active' : '' }}">What We Do</a>
      <a href="{{ route('insights') }}" class="{{ request()->routeIs('insights') ? 'active' : '' }}">Insights</a>
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
      <a href="#">Privacy Policy</a>
      <a href="#">Terms of Use</a>
      <a href="#">Careers</a>
    </div>

    <p class="ch-footer__copy">&copy; 2025 Cherub Apps Consult. All rights reserved.</p>
  </div>
</footer>

<script>
  var hamburger = document.getElementById('ch-hamburger');
  var mobileNav = document.getElementById('ch-mobile-nav');
  var navClose   = document.getElementById('ch-nav-close');
  hamburger.addEventListener('click', function() { mobileNav.classList.add('open'); });
  navClose.addEventListener('click',  function() { mobileNav.classList.remove('open'); });
</script>
</body>
</html>
