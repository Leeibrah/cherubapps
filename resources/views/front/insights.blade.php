@extends('layouts.front')

@section('seo_title', 'Insights – Africa Digital Finance, Fintech & Strategy Blog')
@section('seo_description', 'Practical perspectives on digital finance, fintech, infrastructure resilience, AI transformation, and market expansion across Africa — from the Cherub Apps Consult team.')
@section('seo_keywords', 'Africa fintech blog, digital finance insights Africa, Africa strategy articles, fintech news Africa, digital banking Africa blog, Africa AI transformation articles, mobile money insights, infrastructure resilience blog, Africa market expansion insights, Kenya fintech articles, Africa consulting blog, pan-African business insights, digital finance Africa articles, SACCO digital articles, MFI technology insights Africa')
@section('og_type', 'website')
@section('og_title', 'Insights – Ideas That Drive Growth Across Africa')
@section('og_description', 'Practical perspectives on digital finance, infrastructure resilience, AI transformation, and scaling across Africa — from the Cherub Apps team and Africa\'s digital frontier.')
@section('schema')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Blog",
  "@id": "{{ config('app.url') }}/insights#blog",
  "url": "{{ config('app.url') }}/insights",
  "name": "Cherub Apps Consult Insights",
  "description": "Practical perspectives on digital finance, fintech, infrastructure resilience, AI transformation, and market expansion across Africa.",
  "publisher": { "@id": "{{ config('app.url') }}/#organization" },
  "isPartOf": { "@id": "{{ config('app.url') }}/#website" }
}
</script>
@endsection
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


@endsection
