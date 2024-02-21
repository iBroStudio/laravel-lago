<?php

namespace IBroStudio\Lago\Sdk\Requests\Taxes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * destroyTax
 *
 * This endpoint is used to delete a tax.
 */
class DestroyTax extends Request
{
    protected Method $method = Method::DELETE;

    public function resolveEndpoint(): string
    {
        return "/taxes/{$this->code}";
    }

    /**
     * @param  string  $code  The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes.
     */
    public function __construct(
        protected string $code,
    ) {
    }
}
