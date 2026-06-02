@extends('layouts.app', [
    'title' => __('about.meta_title'),
    'description' => __('about.meta_description'),
])

@section('content')

    @include('partials.page-header', [
        'title' => __('about.hero_title'),
        'breadcrumb' => __('about.breadcrumb'),
    ])

    {{-- Intro --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <figure class="image-anime" style="border-radius:18px;overflow:hidden;">
                        <img src="{{ asset('images/dental-quality.jpg') }}" alt="{{ config('site.brand') }} clinic in Bulgaria" style="width:100%;height:auto;display:block;">
                    </figure>
                </div>
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.intro.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.intro.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('about.intro.lead_1') }}</p>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.4s">{{ __('about.intro.lead_2') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Mission / Vision / Values --}}
    <section class="section-spacer" style="background:#f8fafc;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.mission.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.mission.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('about.mission.lead') }}</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach (__('about.mission.pillars') as $i => $pillar)
                    <div class="col-lg-4">
                        <div class="expertise-list-box wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s" style="height:100%;">
                            <div class="expertise-list-title"><h3>{{ $pillar['title'] }}</h3></div>
                            <div class="expertise-list-content"><p>{{ $pillar['text'] }}</p></div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- History / Stats --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.history.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.history.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('about.history.lead') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-md-4 col-6">
                            <div class="process-step wow fadeInUp" style="text-align:center;">
                                <span class="process-number">{{ __('about.history.highlight_1_value') }}</span>
                                <p>{{ __('about.history.highlight_1_label') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-6">
                            <div class="process-step wow fadeInUp" data-wow-delay="0.15s" style="text-align:center;">
                                <span class="process-number">{{ __('about.history.highlight_2_value') }}</span>
                                <p>{{ __('about.history.highlight_2_label') }}</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="process-step wow fadeInUp" data-wow-delay="0.3s" style="text-align:center;">
                                <span class="process-number">{{ __('about.history.highlight_3_value') }}</span>
                                <p>{{ __('about.history.highlight_3_label') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Team --}}
    <section class="section-spacer" style="background:#f8fafc;">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.team.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.team.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('about.team.lead') }}</p>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach (__('about.team.members') as $i => $member)
                    <div class="col-lg-3 col-md-6">
                        <div class="team-member-item featured-service-card wow fadeInUp" data-wow-delay="{{ 0.15 * $i }}s">
                            @if (!empty($member['image']))
                                <div class="team-image">
                                    <figure class="image-anime">
                                        <img src="{{ asset($member['image']) }}" alt="{{ $member['name'] }} — {{ $member['role'] }}">
                                    </figure>
                                </div>
                            @endif
                            <div class="service-body">
                                <h3>{{ $member['name'] }}</h3>
                                <p style="color:#0f766e;font-weight:600;margin-bottom:8px;">{{ $member['role'] }}</p>
                                @if (!empty($member['experience']))
                                    <div style="margin-bottom:14px;">
                                        <span style="display:inline-block;background:#0f766e;color:#fff;font-weight:600;font-size:0.85rem;line-height:1.2;padding:5px 14px;border-radius:999px;">{{ $member['experience'] }}</span>
                                    </div>
                                @endif
                                <p>{{ $member['bio'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- Specialisms --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.specialisms.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.specialisms.title') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row g-4">
                @foreach (__('about.specialisms.items') as $i => $item)
                    <div class="col-lg-3 col-md-6">
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

    {{-- Quality / Certificates --}}
    <section class="section-spacer" style="background:#f8fafc;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.quality.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.quality.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('about.quality.lead') }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="quality-list">
                        @foreach (__('about.quality.list') as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- Visit / Map --}}
    <section class="section-spacer">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-9">
                    <div class="section-title">
                        <h3 class="wow fadeInUp">{{ __('about.visit.eyebrow') }}</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ __('about.visit.title') }}</h2>
                        <p class="wow fadeInUp lead-text" data-wow-delay="0.25s">{{ __('about.visit.lead') }}</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 align-items-stretch">
                <div class="col-lg-5">
                    <div class="contact-us-item wow fadeInUp" style="margin-bottom:20px;">
                        <div class="icon-box"><img src="{{ asset('images/icon-location-info.svg') }}" alt=""></div>
                        <div class="contact-us-item-content">
                            <h3>{{ __('about.visit.address_label') }}</h3>
                            @foreach (config('site.contact.address_lines') as $line)
                                <p>{{ $line }}</p>
                            @endforeach
                        </div>
                    </div>
                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.15s" style="margin-bottom:20px;">
                        <div class="icon-box"><img src="{{ asset('images/icon-phone-info.svg') }}" alt=""></div>
                        <div class="contact-us-item-content">
                            <h3>{{ __('about.visit.phone_label') }}</h3>
                            <p><a href="tel:{{ config('site.contact.phone_e164') }}" style="color:inherit;">{{ config('site.contact.phone_display') }}</a></p>
                            <p><a href="https://wa.me/{{ config('site.contact.whatsapp_e164') }}" target="_blank" rel="noopener" style="color:#25D366;font-weight:600;"><i class="fa-brands fa-whatsapp"></i>&nbsp; {{ __('cta.whatsapp') }}</a></p>
                        </div>
                    </div>
                    <div class="contact-us-item wow fadeInUp" data-wow-delay="0.3s" style="margin-bottom:20px;">
                        <div class="icon-box"><img src="{{ asset('images/icon-watch-info.svg') }}" alt=""></div>
                        <div class="contact-us-item-content">
                            <h3>{{ __('about.visit.hours_label') }}</h3>
                            <p>{{ config('site.contact.hours') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-map" style="border-radius:18px;overflow:hidden;height:100%;min-height:480px;">
                        <iframe
                            src="https://www.google.com/maps?q={{ urlencode(config('site.contact.map_query')) }}&output=embed"
                            width="100%" height="100%" style="border:0;min-height:480px;"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.final-cta', [
        'title' => __('about.final_cta.title'),
        'subtitle' => __('about.final_cta.subtitle'),
        'primary' => __('about.final_cta.primary'),
        'secondary' => __('about.final_cta.secondary'),
        'whatsappTopic' => 'a treatment plan',
    ])

@endsection
