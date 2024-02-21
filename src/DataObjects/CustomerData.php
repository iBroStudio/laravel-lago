<?php

namespace IBroStudio\Lago\DataObjects;

use IBroStudio\Lago\DataObjects\Contracts\CustomerDataContract;
use IBroStudio\Lago\Enums\Countries;
use IBroStudio\Lago\Enums\Currencies;
use IBroStudio\Lago\Enums\Timezones;
use IBroStudio\Lago\Models\Contracts\CustomerObjectDataEloquentSource;
use IBroStudio\Lago\Transformers\ValueObjectTransformer;
use MichaelRubel\ValueObjects\Collection\Complex\Email;
use MichaelRubel\ValueObjects\Collection\Complex\FullName;
use MichaelRubel\ValueObjects\Collection\Complex\Name;
use MichaelRubel\ValueObjects\Collection\Complex\Phone;
use MichaelRubel\ValueObjects\Collection\Complex\TaxNumber;
use MichaelRubel\ValueObjects\Collection\Complex\Url;
use Spatie\LaravelData\Attributes\WithTransformer;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CustomerData extends Data implements CustomerDataContract
{
    public function __construct(
        public string $external_id,
        public CustomerBillingConfiguration $billing_configuration,
        public string|Optional $address_line1,
        public string|Optional $address_line2,
        #[WithTransformer(ValueObjectTransformer::class)]
        public Name|Optional $city,
        public Countries|Optional $country,
        public Currencies|Optional $currency,
        #[WithTransformer(ValueObjectTransformer::class)]
        public Email|Optional $email,
        #[WithTransformer(ValueObjectTransformer::class)]
        public Name|Optional $legal_name,
        public string|Optional $legal_number,
        #[WithTransformer(ValueObjectTransformer::class)]
        public Url|Optional $logo_url,
        public array|Optional $metadata,
        #[WithTransformer(ValueObjectTransformer::class)]
        public FullName|Optional $name,
        public int|Optional $net_payment_term,
        #[WithTransformer(ValueObjectTransformer::class)]
        public Phone|Optional $phone,
        #[WithTransformer(ValueObjectTransformer::class)]
        public Name|Optional $state,
        public array|Optional $tax_codes,
        #[WithTransformer(ValueObjectTransformer::class)]
        public TaxNumber|Optional $tax_identification_number,
        public Timezones|Optional $timezone,
        #[WithTransformer(ValueObjectTransformer::class)]
        public Url|Optional $url,
        public string|Optional $zipcode,
    ) {
    }

    public static function fromSource(array $source): CustomerDataContract
    {
        $default = collect([
            'billing_configuration' => CustomerBillingConfiguration::from(
                config('lago.default.billing_configuration')
            ),
            'address_line1' => Optional::create(),
            'address_line2' => Optional::create(),
            'city' => Optional::create(),
            'country' => Optional::create(),
            'currency' => config('lago.default.currency') ?? Optional::create(),
            'legal_name' => Optional::create(),
            'legal_number' => Optional::create(),
            'logo_url' => Optional::create(),
            'metadata' => Optional::create(),
            'net_payment_term' => Optional::create(),
            'phone' => Optional::create(),
            'state' => Optional::create(),
            'tax_codes' => Optional::create(),
            'tax_identification_number' => Optional::create(),
            'timezone' => config('lago.default.timezone') ?? Optional::create(),
            'url' => Optional::create(),
            'zipcode' => Optional::create(),
        ]);

        return new static(...$default->merge($source));
    }

    public static function fromEloquent(CustomerObjectDataEloquentSource $source): CustomerDataContract
    {
        return self::fromSource([
            'external_id' => $source->getId(),
            'name' => $source->getName(),
            'email' => $source->getEmail(),
        ]);
    }
}
