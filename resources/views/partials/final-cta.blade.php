@php
    $waNumber = config('site.contact.whatsapp_e164');
    $waMsg = rawurlencode('Hello NP Dental Clinic, I have a question about ' . ($whatsappTopic ?? 'treatment'));
@endphp
<section class="final-cta-section">
    <div class="container">
        <h2 class="text-anime-style-3" data-cursor="-opaque">{{ $title }}</h2>
        <p class="wow fadeInUp" data-wow-delay="0.2s">{{ $subtitle }}</p>
        <div class="wow fadeInUp" data-wow-delay="0.4s">
            <a href="{{ route('contact') }}" class="btn-default">{{ $primary }}</a>
            <a href="https://wa.me/{{ $waNumber }}?text={{ $waMsg }}" target="_blank" rel="noopener" class="btn-default btn-whatsapp">
                <i class="fa-brands fa-whatsapp"></i>&nbsp; {{ $secondary }}
            </a>
        </div>
    </div>
</section>
