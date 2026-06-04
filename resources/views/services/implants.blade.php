@extends('layouts.app', [
    'title' => __('implants.meta_title'),
    'description' => __('implants.meta_description'),
])

@section('content')

    @include('partials.page-header', [
        'title' => __('implants.hero.title'),
        'breadcrumb' => __('implants.breadcrumb'),
    ])

    @push('scripts')
    <script type="application/ld+json">
    {!! json_encode([
        '@context' => 'https://schema.org',
        '@type' => 'MedicalWebPage',
        '@id' => url()->current() . '#webpage',
        'name' => __('implants.hero.title'),
        'url' => url()->current(),
        'description' => __('implants.meta_description'),
        'inLanguage' => 'en-GB',
        'isPartOf' => ['@id' => rtrim(url('/'), '/') . '/#website'],
        'about' => [
            '@type' => 'MedicalProcedure',
            'name' => 'Dental Implant Surgery',
            'procedureType' => 'SurgicalProcedure',
            'bodyLocation' => 'Jaw',
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
            ['@type' => 'ListItem', 'position' => 2, 'name' => __('implants.breadcrumb'), 'item' => url()->current()],
        ],
    ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
    </script>
    @endpush

    {{-- Intro --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <figure class="image-anime" style="border-radius:18px;overflow:hidden;">
                        <img src="{{ asset('images/dental-implants.jpg') }}" alt="{{ __('implants.hero.title') }}" style="width:100%;height:auto;">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('implants.intro.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('implants.intro.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('implants.intro.lead') }}</p>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.4s">{{ __('implants.hero.subtitle') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why us --}}
    <section class="section-spacer" style="background:#f8fafc;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('implants.why.title') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach (__('implants.why.points') as $i => $point)
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

    {{-- Solutions --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('implants.solutions.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('implants.solutions.title') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach (__('implants.solutions.items') as $i => $item)
                    <div class="col-lg-4 col-md-6">
                        <div class="service-item wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s">
                            <div class="service-header">
                                <div class="service-item-box">
                                    <div class="icon-box">
                                        <img src="{{ asset('images/icon-service-' . ($i + 1) . '.svg') }}" alt="">
                                    </div>
                                    <div class="service-item-content">
                                        <h3>{{ $item['title'] }}</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="service-body">
                                <p>{{ $item['text'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Process --}}
    <section class="section-spacer" style="background:#f8fafc;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('implants.process.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('implants.process.title') }}</h2>
                    </div>
                </div>
            </div>
            <div class="process-grid">
                @foreach (__('implants.process.steps') as $i => $step)
                    <div class="process-step wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s">
                        <span class="process-number">{{ $step['number'] }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Quality / Certificates --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('implants.quality.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('implants.quality.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('implants.quality.lead') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="quality-list">
                        @foreach (__('implants.quality.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    @include('partials.final-cta', [
        'title' => __('implants.final_cta.title'),
        'subtitle' => __('implants.final_cta.subtitle'),
        'primary' => __('implants.final_cta.primary'),
        'secondary' => __('implants.final_cta.secondary'),
        'whatsappTopic' => 'dental implants',
    ])

@endsection
