<div id="cookie-banner" class="cookie-banner" role="dialog" aria-live="polite" aria-label="Cookie consent">
    <p>
        {{ __('cookies.message') }}
        <a class="cookie-link" href="{{ route('legal.cookie') }}">{{ __('cookies.learn_more') }}</a>
    </p>
    <div class="cookie-actions">
        <button type="button" class="btn btn-ghost" data-cookie-action="declined">{{ __('cookies.decline') }}</button>
        <button type="button" class="btn btn-primary" data-cookie-action="accepted">{{ __('cookies.accept') }}</button>
    </div>
</div>
