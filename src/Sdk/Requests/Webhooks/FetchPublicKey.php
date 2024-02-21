<?php

namespace IBroStudio\Lago\Sdk\Requests\Webhooks;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * fetchPublicKey
 *
 * This endpoint is used to retrieve the public key used to verify the webhooks signature
 */
class FetchPublicKey extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/webhooks/public_key';
    }

    public function __construct()
    {
    }
}
