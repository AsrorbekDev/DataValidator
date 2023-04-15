<?php

declare(strict_types=1);

namespace DataValidation;

class PhoneNumberValidator
{
    public function validate(string $phone, string $countryCode = ''): bool
    {
        $pattern = match ($countryCode) {
            'uz' => '/^\+998\s\d{2}\s\d{3}\s\d{4}$/',
            'us' => '/^\(\d{3}\)\s\d{3}-\d{4}$/',
            'gb' => '/^\+44\s\d{2}\s\d{4}\s\d{4}$/',
            default => '/^\+\d{2}\s\d{10}$/',
        };

        return preg_match($pattern, $phone) === 1;
    }
}
