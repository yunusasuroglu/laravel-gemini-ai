# Laravel Gemini AI Package

This is a Laravel package to interact with Google's Gemini AI API. It allows you to send text to the API and receive the generated content in return.

## Installation

To install the package, run the following Composer command in your Laravel project:

```bash
composer require yunusasuroglu/laravel-gemini-ai
```

## Controller

```php
$geminiService = new GeminiService();
$text = "The text to be sent to the API will come here";
$apiKey = env('GEMINI_API_KEY');

try {
    $result = $geminiService->create($text, $apiKey);
    echo $result['text']; // Prints the response returned by the API to the screen
} catch (\Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
```

## Requirements

- PHP 8.0 or above
- Composer

## Contribute

1. Fork this project.
2. Create a new feature branch (`feature/feature-adi`).
3. Commit your changes (`git commit -m 'New feature added'`).
4. Push the branch to master (`git push origin feature/feature-adi`).
5. Open a Pull Request.

## Licence
This project is licensed under the [MIT License](LICENSE).
