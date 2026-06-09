<?php

namespace App\Services;

use App\Models\ChatKnowledge;

class KnowledgeService
{
    private const STOP_WORDS = [
        'a','an','the','and','or','but','in','on','at','to','for','of','with',
        'is','it','do','does','how','what','where','when','who','can','will',
        'i','me','my','we','you','your','us','our','be','are','was','were',
        'have','has','had','not','no','so','if','than','that','this','which',
        'would','could','should','may','might','need','want','like','get',
        'please','tell','know','about','just','also','much','many','more',
        'very','any','all','its','as','up','из','и','на','за','да','се',
    ];

    public function findRelevant(string $message, int $limit = 3): string
    {
        $keywords = $this->extractKeywords($message);

        if (empty($keywords)) {
            return '';
        }

        $results = ChatKnowledge::where('is_active', true)
            ->where(function ($q) use ($keywords) {
                foreach ($keywords as $word) {
                    $term = '%' . $word . '%';
                    $q->orWhere('keywords', 'LIKE', $term)
                      ->orWhere('title',    'LIKE', $term)
                      ->orWhere('content',  'LIKE', $term);
                }
            })
            ->orderByDesc('priority')
            ->limit($limit)
            ->get(['type', 'title', 'content']);

        if ($results->isEmpty()) {
            return '';
        }

        $lines = $results->map(fn ($r) => "[{$r->type}] {$r->title}\n{$r->content}");

        return "KNOWLEDGE BASE:\n" . $lines->implode("\n---\n");
    }

    private function extractKeywords(string $message): array
    {
        // lowercase, strip punctuation, split on whitespace
        $words = preg_split('/\s+/', preg_replace('/[^\p{L}0-9\s]/u', '', mb_strtolower($message)));

        return array_values(array_filter(
            $words,
            fn ($w) => strlen($w) >= 3 && ! in_array($w, self::STOP_WORDS, true)
        ));
    }
}
