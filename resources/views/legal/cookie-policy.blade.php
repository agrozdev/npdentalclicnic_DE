@extends('layouts.app', [
    'title' => __('legal.cookie.meta_title'),
    'description' => __('legal.cookie.meta_description'),
])

@section('content')

    @include('partials.page-header', [
        'title' => __('legal.cookie.title'),
        'breadcrumb' => __('legal.cookie.breadcrumb'),
    ])

    <section class="legal-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <p class="legal-meta">{{ __('legal.last_updated', ['date' => '9 May 2026']) }}</p>

                    <p>This Cookie Policy explains how {{ config('site.brand') }} ("we", "us", "our") uses cookies and similar technologies on this website. It should be read together with our <a href="{{ route('legal.privacy') }}">Privacy Policy</a>.</p>

                    <h2>1. What are cookies?</h2>
                    <p>Cookies are small text files placed on your device when you visit a website. They allow a site to recognise your device, remember your preferences and understand how the site is used.</p>

                    <h2>2. Categories of cookies we may use</h2>
                    <h3>Strictly necessary cookies</h3>
                    <p>These cookies are essential to make the website function — for example, to remember your cookie preferences and protect against form abuse. They cannot be switched off.</p>

                    <h3>Functional cookies</h3>
                    <p>These cookies remember choices you make, such as your preferred language, to provide a more personal experience.</p>

                    <h3>Analytics cookies</h3>
                    <p>If enabled, these cookies help us understand how visitors interact with the site (for example, which pages are visited most often). All data is aggregated and anonymous.</p>

                    <h3>Marketing cookies</h3>
                    <p>If enabled, these cookies may be set by advertising partners to build a profile of your interests and show you relevant content on other websites. We only enable these with your consent.</p>

                    <h2>3. Managing cookies</h2>
                    <p>When you first visit this site, you will see a cookie banner allowing you to accept or decline non-essential cookies. You can change your preferences at any time by clearing your browser cookies and revisiting the site.</p>
                    <p>Most browsers also let you control cookies through their settings. Please refer to your browser’s help section to learn how.</p>

                    <h2>4. Third-party services</h2>
                    <p>Where we embed content from third parties (for example, Google Maps), those services may set their own cookies. We do not control these cookies and recommend reviewing the relevant provider’s privacy and cookie policies.</p>

                    <h2>5. Changes to this policy</h2>
                    <p>We may update this Cookie Policy from time to time. The "Last updated" date at the top of this page reflects the latest revision.</p>

                    <h2>6. Contact</h2>
                    <p>If you have questions about our use of cookies, please contact us at <a href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
