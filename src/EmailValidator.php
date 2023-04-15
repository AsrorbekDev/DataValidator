<?php

declare(strict_types=1);

namespace DataValidation;

class EmailValidator
{
    public function validate(string $email): bool
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        list($localPart, $domainPart) = explode('@', $email);

        $pattern = '/^(?=.{1,255}$)[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,}$/i';
        if (!preg_match($pattern, $domainPart)) {
            return false;
        }

        return true;
    }
}