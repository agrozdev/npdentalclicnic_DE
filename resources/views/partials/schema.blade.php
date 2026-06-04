@php
    $c = config('site.contact');
    $base = rtrim(url('/'), '/');
    // Only real social URLs feed sameAs — placeholder "#" values are skipped automatically.
    $social = array_values(array_filter((array) config('site.social'), fn ($u) => $u && $u !== '#'));

    $org = [
        '@type' => ['Dentist', 'MedicalClinic'],
        '@id' => $base . '/#organization',
        'name' => config('site.brand'),
        'url' => $base . '/',
        'logo' => asset('images/logo.png'),
        'image' => asset('images/npdental-hero-image.jpg'),
        'description' => config('site.tagline'),
        'telephone' => $c['phone_e164'],
        'email' => $c['email'],
        'address' => [
            '@type' => 'PostalAddress',
            'streetAddress' => 'ul. Akademik Yordan Trifonov 5',
            'addressLocality' => 'Sofia',
            'postalCode' => '1700',
            'addressCountry' => 'BG',
        ],
        'openingHoursSpecification' => [[
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
            'opens' => '08:00',
            'closes' => '20:00',
        ]],
        'priceRange' => '££',
        'medicalSpecialty' => ['Dentistry', 'Oral Surgery'],
        'areaServed' => ['@type' => 'Country', 'name' => 'United Kingdom'],
        'knowsLanguage' => ['en', 'bg'],
        'availableService' => [
            ['@type' => 'MedicalProcedure', 'name' => 'Dental Implants', 'url' => route('services.implants')],
            ['@type' => 'MedicalProcedure', 'name' => 'Clear Dental Aligners', 'url' => route('services.aligners')],
        ],
        'employee' => [
            ['@type' => 'Physician', 'name' => 'Dr. Pavlina Kichukova', 'jobTitle' => 'Lead Dentist & Founder', 'medicalSpecialty' => 'Dentistry', 'image' => asset('images/team/poli_profile_360.jpeg'), 'url' => route('about')],
            ['@type' => 'Physician', 'name' => 'Dr. Ali Atip', 'jobTitle' => 'Oral Surgery Specialist', 'medicalSpecialty' => 'Oral Surgery', 'image' => asset('images/team/ali_atip.jpg'), 'url' => route('about')],
        ],
    ];

    // TODO: add 'geo' => ['@type' => 'GeoCoordinates', 'latitude' => ..., 'longitude' => ...]
    //       once the exact Google Maps pin for the clinic is confirmed.
    if ($social) {
        $org['sameAs'] = $social;
    }

    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            $org,
            [
                '@type' => 'WebSite',
                '@id' => $base . '/#website',
                'name' => config('site.brand'),
                'url' => $base . '/',
                'publisher' => ['@id' => $base . '/#organization'],
                'inLanguage' => 'en-GB',
            ],
        ],
    ];
@endphp
<script type="application/ld+json">
{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
