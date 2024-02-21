<?php

namespace IBroStudio\Lago\Sdk\Requests\Coupons;

use Saloon\Enums\Method;
use Saloon\Http\Request;

/**
 * findAllCoupons
 *
 * This endpoint is used to list all existing coupons.
 */
class FindAllCoupons extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/coupons';
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
