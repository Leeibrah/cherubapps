<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">

  <!-- Static pages -->
  <url>
    <loc>{{ config('app.url') }}</loc>
    <changefreq>weekly</changefreq>
    <priority>1.0</priority>
  </url>
  <url>
    <loc>{{ config('app.url') }}/who-we-are</loc>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
  </url>
  <url>
    <loc>{{ config('app.url') }}/what-we-do</loc>
    <changefreq>monthly</changefreq>
    <priority>0.9</priority>
  </url>
  <url>
    <loc>{{ config('app.url') }}/insights</loc>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
  </url>
  <url>
    <loc>{{ config('app.url') }}/about</loc>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>{{ config('app.url') }}/contact</loc>
    <changefreq>monthly</changefreq>
    <priority>0.7</priority>
  </url>
  <url>
    <loc>{{ config('app.url') }}/privacy-policy</loc>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>
  <url>
    <loc>{{ config('app.url') }}/terms-of-use</loc>
    <changefreq>yearly</changefreq>
    <priority>0.3</priority>
  </url>

  <!-- Blog posts -->
  @foreach($posts as $post)
  <url>
    <loc>{{ config('app.url') }}/posts/{{ $post->id }}</loc>
    <lastmod>{{ $post->updated_at->toAtomString() }}</lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.8</priority>
    @if($post->image)
    <image:image>
      <image:loc>{{ asset('images/' . $post->image) }}</image:loc>
      <image:title>{{ $post->title }}</image:title>
    </image:image>
    @endif
  </url>
  @endforeach

  <!-- Category pages -->
  @foreach($categories as $cat)
  <url>
    <loc>{{ config('app.url') }}/category/{{ $cat->id }}</loc>
    <changefreq>weekly</changefreq>
    <priority>0.6</priority>
  </url>
  @endforeach

</urlset>
