<?php

namespace IBroStudio\Lago\Transformers;

use Spatie\LaravelData\Support\DataProperty;
use Spatie\LaravelData\Transformers\Transformer;

class ValueObjectTransformer implements Transformer
{
    public function transform(DataProperty $property, mixed $value): mixed
    {
        return $value->value();
    }
}
