<?php

namespace DataValidation\Tests;

use DataValidation\PhoneNumberValidator;
use PHPUnit\Framework\TestCase;

class PhoneValidatorTest extends TestCase
{
    public function testValidPhoneNumber()
    {
        $validator = new PhoneNumberValidator();
        $this->assertTrue($validator->validate('+998 90 123 4567', 'uz'));
        $this->assertTrue($validator->validate('(123) 456-7890', 'us'));
        $this->assertTrue($validator->validate('+44 20 1234 5678', 'gb'));
    }

    public function testInvalidPhoneNumber()
    {
        $validator = new PhoneNumberValidator();
        $this->assertFalse($validator->validate('998 90 123 4567', 'uz'));
        $this->assertFalse($validator->validate('(123) 456 7890', 'us'));
        $this->assertFalse($validator->validate('+44 20 1234 56789', 'gb'));
    }
}
