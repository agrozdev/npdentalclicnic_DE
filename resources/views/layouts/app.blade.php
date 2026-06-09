<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.head', ['title' => $title ?? null, 'description' => $description ?? null])
</head>
<body>
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img src="{{ asset('images/loader.svg') }}" alt=""></div>
        </div>
    </div>

    @include('partials.header')

    @yield('content')

    @include('partials.footer')

    @include('partials.cookie-banner')

    @include('partials.scripts')
    @stack('scripts')
    @include('partials.chat-widget')
</body>
</html>
