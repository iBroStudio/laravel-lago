<?php

namespace IBroStudio\Lago\Sdk\Requests\Invoices;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * voidInvoice
 *
 * This endpoint is used for voiding an invoice. You can void an invoice only when it's in a
 * `finalized` status, and the payment status is not `succeeded`.
 */
class VoidInvoice extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return "/invoices/{$this->lagoId}/void";
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function __construct(
        protected string $lagoId,
    ) {
    }
}
