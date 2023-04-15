# DataValidation

DataValidation is a PHP library that provides simple and easy-to-use classes for validating data, such as email addresses and phone numbers.

## Installation

You can install the DataValidation library using Composer:

```bash
composer require yourvendor/datavalidation
```
# Usage

### EmailValidator
The EmailValidator class can be used to validate email addresses:

```bash

use DataValidation\EmailValidator;

$validator = new EmailValidator();

if ($validator->validate('example@example.com')) {
    echo 'Valid email address';
} else {
    echo 'Invalid email address';
}
```
### PhoneValidator
The PhoneValidator class can be used to validate phone numbers:

```bash
use DataValidation\PhoneValidator;

$validator = new PhoneValidator();

if ($validator->validate('+1 (123) 456-7890', 'us')) {
    echo 'Valid phone number';
} else {
    echo 'Invalid phone number';
}
```

## License
DataValidation is open-source software licensed under the MIT license.

