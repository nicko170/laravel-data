<?php

namespace Spatie\LaravelData\Attributes\Validation;

use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class RequiredWithoutAll extends ValidationAttribute
{
    public function __construct(
        private array | string $fields,
    ) {
    }

    public function getRules(): array
    {
        return ["required_without_all:{$this->normalizeValue($this->fields)}"];
    }
}
