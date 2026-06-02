@extends('layouts.app', [
    'title' => __('home.meta_title'),
    'description' => __('home.meta_description'),
])

@section('content')

    {{-- Hero --}}
    <div class="hero">
        <div class="hero-section">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="hero-content">
                            <div class="section-title">
                                <h3 class="wow fadeInUp">{{ __('home.hero.eyebrow') }}</h3>
                                <h1 data-cursor="-opaque">{{ __('home.hero.title') }}</h1>
                                <p class="wow fadeInUp" data-wow-delay="0.25s">{{ __('home.hero.subtitle') }}</p>
                            </div>

                            <div class="hero-content-body">
                                <div class="hero-counter-box">
                                    <h2>{{ __('home.hero.stat_1_value') }}</h2>
                                    <p>{{ __('home.hero.stat_1_label') }}</p>
                                </div>
                                <div class="hero-counter-box">
                                    <h2>{{ __('home.hero.stat_2_value') }}</h2>
                                    <p>{{ __('home.hero.stat_2_label') }}</p>
                                </div>
                                <div class="hero-counter-box">
                                    <h2>{{ __('home.hero.stat_3_value') }}</h2>
                                    <p>{{ __('home.hero.stat_3_label') }}</p>
                                </div>
                            </div>

                            <div class="hero-content-footer wow fadeInUp" data-wow-delay="0.5s">
                                <a href="{{ route('contact') }}" class="btn-default">{{ __('cta.book_consultation') }}</a>
                                <a href="{{ route('services.implants') }}" class="btn-default btn-highlighted">{{ __('cta.view_implants') }}</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="hero-image">
                            <div class="hero-img">
                                <figure class="image-anime reveal">
                                    <img src="{{ asset('images/npdental-hero-image.jpg') }}" alt="{{ config('site.brand') }} clinic">
                                </figure>
                            </div>
                            <div class="company-service-rating">
                                <div class="company-rating-icon">
                                    <ul>
                                        <li>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </li>
                                    </ul>
                                </div>
                                <div class="company-rating-content">
                                    <h3>{{ __('home.hero.rating_title') }}</h3>
                                    <p>{{ __('home.hero.rating_text') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @include('partials.cta-strip')
    </div>

    {{-- About --}}
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-1 order-2">
                    <div class="about-image">
                        <div class="about-img">
                            <figure class="image-anime">
                                <img src="{{ asset('images/dental-quality.jpg') }}" alt="Dental quality and certifications at {{ config('site.brand') }}">
                            </figure>
                        </div>
                        <div class="company-experience has-bg-image" style="background-image: url('{{ asset('images/dental-experience.jpg') }}');">
                            <div class="company-experience-box">
                                <div class="company-experience-counter">
                                    <h2><span class="counter">15</span>+</h2>
                                </div>
                                <div class="company-experience-content">
                                    <p>{{ __('home.about.eyebrow') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="about-us-content">
                        <div class="section-title">
                            <h3 class="wow fadeInUp">{{ __('home.about.eyebrow') }}</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.about.title') }}</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">{{ __('home.about.lead') }}</p>
                        </div>

                        <div class="about-us-body wow fadeInUp" data-wow-delay="0.5s">
                            <div class="about-body-item">
                                <div class="about-counter">
                                    <h2>{{ __('home.about.highlight_1_value') }}</h2>
                                </div>
                                <div class="about-counter-content">
                                    <p>{{ __('home.about.highlight_1_label') }}</p>
                                </div>
                            </div>
                            <div class="about-body-item">
                                <div class="about-counter">
                                    <h2>{{ __('home.about.highlight_2_value') }}</h2>
                                </div>
                                <div class="about-counter-content">
                                    <p>{{ __('home.about.highlight_2_label') }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="about-us-footer wow fadeInUp" data-wow-delay="0.75s">
                            <div class="about-us-footer-btn">
                                <a href="#why-choose-us" class="btn-default">{{ __('home.about.cta') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Featured services --}}
    <section class="featured-services">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('home.services.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.services.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('home.services.subtitle') }}</p>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="featured-service-card wow fadeInUp">
                        <div class="service-cover">
                            <img src="{{ asset('images/dental-implants.jpg') }}" alt="{{ __('home.services.implants.title') }}">
                        </div>
                        <div class="service-body">
                            <h3>{{ __('home.services.implants.title') }}</h3>
                            <p>{{ __('home.services.implants.lead') }}</p>
                            <a href="{{ route('services.implants') }}" class="btn-default">{{ __('home.services.implants.cta') }}</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="featured-service-card wow fadeInUp" data-wow-delay="0.2s">
                        <div class="service-cover">
                            <img src="{{ asset('images/dental-aligners.jpg') }}" alt="{{ __('home.services.aligners.title') }}">
                        </div>
                        <div class="service-body">
                            <h3>{{ __('home.services.aligners.title') }}</h3>
                            <p>{{ __('home.services.aligners.lead') }}</p>
                            <a href="{{ route('services.aligners') }}" class="btn-default">{{ __('home.services.aligners.cta') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Why choose us / Quality & certificates --}}
    <section id="why-choose-us" class="our-expertise section-spacer" style="background:#f8fafc;">
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-5">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('home.why.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.why.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('home.why.lead') }}</p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="expertise-body">
                        @foreach (__('home.why.points') as $i => $point)
                            <div class="expertise-list-box wow fadeInUp" data-wow-delay="{{ 0.25 + $i * 0.15 }}s">
                                <div class="expertise-list-title">
                                    <h3>{{ $point['title'] }}</h3>
                                </div>
                                <div class="expertise-list-content">
                                    <p>{{ $point['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Doctors / Team --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('home.team.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.team.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('home.team.subtitle') }}</p>
                    </div>
                </div>
            </div>

            <div class="row g-4 justify-content-center">
                @foreach (__('home.team.members') as $i => $member)
                    <div class="col-lg-4 col-md-6">
                        <div class="team-member-item wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s">
                            <div class="team-image">
                                <figure class="image-anime">
                                    <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }} — {{ $member['role'] }}">
                                </figure>
                            </div>
                            <div class="team-content">
                                <h3>{{ $member['name'] }}</h3>
                                <p>{{ $member['role'] }}</p>
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
                        <h3 class="wow fadeInUp">{{ __('home.process.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('home.process.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('home.process.subtitle') }}</p>
                    </div>
                </div>
            </div>
            <div class="process-grid">
                @foreach (__('home.process.steps') as $i => $step)
                    <div class="process-step wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s">
                        <span class="process-number">{{ $step['number'] }}</span>
                        <h3>{{ $step['title'] }}</h3>
                        <p>{{ $step['text'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('partials.final-cta', [
        'title' => __('home.final_cta.title'),
        'subtitle' => __('home.final_cta.subtitle'),
        'primary' => __('home.final_cta.primary'),
        'secondary' => __('home.final_cta.secondary'),
        'whatsappTopic' => 'dental treatment',
    ])

@endsection
