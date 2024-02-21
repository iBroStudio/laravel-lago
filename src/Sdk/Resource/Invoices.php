<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Invoices\CreateInvoice;
use IBroStudio\Lago\Sdk\Requests\Invoices\DownloadInvoice;
use IBroStudio\Lago\Sdk\Requests\Invoices\FinalizeInvoice;
use IBroStudio\Lago\Sdk\Requests\Invoices\FindAllInvoices;
use IBroStudio\Lago\Sdk\Requests\Invoices\FindInvoice;
use IBroStudio\Lago\Sdk\Requests\Invoices\RefreshInvoice;
use IBroStudio\Lago\Sdk\Requests\Invoices\RetryPayment;
use IBroStudio\Lago\Sdk\Requests\Invoices\UpdateInvoice;
use IBroStudio\Lago\Sdk\Requests\Invoices\VoidInvoice;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Invoices extends Resource
{
    /**
     * @param  int  $page  Page number.
     * @param  string  $externalCustomerId  Unique identifier assigned to the customer in your application.
     * @param  string  $issuingDateFrom  Filter invoices starting from a specific date.
     * @param  string  $issuingDateTo  Filter invoices up to a specific date.
     * @param  string  $status  Filter invoices by status. Possible values are `draft` or `finalized`.
     * @param  string  $paymentStatus  Filter invoices by payment status. Possible values are `pending`, `failed` or `succeeded`.
     */
    public function findAllInvoices(
        ?int $page,
        ?string $externalCustomerId,
        ?string $issuingDateFrom,
        ?string $issuingDateTo,
        ?string $status,
        ?string $paymentStatus,
    ): Response {
        return $this->connector->send(new FindAllInvoices($page, $externalCustomerId, $issuingDateFrom, $issuingDateTo, $status, $paymentStatus));
    }

    public function createInvoice(): Response
    {
        return $this->connector->send(new CreateInvoice());
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function findInvoice(string $lagoId): Response
    {
        return $this->connector->send(new FindInvoice($lagoId));
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function updateInvoice(string $lagoId): Response
    {
        return $this->connector->send(new UpdateInvoice($lagoId));
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function downloadInvoice(string $lagoId): Response
    {
        return $this->connector->send(new DownloadInvoice($lagoId));
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function finalizeInvoice(string $lagoId): Response
    {
        return $this->connector->send(new FinalizeInvoice($lagoId));
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function refreshInvoice(string $lagoId): Response
    {
        return $this->connector->send(new RefreshInvoice($lagoId));
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function retryPayment(string $lagoId): Response
    {
        return $this->connector->send(new RetryPayment($lagoId));
    }

    /**
     * @param  string  $lagoId  Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice’s record within the Lago system.
     */
    public function voidInvoice(string $lagoId): Response
    {
        return $this->connector->send(new VoidInvoice($lagoId));
    }
}
