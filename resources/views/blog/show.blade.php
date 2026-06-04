@extends('layouts.app', [
    'title' => $post['title'],
    'description' => $post['excerpt'],
])

@section('content')

    @include('partials.page-header', [
        'title' => $post['title'],
        'breadcrumb' => $post['title'],
        'parent' => ['url' => route('blog.index'), 'label' => __('nav.blog')],
    ])

    <article class="post-single">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <p class="post-meta">
                        {{ __('blog.posted_on') }} {{ \Carbon\Carbon::parse($post['date'])->format('j F Y') }}
                        &middot; {{ __('blog.by') }} {{ $post['author'] }}
                        &middot; {{ __('blog.reading_time', ['minutes' => $post['reading_time']]) }}
                    </p>

                    <div class="post-cover">
                        <img src="{{ asset('images/' . $post['image']) }}" alt="{{ $post['title'] }}" width="1200" height="800" fetchpriority="high" decoding="async">
                    </div>

                    <div class="post-body">
                        @include($post['view'])
                    </div>

                    <p style="margin-top:48px;">
                        <a href="{{ route('blog.index') }}" class="btn-default">&larr; {{ __('blog.back_to_blog') }}</a>
                    </p>
                </div>
            </div>

            @if (count($related))
                <hr style="margin:80px 0;">
                <div class="row section-row">
                    <div class="col-lg-9">
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('blog.related') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    @foreach ($related as $rp)
                        <div class="col-lg-6">
                            <article class="post-card">
                                <a href="{{ route('blog.show', $rp['slug']) }}" class="post-cover">
                                    <img src="{{ asset('images/' . $rp['image']) }}" alt="{{ $rp['title'] }}" width="1200" height="800" loading="lazy" decoding="async">
                                </a>
                                <div class="post-body">
                                    <p class="post-meta">{{ \Carbon\Carbon::parse($rp['date'])->format('j M Y') }}</p>
                                    <h3><a href="{{ route('blog.show', $rp['slug']) }}">{{ $rp['title'] }}</a></h3>
                                    <p>{{ $rp['excerpt'] }}</p>
                                </div>
                            </article>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </article>

@endsection

@push('scripts')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BlogPosting',
    '@id' => url()->current() . '#article',
    'headline' => $post['title'],
    'description' => $post['excerpt'],
    'image' => asset('images/' . $post['image']),
    'url' => url()->current(),
    'datePublished' => $post['date'],
    'dateModified' => $post['modified'] ?? $post['date'],
    'author' => ['@type' => 'Person', 'name' => $post['author'], 'url' => route('about')],
    'publisher' => ['@id' => rtrim(url('/'), '/') . '/#organization'],
    'mainEntityOfPage' => ['@type' => 'WebPage', '@id' => url()->current()],
    'inLanguage' => 'en-GB',
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => rtrim(url('/'), '/') . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => __('nav.blog'), 'item' => route('blog.index')],
        ['@type' => 'ListItem', 'position' => 3, 'name' => $post['title'], 'item' => url()->current()],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush
