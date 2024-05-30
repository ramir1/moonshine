<?php

declare(strict_types=1);

namespace MoonShine\UI\Contracts;

use Closure;
use MoonShine\UI\Fields\Field;

interface ApplyContract
{
    /**
     * @return Closure(mixed $data): mixed
     */
    public function apply(Field $field): Closure;
}
