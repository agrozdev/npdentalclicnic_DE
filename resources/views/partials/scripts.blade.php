<script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/validator.min.js') }}"></script>
<script src="{{ asset('js/jquery.slicknav.js') }}"></script>
<script src="{{ asset('js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('js/SmoothScroll.js') }}"></script>
<script src="{{ asset('js/parallaxie.js') }}"></script>
<script src="{{ asset('js/jquery.event.move.js') }}"></script>
<script src="{{ asset('js/jquery.twentytwenty.js') }}"></script>
<script src="{{ asset('js/gsap.min.js') }}"></script>
<script src="{{ asset('js/SplitText.js') }}"></script>
<script src="{{ asset('js/ScrollTrigger.min.js') }}"></script>
<script src="{{ asset('js/jquery.mb.YTPlayer.min.js') }}"></script>
<script src="{{ asset('js/wow.js') }}"></script>
<script src="{{ asset('js/function.js') }}"></script>

<script>
(function () {
    var KEY = 'npdc_cookie_consent';
    var banner = document.getElementById('cookie-banner');
    if (!banner) return;
    try {
        if (!localStorage.getItem(KEY)) {
            banner.classList.add('is-visible');
        }
    } catch (e) {
        banner.classList.add('is-visible');
    }
    banner.addEventListener('click', function (e) {
        var btn = e.target.closest('[data-cookie-action]');
        if (!btn) return;
        try { localStorage.setItem(KEY, btn.dataset.cookieAction); } catch (err) {}
        banner.classList.remove('is-visible');
    });
})();
</script>
