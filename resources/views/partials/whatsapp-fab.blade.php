@php
    $waNumber = config('site.contact.whatsapp_e164');
    $waMsg = rawurlencode('Hello NP Dental Clinic, I would like to ask about ');
@endphp
<a href="https://wa.me/{{ $waNumber }}?text={{ $waMsg }}" class="whatsapp-fab" target="_blank" rel="noopener" aria-label="{{ __('cta.whatsapp') }}">
    <i class="fa-brands fa-whatsapp"></i>
    <span class="whatsapp-fab-label">{{ __('cta.whatsapp') }}</span>
</a>
