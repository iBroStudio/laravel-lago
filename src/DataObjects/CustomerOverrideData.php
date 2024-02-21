<?php

namespace IBroStudio\Lago\DataObjects;

use IBroStudio\DataRepository\Contracts\Authentication;
use IBroStudio\Lago\DataObjects\Contracts\CustomerDataContract;
use IBroStudio\Lago\Models\Contracts\CustomerObjectDataEloquentSource;
use IBroStudio\Lago\Tests\Support\Models\User;
use Illuminate\Support\Collection;
use MichaelRubel\ValueObjects\Collection\Complex\Email;
use MichaelRubel\ValueObjects\Collection\Complex\Name;
use MichaelRubel\ValueObjects\ValueObject;
use Spatie\LaravelData\Optional;

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
