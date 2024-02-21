<?php

namespace IBroStudio\Lago\Sdk\Requests\CreditNotes;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

/**
 * createCreditNote
 *
 * This endpoint creates a new credit note.
 */
class CreateCreditNote extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function resolveEndpoint(): string
    {
        return '/credit_notes';
    }

    public function __construct()
    {
    }
}
