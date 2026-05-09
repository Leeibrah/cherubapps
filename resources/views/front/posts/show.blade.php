@extends('layouts.front')
@section('content')

<!-- POST HERO -->
<section class="ch-post-hero" style="background-image: url('{{ asset('images/' . $post->image) }}')">
  <div class="ch-post-hero__overlay"></div>
  <div class="ch-post-hero__inner">
    <div class="ch-post-hero__meta">
      <span class="ch-post-hero__cat">
        {{ optional($post->categories->first())->title ?? 'Insights' }}
      </span>
      <span class="ch-post-hero__date">{{ $post->created_at->format('M j, Y') }}</span>
      <span class="ch-post-hero__author">&middot; {{ $post->user->name }}</span>
    </div>
    <h1 class="ch-post-hero__title">{{ $post->title }}</h1>
    <p class="ch-post-hero__excerpt">{{ $post->excerpt }}</p>
  </div>
</section>

<!-- POST BODY -->
<section class="ch-post-body">
  <div class="ch-post-body__inner">

    <!-- ARTICLE -->
    <article class="ch-post-article">
      <div class="ch-post-article__content">
        @foreach(explode("\n\n", $post->body) as $para)
          @php $para = trim($para); @endphp
          @if(str_starts_with($para, '**') && str_ends_with($para, '**'))
            <h3 class="ch-post-article__subheading">{{ trim($para, '*') }}</h3>
          @elseif($para !== '')
            <p>{{ $para }}</p>
          @endif
        @endforeach
      </div>

      <!-- POST META FOOTER -->
      <div class="ch-post-article__footer">
        <div class="ch-post-article__author">
          <div class="ch-post-article__author-avatar">
            {{ strtoupper(substr($post->user->name, 0, 1)) }}
          </div>
          <div>
            <p style="font-size:14px;font-weight:700;color:var(--text);">{{ $post->user->name }}</p>
            <p style="font-size:12px;color:var(--text-muted);">Cherub Apps Consult &middot; {{ $post->created_at->format('M j, Y') }}</p>
          </div>
        </div>
        <div style="display:flex;gap:10px;align-items:center;flex-wrap:wrap;">
          @foreach($post->categories as $cat)
            <a href="{{ route('categories.view', $cat->id) }}" class="ch-post-article__tag">{{ $cat->title }}</a>
          @endforeach
        </div>
      </div>

      <!-- PREV / NEXT -->
      <div class="ch-post-nav">
        @if($post->previousPost())
          <a href="{{ route('posts.view', $post->previousPost()->id) }}" class="ch-post-nav__item">
            <span class="ch-post-nav__label">&larr; Previous</span>
            <span class="ch-post-nav__title">{{ $post->previousPost()->title }}</span>
          </a>
        @else
          <div></div>
        @endif
        @if($post->nextPost())
          <a href="{{ route('posts.view', $post->nextPost()->id) }}" class="ch-post-nav__item ch-post-nav__item--right">
            <span class="ch-post-nav__label">Next &rarr;</span>
            <span class="ch-post-nav__title">{{ $post->nextPost()->title }}</span>
          </a>
        @endif
      </div>
    </article>

    <!-- SIDEBAR -->
    <aside class="ch-post-sidebar">

      <div class="ch-post-sidebar__block">
        <p class="ch-section-label" style="margin-bottom:16px;">More Insights</p>
        @php
          $related = \App\Models\Post::where('id', '!=', $post->id)
                       ->with('categories')
                       ->latest()
                       ->take(4)
                       ->get();
        @endphp
        @foreach($related as $r)
          <a href="{{ route('posts.view', $r->id) }}" class="ch-sidebar-post">
            @if($r->image)
              <img src="{{ asset('images/' . $r->image) }}" alt="{{ $r->title }}" class="ch-sidebar-post__img">
            @endif
            <div class="ch-sidebar-post__body">
              <span class="ch-sidebar-post__cat">{{ optional($r->categories->first())->title ?? 'Insights' }}</span>
              <p class="ch-sidebar-post__title">{{ $r->title }}</p>
              <span class="ch-sidebar-post__date">{{ $r->created_at->format('M j, Y') }}</span>
            </div>
          </a>
        @endforeach
      </div>

      <div class="ch-post-sidebar__block ch-post-sidebar__cta">
        <p class="ch-section-label" style="color:rgba(255,255,255,0.6);margin-bottom:10px;">Work With Us</p>
        <h3 style="font-family:'Playfair Display',serif;font-size:22px;color:#fff;font-weight:700;line-height:1.25;margin-bottom:12px;">Ready to build what's next?</h3>
        <p style="font-size:13px;color:rgba(255,255,255,0.65);line-height:1.7;margin-bottom:20px;">Let's talk about how Cherub can help your organization grow across Africa.</p>
        <a href="{{ route('contact') }}" class="ch-cta__btn" style="font-size:13px;padding:11px 22px;display:inline-flex;">Let's Talk &rarr;</a>
      </div>

      <div class="ch-post-sidebar__block" style="padding:0;background:transparent;border-radius:0;">
        <p class="ch-section-label" style="margin-bottom:16px;">Categories</p>
        <div style="display:flex;flex-direction:column;gap:8px;">
          @foreach($categories as $cat)
            <a href="{{ route('categories.view', $cat->id) }}" class="ch-post-article__tag">{{ $cat->title }}</a>
          @endforeach
        </div>
      </div>

    </aside>
  </div>
</section>

<!-- CTA -->
<section class="ch-cta">
  <div class="ch-cta__inner">
    <div>
      <h2 class="ch-cta__heading">Let's build resilient<br>systems together.</h2>
      <p class="ch-cta__desc">Reach out to discuss how Cherub can support your growth across Africa.</p>
    </div>
    <div class="ch-cta__center">
      <a href="{{ route('contact') }}" class="ch-cta__btn">Get In Touch &rarr;</a>
    </div>
    <div class="ch-cta__contact">
      <div class="ch-contact-item"><i class="fas fa-envelope"></i><span>hello@cherubapps.africa</span></div>
      <div class="ch-contact-item"><i class="fas fa-phone"></i><span>+254 729 696 753</span></div>
    </div>
  </div>
</section>

@endsection
