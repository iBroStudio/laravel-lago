<?php

namespace IBroStudio\Lago\Sdk\Requests\Events;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createEvent
 *
 * This endpoint is used for transmitting usage measurement events to either a designated customer or a
 * specific subscription.
 */
class CreateEvent extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/events';
    }

    public function __construct()
    {
    }
}
