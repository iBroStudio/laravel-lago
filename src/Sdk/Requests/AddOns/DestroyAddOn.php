<?php

namespace IBroStudio\Lago\Sdk\Requests\AddOns;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * destroyAddOn
 *
 * This endpoint is used to delete an existing add-on.
 */
class DestroyAddOn extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/add_ons/{$this->code}";
    }

    /**
     * @param  string  $code  Unique code used to identify the add-on.
     */
    public function __construct(
        protected string $code,
    ) {
    }
}
