<?php

namespace IBroStudio\Lago\Sdk;

use IBroStudio\Lago\Sdk\Resource\AddOns;
use IBroStudio\Lago\Sdk\Resource\Analytics;
use IBroStudio\Lago\Sdk\Resource\BillableMetrics;
use IBroStudio\Lago\Sdk\Resource\Coupons;
use IBroStudio\Lago\Sdk\Resource\CreditNotes;
use IBroStudio\Lago\Sdk\Resource\Customers;
use IBroStudio\Lago\Sdk\Resource\Events;
use IBroStudio\Lago\Sdk\Resource\Fees;
use IBroStudio\Lago\Sdk\Resource\Invoices;
use IBroStudio\Lago\Sdk\Resource\Organizations;
use IBroStudio\Lago\Sdk\Resource\Plans;
use IBroStudio\Lago\Sdk\Resource\Subscriptions;
use IBroStudio\Lago\Sdk\Resource\Taxes;
use IBroStudio\Lago\Sdk\Resource\Wallets;
use IBroStudio\Lago\Sdk\Resource\WebhookEndpoints;
use IBroStudio\Lago\Sdk\Resource\Webhooks;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;

/**
 * Lago API documentation
 *
 * Lago API allows your application to push customer information and metrics (events) from your application to the billing application.
 */
class LagoSdk extends Connector
{
    public function __construct(public readonly string $url,
        public readonly string $key)
    {
    }

    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->key);
    }

    public function resolveBaseUrl(): string
    {
        return "{$this->url}/api/v1";
    }

    public function addOns(): AddOns
    {
        return new AddOns($this);
    }

    public function analytics(): Analytics
    {
        return new Analytics($this);
    }

    public function billableMetrics(): BillableMetrics
    {
        return new BillableMetrics($this);
    }

    public function coupons(): Coupons
    {
        return new Coupons($this);
    }

    public function creditNotes(): CreditNotes
    {
        return new CreditNotes($this);
    }

    public function customers(): Customers
    {
        return new Customers($this);
    }

    public function events(): Events
    {
        return new Events($this);
    }

    public function fees(): Fees
    {
        return new Fees($this);
    }

    public function invoices(): Invoices
    {
        return new Invoices($this);
    }

    public function organizations(): Organizations
    {
        return new Organizations($this);
    }

    public function plans(): Plans
    {
        return new Plans($this);
    }

    public function subscriptions(): Subscriptions
    {
        return new Subscriptions($this);
    }

    public function taxes(): Taxes
    {
        return new Taxes($this);
    }

    public function wallets(): Wallets
    {
        return new Wallets($this);
    }

    public function webhookEndpoints(): WebhookEndpoints
    {
        return new WebhookEndpoints($this);
    }

    public function webhooks(): Webhooks
    {
        return new Webhooks($this);
    }
}
