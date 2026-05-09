@extends('layouts.front')
@section('content')

<!-- PAGE HERO -->
<section class="ch-page-hero">
  <div class="ch-page-hero__eyebrow"><span>Knowledge &amp; Perspectives</span></div>
  <h1 class="ch-page-hero__title">Ideas that <span class="accent">drive growth.</span></h1>
  <p class="ch-page-hero__desc">
    Practical perspectives on digital finance, infrastructure resilience, AI transformation,
    and scaling across Africa — from the Cherub team and Africa's digital frontier.
  </p>
</section>

<!-- INSIGHTS GRID -->
<section class="ch-insights-page">
  <div class="ch-insights-page__inner">

    <!-- Filter row -->
    <div class="ch-insights-filter">
      <span style="font-size:13px;font-weight:600;color:var(--text-muted);margin-right:4px;">Filter:</span>
      <button class="ch-filter-btn active">All</button>
      <button class="ch-filter-btn">Strategy</button>
      <button class="ch-filter-btn">Fintech</button>
      <button class="ch-filter-btn">AI &amp; Transformation</button>
      <button class="ch-filter-btn">Market Expansion</button>
      <button class="ch-filter-btn">Infrastructure</button>
    </div>

    <div class="ch-insights-page__grid">
      @forelse ($posts as $post)
        <a href="{{ route('posts.view', $post->id) }}" class="ch-article-card">
          @if ($post->image)
            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="ch-article-card__img">
          @else
            <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
          @endif
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">{{ $post->created_at->format('M j, Y') }}</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">{{ optional($post->categories->first())->title ?? 'Insights' }}</span>
            </div>
            <h3 class="ch-article-card__title">{{ $post->title }}</h3>
            @if($post->excerpt)
              <p style="font-size:13px;color:var(--text-muted);line-height:1.6;margin-bottom:14px;">{{ Str::limit($post->excerpt, 100) }}</p>
            @endif
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </a>
      @empty
        <!-- Placeholder articles when no posts exist -->
        <div class="ch-article-card">
          <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">May 14, 2025</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">Strategy</span>
            </div>
            <h3 class="ch-article-card__title">Why resilience is the new competitive advantage for African institutions</h3>
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
            <h3 class="ch-article-card__title">AI readiness in African enterprises: Where to start and what to avoid</h3>
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
            <h3 class="ch-article-card__title">Expanding across Africa: Why strategy must come before scale</h3>
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
        <div class="ch-article-card">
          <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">Apr 22, 2025</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">Fintech</span>
            </div>
            <h3 class="ch-article-card__title">Embedded finance in Africa: The opportunity most fintechs are missing</h3>
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
        <div class="ch-article-card">
          <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">Apr 15, 2025</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">Infrastructure</span>
            </div>
            <h3 class="ch-article-card__title">SMS failover architecture: How leading African banks protect service uptime</h3>
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
        <div class="ch-article-card">
          <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
          <div class="ch-article-card__body">
            <div class="ch-article-card__meta">
              <span class="ch-article-card__date">Apr 8, 2025</span>
              <span class="ch-article-card__dot"></span>
              <span class="ch-article-card__cat">Strategy</span>
            </div>
            <h3 class="ch-article-card__title">From curiosity to action: Building an AI-ready leadership team in 90 days</h3>
            <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
          </div>
        </div>
      @endforelse
    </div>

    <!-- Pagination -->
    @if ($posts instanceof \Illuminate\Pagination\LengthAwarePaginator && $posts->hasPages())
      <div class="ch-pagination">
        {{ $posts->links() }}
      </div>
    @endif

  </div>
</section>

<!-- NEWSLETTER -->
<section class="ch-newsletter">
  <div class="ch-newsletter__inner">
    <p class="ch-section-label" style="text-align:center;">Stay Informed</p>
    <h2 class="ch-section-heading" style="text-align:center;font-size:28px;">Get insights in your inbox</h2>
    <p class="ch-section-desc" style="text-align:center;margin-bottom:0;">
      Practical perspectives on digital finance, AI, and Africa's digital economy —
      delivered to leaders who want to stay ahead.
    </p>
    <form class="ch-newsletter__form" onsubmit="return false;">
      <input type="email" class="ch-newsletter__input" placeholder="Your work email address">
      <button type="submit" class="ch-newsletter__btn">Subscribe &rarr;</button>
    </form>
    <p style="font-size:12px;color:var(--text-light);text-align:center;margin-top:12px;">
      No spam. Unsubscribe anytime.
    </p>
  </div>
</section>

@endsection
