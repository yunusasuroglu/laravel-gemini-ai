<?php

namespace yunusasuroglu\Gemini;

use Illuminate\Support\Facades\Http;

class GeminiService
{
    public function create($text, $apiKey)
    {
        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
        ])->post("https://generativelanguage.googleapis.com/v1beta/models/gemini-1.5-flash-latest:generateContent?key=" . $apiKey, [
            "contents" => [
                [
                    "parts" => [
                        ["text" => $text]
                    ]
                ]
            ]
        ]);

        if ($response->successful()) {
            $result = $response->json();
            return [
                'text' => $result['candidates'][0]['content']['parts'][0]['text']
            ];
        } else {
            throw new \Exception('API isteği başarısız oldu.');
        }
    }
}