<?php

namespace IBroStudio\Lago\Sdk\Requests\Customers;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllCustomers
 *
 * This endpoint retrieves all existing customers.
 */
class FindAllCustomers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/customers';
    }

    /**
     * @param  null|int  $page  Page number.
     */
    public function __construct(
        protected ?int $page = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter(['page' => $this->page]);
    }
}
