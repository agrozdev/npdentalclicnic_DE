<?php

namespace App\Support;

class BlogRepository
{
    public static function all(): array
    {
        return [
            [
                'slug' => 'dental-implants-bulgaria-uk-patients-guide',
                'title' => 'Dental implants in Bulgaria: the complete guide for UK patients',
                'excerpt' => 'Everything UK patients need to know about getting dental implants in Bulgaria — costs, brands, surgeons, the treatment journey, warranties, and how to verify a clinic before you fly.',
                'image' => 'dental-implants.jpg',
                'author' => 'Dr. NP Dental Team',
                'date' => '2026-05-02',
                'reading_time' => 11,
                'view' => 'blog.posts.dental-implants-bulgaria-uk-guide',
            ],
            [
                'slug' => 'clear-dental-aligners-uk-patients-sofia-guide',
                'title' => 'Clear dental aligners: a UK patient’s guide to treatment in Sofia',
                'excerpt' => 'How clear aligners work, who they suit, what treatment in Sofia looks like, what it costs compared to UK private prices, and how to know whether aligners — or fixed braces — are right for your case.',
                'image' => 'dental-aligners.jpg',
                'author' => 'Dr. NP Dental Team',
                'date' => '2026-04-26',
                'reading_time' => 9,
                'view' => 'blog.posts.clear-aligners-uk-sofia-guide',
            ],
            [
                'slug' => 'why-uk-patients-choose-bulgaria-for-dental-care',
                'title' => 'Why UK patients are choosing Bulgaria for dental implants and aligners',
                'excerpt' => 'High clinical standards, EU-regulated clinics and prices that make a real difference. A practical look at why dental tourism from the UK to Bulgaria has become a smart choice.',
                'image' => 'why-uk-patients-choosing-bulgaria.jpg',
                'author' => 'Dr. NP Dental Team',
                'date' => '2026-04-12',
                'reading_time' => 6,
                'view' => 'blog.posts.why-uk-patients-choose-bulgaria',
            ],
            [
                'slug' => 'dental-implants-vs-bridges-which-is-right-for-you',
                'title' => 'Dental implants vs bridges: which is right for you?',
                'excerpt' => 'A clear comparison of fixed bridges and dental implants — including longevity, comfort, cost and what happens to the surrounding teeth.',
                'image' => 'dental-implants-vs-bridges.jpg',
                'author' => 'Dr. NP Dental Team',
                'date' => '2026-03-21',
                'reading_time' => 5,
                'view' => 'blog.posts.implants-vs-bridges',
            ],
            [
                'slug' => 'are-clear-aligners-really-as-effective-as-braces',
                'title' => 'Are clear aligners really as effective as braces?',
                'excerpt' => 'How modern clear aligners compare to traditional braces — what they treat well, where braces still win, and how to know which one fits your case.',
                'image' => 'are-clear-aligners-like-braces.jpg',
                'author' => 'Dr. NP Dental Team',
                'date' => '2026-02-08',
                'reading_time' => 5,
                'view' => 'blog.posts.aligners-vs-braces',
            ],
        ];
    }

    public static function find(string $slug): ?array
    {
        foreach (self::all() as $post) {
            if ($post['slug'] === $slug) {
                return $post;
            }
        }

        return null;
    }

    public static function related(string $slug, int $limit = 2): array
    {
        return array_slice(
            array_values(array_filter(self::all(), fn ($p) => $p['slug'] !== $slug)),
            0,
            $limit
        );
    }
}
