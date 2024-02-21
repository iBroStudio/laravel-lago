<?php

namespace IBroStudio\Lago\Sdk\Resource;

use IBroStudio\Lago\Sdk\Requests\Webhooks\FetchPublicKey;
use IBroStudio\Lago\Sdk\Resource;
use Saloon\Contracts\Response;

class Webhooks extends Resource
{
    public function fetchPublicKey(): Response
    {
        return $this->connector->send(new FetchPublicKey());
    }
}
