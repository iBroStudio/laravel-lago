<?php

namespace IBroStudio\Lago\Sdk\Requests\CreditNotes;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * updateCreditNote
 *
 * This endpoint updates an existing credit note.
 */
class UpdateCreditNote extends Request
{
    protected Method $method = Method::PUT;

    public function resolveEndpoint(): string
    {
        return "/credit_notes/{$this->lagoId}";
    }

    /**
     * @param  string  $lagoId  The credit note unique identifier, created by Lago.
     */
    public function __construct(
        protected string $lagoId,
    ) {
    }
}
