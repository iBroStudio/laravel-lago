<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Taxes\CreateTax;
use IBroStudio\Lago\Sdk\Requests\Taxes\DestroyTax;
use IBroStudio\Lago\Sdk\Requests\Taxes\FindAllTaxes;
use IBroStudio\Lago\Sdk\Requests\Taxes\FindTax;
use IBroStudio\Lago\Sdk\Requests\Taxes\UpdateTax;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Taxes extends Resource
{
    /**
     * @param  int  $page  Page number.
     */
    public function findAllTaxes(?int $page): Response
    {
        return $this->connector->send(new FindAllTaxes($page));
    }

    public function createTax(): Response
    {
        return $this->connector->send(new CreateTax());
    }

    /**
     * @param  string  $code  The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes.
     */
    public function findTax(string $code): Response
    {
        return $this->connector->send(new FindTax($code));
    }

    /**
     * @param  string  $code  The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes.
     */
    public function updateTax(string $code): Response
    {
        return $this->connector->send(new UpdateTax($code));
    }

    /**
     * @param  string  $code  The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes.
     */
    public function destroyTax(string $code): Response
    {
        return $this->connector->send(new DestroyTax($code));
    }
}
