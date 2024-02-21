<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Models\Contracts\CustomerObjectDataEloquentSource;
use IBroStudio\Lago\Sdk\Requests\Customers\CreateCustomer;
use IBroStudio\Lago\Sdk\Requests\Customers\DestroyCustomer;
use IBroStudio\Lago\Sdk\Requests\Customers\FindAllCustomerPastUsage;
use IBroStudio\Lago\Sdk\Requests\Customers\FindAllCustomers;
use IBroStudio\Lago\Sdk\Requests\Customers\FindCustomer;
use IBroStudio\Lago\Sdk\Requests\Customers\FindCustomerCurrentUsage;
use IBroStudio\Lago\Sdk\Requests\Customers\GenerateCustomerCheckoutUrl;
use IBroStudio\Lago\Sdk\Requests\Customers\GetCustomerPortalUrl;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Http\Response;

class Customers extends Resource
{
    /**
     * @param  int  $page  Page number.
     */
    public function findAllCustomers(?int $page): Response
    {
        return $this->connector->send(new FindAllCustomers($page));
    }

    public function createFrom(CustomerObjectDataEloquentSource $source): Response
    {
        return $this->connector->send(
            new CreateCustomer(
                config('lago.data-objects.customer')::from($source)
            )
        );
    }

    /**
     * @param  string  $externalId  External ID of the existing customer
     */
    public function findCustomer(string $externalId): Response
    {
        return $this->connector->send(new FindCustomer($externalId));
    }

    /**
     * @param  string  $externalId  External ID of the existing customer
     */
    public function destroyCustomer(string $externalId): Response
    {
        return $this->connector->send(new DestroyCustomer($externalId));
    }

    /**
     * @param  string  $externalCustomerId  External ID of the existing customer
     */
    public function getCustomerPortalUrl(string $externalCustomerId): Response
    {
        return $this->connector->send(new GetCustomerPortalUrl($externalCustomerId));
    }

    /**
     * @param  string  $externalCustomerId  The customer external unique identifier (provided by your own application).
     * @param  string  $externalSubscriptionId  The unique identifier of the subscription within your application.
     */
    public function findCustomerCurrentUsage(string $externalCustomerId, string $externalSubscriptionId): Response
    {
        return $this->connector->send(new FindCustomerCurrentUsage($externalCustomerId, $externalSubscriptionId));
    }

    /**
     * @param  string  $externalCustomerId  The customer external unique identifier (provided by your own application).
     * @param  int  $page  Page number.
     * @param  string  $externalSubscriptionId  The unique identifier of the subscription within your application.
     * @param  string  $billableMetricCode  Billable metric code filter to apply to the charge usage
     * @param  int  $periodsCount  Number of past billing period to returns in the result
     */
    public function findAllCustomerPastUsage(
        string $externalCustomerId,
        ?int $page,
        string $externalSubscriptionId,
        ?string $billableMetricCode,
        ?int $periodsCount,
    ): Response {
        return $this->connector->send(new FindAllCustomerPastUsage($externalCustomerId, $page, $externalSubscriptionId, $billableMetricCode, $periodsCount));
    }

    /**
     * @param  string  $externalCustomerId  The customer external unique identifier (provided by your own application).
     */
    public function generateCustomerCheckoutUrl(string $externalCustomerId): Response
    {
        return $this->connector->send(new GenerateCustomerCheckoutUrl($externalCustomerId));
    }
}
