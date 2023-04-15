<?php

declare(strict_types=1);

namespace DataValidation;

use DataValidation\EmailValidator;
use DataValidation\PhoneNumberValidator;

class Validator
{
    public function validate(string $type, $data): bool
    {
        $validator = match ($type) {
            'email' => new EmailValidator(),
            'phone' => new PhoneNumberValidator(),
            default => throw new \InvalidArgumentException("Invalid validation type: $type"),
        };

        return $validator->validate($data);
    }
}
