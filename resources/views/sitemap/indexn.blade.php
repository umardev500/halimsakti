
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($news as $p)
    <url>
        <lolc>{{ url('/') }}/news/{{ $p->news_nama_eng_slug }}</lolc>
        <lastmod>{{ $p->created_at }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
</urlset>
