<?php

namespace IBroStudio\Lago\Sdk\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findSubscription
 *
 * This endpoint retrieves a specific subscription.
 */
class FindSubscription extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return "/subscriptions/{$this->externalId}";
    }

    /**
     * @param  string  $externalId  External ID of the existing subscription
     */
    public function __construct(
        protected string $externalId,
    ) {
    }
}
