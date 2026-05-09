<div class="our-cta-box">
    <div class="container">
        <div class="row cta-content-box">
            <div class="col-lg-4 col-md-6">
                <div class="cta-item wow fadeInUp">
                    <div class="icon-box">
                        <img src="{{ asset('images/icon-phone.svg') }}" alt="">
                    </div>
                    <div class="cta-item-content">
                        <h3>{{ __('home.cta_strip.phone_label') }}</h3>
                        <p><a href="tel:{{ config('site.contact.phone_e164') }}" style="color:inherit;text-decoration:none;">{{ config('site.contact.phone_display') }}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="cta-item wow fadeInUp" data-wow-delay="0.25s">
                    <div class="icon-box">
                        <img src="{{ asset('images/icon-watch.svg') }}" alt="">
                    </div>
                    <div class="cta-item-content">
                        <h3>{{ __('home.cta_strip.hours_label') }}</h3>
                        <p>{{ config('site.contact.hours') }}</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="cta-btn wow fadeInUp" data-wow-delay="0.5s">
                    <a href="{{ route('contact') }}" class="btn-default">{{ __('cta.book_consultation') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
