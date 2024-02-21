<?php

namespace IBroStudio\Lago\Sdk\Requests\AddOns;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createAddOn
 *
 * This endpoint is used to create an add-on that can be then attached to a one-off invoice.
 */
class CreateAddOn extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/add_ons';
    }

    public function __construct()
    {
    }
}
