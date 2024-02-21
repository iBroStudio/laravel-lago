<?php

namespace IBroStudio\Lago\Sdk\Requests\Subscriptions;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllSubscriptions
 *
 * This endpoint retrieves all active subscriptions.
 */
class FindAllSubscriptions extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/subscriptions';
    }

    /**
     * @param  null|int  $page  Page number.
     * @param  null|string  $externalCustomerId  The customer external unique identifier (provided by your own application)
     * @param  null|string  $planCode  The unique code representing the plan to be attached to the customer. This code must correspond to the code property of one of the active plans.
     * @param  null|array  $status  If the field is not defined, Lago will return only `active` subscriptions. However, if you wish to fetch subscriptions by different status you can define them in a status[] query param. Available filter values: `pending`, `canceled`, `terminated`, `active`.
     */
    public function __construct(
        protected ?int $page = null,
        protected ?string $externalCustomerId = null,
        protected ?string $planCode = null,
        protected ?array $status = null,
    ) {
    }

    public function defaultQuery(): array
    {
        return array_filter([
            'page' => $this->page,
            'external_customer_id' => $this->externalCustomerId,
            'plan_code' => $this->planCode,
            'status' => $this->status,
        ]);
    }
}
