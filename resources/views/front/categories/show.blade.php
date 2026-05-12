@extends('layouts.front')
@section('content')

<!-- PAGE HERO -->
<section class="ch-page-hero">
  <div class="ch-page-hero__eyebrow"><span>Category</span></div>
  <h1 class="ch-page-hero__title">{{ $category->title }}</h1>
  <p class="ch-page-hero__desc">
    Insights, perspectives and analysis filed under <strong style="color:#fff;">{{ $category->title }}</strong>
    — from the Cherub Apps team.
  </p>
</section>

<!-- POSTS GRID -->
<section class="ch-insights-page">
  <div class="ch-insights-page__inner">

    <!-- Back link -->
    <div style="margin-bottom:28px;">
      <a href="{{ route('insights') }}" class="ch-link-arrow" style="font-size:13px;">&larr; All Insights</a>
    </div>

    @if($posts->isEmpty())
      <div style="text-align:center;padding:64px 0;">
        <div style="font-size:48px;color:var(--border);margin-bottom:16px;"><i class="fas fa-newspaper"></i></div>
        <p style="font-size:16px;color:var(--text-muted);">No posts in this category yet.</p>
        <a href="{{ route('insights') }}" class="btn-primary" style="margin-top:20px;display:inline-flex;">View All Insights &rarr;</a>
      </div>
    @else
      <div class="ch-insights-page__grid">
        @foreach($posts as $post)
          <a href="{{ route('posts.view', $post->id) }}" class="ch-article-card">
            @if($post->image)
              <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="ch-article-card__img">
            @else
              <div class="ch-article-card__img-placeholder"><i class="fas fa-newspaper"></i></div>
            @endif
            <div class="ch-article-card__body">
              <div class="ch-article-card__meta">
                <span class="ch-article-card__date">{{ $post->created_at->format('M j, Y') }}</span>
                <span class="ch-article-card__dot"></span>
                <span class="ch-article-card__cat">{{ $category->title }}</span>
              </div>
              <h3 class="ch-article-card__title">{{ $post->title }}</h3>
              @if($post->excerpt)
                <p style="font-size:13px;color:var(--text-muted);line-height:1.6;margin-bottom:14px;">{{ Str::limit($post->excerpt, 110) }}</p>
              @endif
              <span class="ch-article-card__arrow"><i class="fas fa-arrow-right"></i></span>
            </div>
          </a>
        @endforeach
      </div>
    @endif

    <!-- Category list -->
    <div style="margin-top:56px;padding-top:40px;border-top:1px solid var(--border);">
      <p class="ch-section-label" style="margin-bottom:16px;">Browse Other Categories</p>
      <div style="display:flex;flex-wrap:wrap;gap:10px;">
        @foreach($categories as $cat)
          <a href="{{ route('categories.view', $cat->id) }}"
             class="ch-post-article__tag {{ $cat->id === $category->id ? 'ch-post-article__tag--active' : '' }}">
            {{ $cat->title }}
          </a>
        @endforeach
      </div>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="ch-cta">
  <div class="ch-cta__inner">
    <div>
      <h2 class="ch-cta__heading">Ready to build<br>what's next?</h2>
      <p class="ch-cta__desc">Let's discuss how we can help your organisation grow across Africa.</p>
    </div>
    <div class="ch-cta__center">
      <a href="{{ route('contact') }}" class="ch-cta__btn">Let's Talk &rarr;</a>
    </div>
    <div class="ch-cta__contact">
      <div class="ch-contact-item"><i class="fas fa-envelope"></i><span>hello@cherubapps.africa</span></div>
      <div class="ch-contact-item"><i class="fas fa-phone"></i><span>0707 649 949</span></div>
    </div>
  </div>
</section>

@endsection
