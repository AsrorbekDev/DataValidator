<?php

declare(strict_types=1);

namespace DataValidation\Tests;

use PHPUnit\Framework\TestCase;
use DataValidation\EmailValidator;

class EmailValidatorTest extends TestCase
{
    private EmailValidator $validator;

    protected function setUp(): void
    {
        parent::setUp();
        $this->validator = new EmailValidator();
    }

    public function testValidEmail()
    {
        $this->assertTrue($this->validator->validate('johndoe@example.com'));
    }

    public function testInvalidEmail()
    {
        $this->assertFalse($this->validator->validate('notanemailaddress'));
    }
}
