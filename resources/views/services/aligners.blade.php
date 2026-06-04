@extends('layouts.app', [
    'title' => __('aligners.meta_title'),
    'description' => __('aligners.meta_description'),
])

@section('content')

    @include('partials.page-header', [
        'title' => __('aligners.hero.title'),
        'breadcrumb' => __('aligners.breadcrumb'),
    ])

    @push('scripts')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'MedicalWebPage',
        '@id' => url()->current() . '#webpage',
        'name' => __('aligners.hero.title'),
        'url' => url()->current(),
        'description' => __('aligners.meta_description'),
        'inLanguage' => 'en-GB',
        'isPartOf' => ['@id' => rtrim(url('/'), '/') . '/#website'],
        'about' => [
            '@type' => 'MedicalProcedure',
            'name' => 'Clear Aligner Orthodontic Treatment',
            'procedureType' => 'TherapeuticProcedure',
            'bodyLocation' => 'Teeth',
        ],
        'provider' => ['@id' => rtrim(url('/'), '/') . '/#organization'],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => rtrim(url('/'), '/') . '/'],
            ['@type' => 'ListItem', 'position' => 2, 'name' => __('aligners.breadcrumb'), 'item' => url()->current()],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @endpush

    {{-- Intro --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('aligners.intro.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('aligners.intro.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('aligners.intro.lead') }}</p>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.4s">{{ __('aligners.hero.subtitle') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <figure class="image-anime" style="border-radius:18px;overflow:hidden;">
                        <img src="{{ asset('images/dental-aligners.jpg') }}" alt="{{ __('aligners.hero.title') }}" style="width:100%;height:auto;">
                    </figure>
                </div>
            </div>
        </div>
    </section>

    {{-- Advantages --}}
    <section class="section-spacer" style="background:#f8fafc;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('aligners.advantages.title') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach (__('aligners.advantages.points') as $i => $point)
                    <div class="col-lg-6">
                        <div class="expertise-list-box wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s">
                            <div class="expertise-list-title"><h3>{{ $point['title'] }}</h3></div>
                            <div class="expertise-list-content"><p>{{ $point['text'] }}</p></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('aligners.process.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('aligners.process.title') }}</h2>
                    </div>
                </div>
            </div>
            <div class="process-grid">
                @foreach (__('aligners.process.steps') as $i => $step)
                    <div class="process-step wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s">
                        <span class="process-number">{{ $step['number'] }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Candidates --}}
    <section class="section-spacer" style="background:#f8fafc;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('aligners.candidates.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('aligners.candidates.lead') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="quality-list">
                        @foreach (__('aligners.candidates.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <p class="lead-text" style="margin-top:18px;font-size:15px;color:#6b7280;"><em>{{ __('aligners.candidates.note') }}</em></p>
                </div>
            </div>
        </div>
    </section>

    {{-- Quality / Certificates --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('aligners.quality.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('aligners.quality.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('aligners.quality.lead') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="quality-list">
                        @foreach (__('aligners.quality.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('partials.final-cta', [
        'title' => __('aligners.final_cta.title'),
        'subtitle' => __('aligners.final_cta.subtitle'),
        'primary' => __('aligners.final_cta.primary'),
        'secondary' => __('aligners.final_cta.secondary'),
        'whatsappTopic' => 'clear aligners',
    ])

@endsection
