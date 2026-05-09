@extends('layouts.app', [
    'title' => __('blog.meta_title'),
    'description' => __('blog.meta_description'),
])

@section('content')

    @include('partials.page-header', [
        'title' => __('blog.hero_title'),
        'breadcrumb' => __('blog.breadcrumb'),
    ])

    <section class="section-spacer">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <p class="wow fadeInUp lead-text">{{ __('blog.hero_subtitle') }}</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                @foreach ($posts as $i => $post)
                    <div class="col-lg-4 col-md-6">
                        <article class="post-card wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s">
                            <a href="{{ route('blog.show', $post['slug']) }}" class="post-cover">
                                <img src="{{ asset('images/' . $post['image']) }}" alt="{{ $post['title'] }}">
                            </a>
                            <div class="post-body">
                                <p class="post-meta">
                                    {{ \Carbon\Carbon::parse($post['date'])->format('j M Y') }}
                                    &middot; {{ __('blog.reading_time', ['minutes' => $post['reading_time']]) }}
                                </p>
                                <h3><a href="{{ route('blog.show', $post['slug']) }}">{{ $post['title'] }}</a></h3>
                                <p>{{ $post['excerpt'] }}</p>
                                <a class="post-link" href="{{ route('blog.show', $post['slug']) }}">{{ __('cta.read_more') }} &rarr;</a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
