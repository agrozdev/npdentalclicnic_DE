@extends('layouts.app', [
    'title' => __('legal.terms.meta_title'),
    'description' => __('legal.terms.meta_description'),
])

@section('content')

    @include('partials.page-header', [
        'title' => __('legal.terms.title'),
        'breadcrumb' => __('legal.terms.breadcrumb'),
    ])

    <section class="legal-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <p class="legal-meta">{{ __('legal.last_updated', ['date' => '9 May 2026']) }}</p>

                    <p>These Terms of Use govern your access to and use of the {{ config('site.brand') }} website. By using the site, you agree to these terms. If you do not agree, please do not use the site.</p>

                    <h2>1. About this site</h2>
                    <p>This website is operated by {{ config('site.brand') }} from {{ config('site.contact.address_inline') }}. The site provides general information about our dental services and an enquiry form for prospective patients.</p>

                    <h2>2. Not medical advice</h2>
                    <p>Information on this website is provided for general informational purposes only. It is not a substitute for professional dental or medical advice, diagnosis or treatment. You should always consult a qualified clinician about your individual situation.</p>

                    <h2>3. Use of the site</h2>
                    <p>You agree to use this website only for lawful purposes and in a way that does not infringe the rights of, restrict or inhibit anyone else’s use of the site. Specifically, you must not:</p>
                    <ul>
                        <li>Use the site to send unsolicited marketing or spam.</li>
                        <li>Attempt to gain unauthorised access to the site, its server or any related systems.</li>
                        <li>Submit content that is unlawful, defamatory, harmful or infringes the rights of others.</li>
                        <li>Use the site to transmit viruses or malicious code.</li>
                    </ul>

                    <h2>4. Intellectual property</h2>
                    <p>All content on this site — including text, graphics, logos, icons, images and software — is the property of {{ config('site.brand') }} or its licensors and is protected by copyright and other intellectual property laws. You may view and print pages for personal, non-commercial use only.</p>

                    <h2>5. Links to other sites</h2>
                    <p>This site may contain links to third-party websites. We are not responsible for the content or practices of those sites and provide the links for convenience only.</p>

                    <h2>6. Limitation of liability</h2>
                    <p>To the fullest extent permitted by law, {{ config('site.brand') }} shall not be liable for any indirect, incidental, special, consequential or punitive damages arising from your use of, or inability to use, this website. Nothing in these terms limits or excludes liability for death or personal injury caused by negligence, or any other liability that cannot be excluded under applicable law.</p>

                    <h2>7. Treatment, quotes and clinical decisions</h2>
                    <p>Any treatment plan, quote or clinical recommendation is based on the information you provide and is subject to in-person examination at our clinic. Final treatment is delivered under a separate clinical agreement.</p>

                    <h2>8. Privacy</h2>
                    <p>Your use of this site is also governed by our <a href="{{ route('legal.privacy') }}">Privacy Policy</a> and <a href="{{ route('legal.cookie') }}">Cookie Policy</a>.</p>

                    <h2>9. Governing law</h2>
                    <p>These terms are governed by the laws of Bulgaria. Any disputes will be subject to the non-exclusive jurisdiction of the Bulgarian courts. This does not affect your rights as a consumer in your country of residence.</p>

                    <h2>10. Changes</h2>
                    <p>We may update these terms from time to time. Continued use of the site after changes are posted means you accept the updated terms.</p>

                    <h2>11. Contact</h2>
                    <p>Questions about these terms can be sent to <a href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
