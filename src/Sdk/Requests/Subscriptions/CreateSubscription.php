<?php

namespace IBroStudio\Lago\Sdk\Requests\Subscriptions;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createSubscription
 *
 * This endpoint assigns a plan to a customer, creating or modifying a subscription. Ideal for initial
 * subscriptions or plan changes (upgrades/downgrades).
 */
class CreateSubscription extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/subscriptions';
    }

    public function __construct()
    {
    }
}
