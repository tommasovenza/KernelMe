@php
echo '<?xml version="1.0" encoding="UTF-8"@endphp';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    {{-- Pagine statiche --}}
    <url>
        <loc>{{ route('home') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
    </url>

    <url>
        <loc>{{ route('blog') }}</loc>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
    </url>

    <url>
        <loc>{{ route('music') }}</loc>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
    </url>

    <url>
        <loc>{{ route('listens') }}</loc>
        <changefreq>daily</changefreq>
        <priority>0.6</priority>
    </url>

    <url>
        <loc>{{ route('contacts') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.3</priority>
    </url>

    <url>
        <loc>{{ route('privacy') }}</loc>
        <changefreq>yearly</changefreq>
        <priority>0.1</priority>
    </url>

    {{-- Post del blog --}}
    @foreach ($posts as $post)
        <url>
            <loc>{{ route('post.show', $post) }}</loc>
            @if ($post->updated_at)
                <lastmod>{{ $post->updated_at->tz('UTC')->toAtomString() }}</lastmod>
            @endif
            <changefreq>monthly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach
</urlset>
