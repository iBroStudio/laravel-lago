<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Organizations\UpdateOrganization;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Organizations extends Resource
{
    public function updateOrganization(): Response
    {
        return $this->connector->send(new UpdateOrganization());
    }
}
