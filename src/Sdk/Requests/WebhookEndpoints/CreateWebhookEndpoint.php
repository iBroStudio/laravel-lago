<?php

namespace IBroStudio\Lago\Sdk\Requests\WebhookEndpoints;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createWebhookEndpoint
 *
 * This endpoint is used to create a webhook endpoint.
 */
class CreateWebhookEndpoint extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/webhook_endpoints';
    }

    public function __construct()
    {
    }
}
