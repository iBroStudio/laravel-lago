<?php

namespace IBroStudio\Lago\DataObjects;

use IBroStudio\Lago\DataObjects\Contracts\CustomerDataContract;
use IBroStudio\Lago\Models\Contracts\CustomerObjectDataEloquentSource;
use MichaelRubel\ValueObjects\Collection\Complex\Email;
use MichaelRubel\ValueObjects\Collection\Complex\Name;

class CustomerOverrideData extends CustomerData
{
    public static function fromEloquent(CustomerObjectDataEloquentSource $source): CustomerDataContract
    {
        return self::fromSource([
            'external_id' => $source->id,
            'name' => Name::from($source->name),
            'email' => Email::from($source->email),
        ]);
    }
}
