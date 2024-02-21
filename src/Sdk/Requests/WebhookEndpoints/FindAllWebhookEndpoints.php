<?php

namespace IBroStudio\Lago\Sdk\Requests\WebhookEndpoints;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllWebhookEndpoints
 *
 * This endpoint is used to list all webhook endpoints.
 */
class FindAllWebhookEndpoints extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/webhook_endpoints';
    }

    /**
     * @param  null|int  $page  Page number.
     */
    public function __construct(
        protected ?int $page = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page]);
    }
}
