
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($product as $p)
    <url>
        <lolc>{{ url('/') }}/product/{{ $p->product_slug }}</lolc>
        <lastmod>{{ $p->created_at }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.9</priority>
    </url>
    @endforeach
</urlset>
