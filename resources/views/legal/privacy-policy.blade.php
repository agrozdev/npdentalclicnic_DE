@extends('layouts.app', [
    'title' => __('legal.privacy.meta_title'),
    'description' => __('legal.privacy.meta_description'),
])

@section('content')

    @include('partials.page-header', [
        'title' => __('legal.privacy.title'),
        'breadcrumb' => __('legal.privacy.breadcrumb'),
    ])

    <section class="legal-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <p class="legal-meta">{{ __('legal.last_updated', ['date' => '9 May 2026']) }}</p>

                    <p>{{ config('site.brand') }} ("we", "us", "our") respects your privacy and is committed to protecting the personal data you share with us. This Privacy Policy explains how we collect, use, share and safeguard your information when you use this website or contact us about treatment.</p>

                    <h2>1. Who we are</h2>
                    <p>{{ config('site.brand') }} is a dental clinic located at {{ config('site.contact.address_inline') }}. For questions about this policy, you can reach us at <a href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.</p>

                    <h2>2. What personal data we collect</h2>
                    <ul>
                        <li><strong>Identity & contact details</strong>: name, email address, phone number — provided when you fill in our contact form, message us on WhatsApp, or call.</li>
                        <li><strong>Enquiry details</strong>: the subject of your message and any clinical information you choose to share (for example, X-rays, photos, dental history).</li>
                        <li><strong>Technical data</strong>: IP address, browser type, device, referring page, pages visited and timestamps.</li>
                    </ul>

                    <h2>3. How we use your data</h2>
                    <ul>
                        <li>To respond to your enquiries and provide the information you request.</li>
                        <li>To prepare a treatment plan or quote, where requested.</li>
                        <li>To communicate with you about your treatment and follow-up.</li>
                        <li>To improve the website and our services.</li>
                        <li>To meet legal, regulatory and tax obligations.</li>
                    </ul>

                    <h2>4. Legal basis (UK GDPR / EU GDPR)</h2>
                    <p>We process your personal data on the following legal bases, depending on the situation:</p>
                    <ul>
                        <li><strong>Consent</strong>: when you submit our contact form or opt in to communications.</li>
                        <li><strong>Contract</strong>: where processing is needed to take steps before, or to perform, a contract with you (for example, providing treatment).</li>
                        <li><strong>Legitimate interests</strong>: to operate our website, prevent abuse and improve our services.</li>
                        <li><strong>Legal obligation</strong>: where required by law, including healthcare and tax records.</li>
                    </ul>

                    <h2>5. How we share your data</h2>
                    <p>We do not sell your personal data. We may share it only with:</p>
                    <ul>
                        <li>Clinical staff at {{ config('site.brand') }} directly involved in your enquiry or treatment.</li>
                        <li>Trusted service providers who help us operate the site (for example, hosting and email delivery), under strict confidentiality.</li>
                        <li>Authorities, where required by law.</li>
                    </ul>

                    <h2>6. International transfers</h2>
                    <p>If you contact us from the UK, your personal data is transferred from the UK to Bulgaria (an EU member state). Both jurisdictions provide a high level of data protection under GDPR.</p>

                    <h2>7. How long we keep your data</h2>
                    <p>We keep enquiry data only for as long as needed to respond to and follow up on your enquiry. Where treatment is provided, clinical records are kept in line with healthcare retention rules.</p>

                    <h2>8. Your rights</h2>
                    <p>Under UK GDPR and EU GDPR, you have the right to:</p>
                    <ul>
                        <li>Access the personal data we hold about you.</li>
                        <li>Request correction of inaccurate data.</li>
                        <li>Request deletion of your data, where appropriate.</li>
                        <li>Object to or restrict processing.</li>
                        <li>Receive a portable copy of your data.</li>
                        <li>Withdraw your consent at any time.</li>
                        <li>Lodge a complaint with a supervisory authority (in the UK, the ICO).</li>
                    </ul>
                    <p>To exercise any of these rights, please email us at <a href="mailto:{{ config('site.contact.email') }}">{{ config('site.contact.email') }}</a>.</p>

                    <h2>9. Security</h2>
                    <p>We take reasonable technical and organisational measures to protect your personal data against unauthorised access, alteration, disclosure or destruction.</p>

                    <h2>10. Children</h2>
                    <p>This website is not intended for children under the age of 16. We do not knowingly collect personal data from children. Treatment for minors is arranged through their parent or guardian.</p>

                    <h2>11. Changes to this policy</h2>
                    <p>We may update this Privacy Policy from time to time. The "Last updated" date at the top of this page reflects the latest revision.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
