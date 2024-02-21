<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\CreditNotes\CreateCreditNote;
use IBroStudio\Lago\Sdk\Requests\CreditNotes\DownloadCreditNote;
use IBroStudio\Lago\Sdk\Requests\CreditNotes\EstimateCreditNote;
use IBroStudio\Lago\Sdk\Requests\CreditNotes\FindAllCreditNotes;
use IBroStudio\Lago\Sdk\Requests\CreditNotes\FindCreditNote;
use IBroStudio\Lago\Sdk\Requests\CreditNotes\UpdateCreditNote;
use IBroStudio\Lago\Sdk\Requests\CreditNotes\VoidCreditNote;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class CreditNotes extends Resource
{
    /**
     * @param  int  $page  Page number.
     * @param  string  $externalCustomerId  Unique identifier assigned to the customer in your application.
     */
    public function findAllCreditNotes(?int $page, ?string $externalCustomerId): Response
    {
        return $this->connector->send(new FindAllCreditNotes($page, $externalCustomerId));
    }

    public function createCreditNote(): Response
    {
        return $this->connector->send(new CreateCreditNote());
    }

    /**
     * @param  string  $lagoId  The credit note unique identifier, created by Lago.
     */
    public function findCreditNote(string $lagoId): Response
    {
        return $this->connector->send(new FindCreditNote($lagoId));
    }

    /**
     * @param  string  $lagoId  The credit note unique identifier, created by Lago.
     */
    public function updateCreditNote(string $lagoId): Response
    {
        return $this->connector->send(new UpdateCreditNote($lagoId));
    }

    /**
     * @param  string  $lagoId  The credit note unique identifier, created by Lago.
     */
    public function downloadCreditNote(string $lagoId): Response
    {
        return $this->connector->send(new DownloadCreditNote($lagoId));
    }

    public function estimateCreditNote(): Response
    {
        return $this->connector->send(new EstimateCreditNote());
    }

    /**
     * @param  string  $lagoId  The credit note unique identifier, created by Lago.
     */
    public function voidCreditNote(string $lagoId): Response
    {
        return $this->connector->send(new VoidCreditNote($lagoId));
    }
}
