<?php

namespace IBroStudio\Lago\Sdk\Requests\Invoices;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * refreshInvoice
 *
 * This endpoint is used for refreshing a draft invoice.
 */
class RefreshInvoice extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/invoices/{$this->lagoId}/refresh";
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function __construct(
        protected string $lagoId,
    ) {
    }
}
