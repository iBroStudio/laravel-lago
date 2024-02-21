<?php

namespace IBroStudio\Lago\DataObjects;

use IBroStudio\Lago\Enums\PaymentProviders;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Optional;

class CustomerBillingConfiguration extends Data
{
    public function __construct(
        public string $document_locale,
        public int $invoice_grace_period,
        public PaymentProviders|Optional $payment_provider,
        public string|Optional $provider_customer_id,
        public array|Optional $provider_payment_methods,
        public bool $sync = false,
        public bool $sync_with_provider = false
    ) {
    }
}
