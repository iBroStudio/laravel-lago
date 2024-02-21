<?php

namespace IBroStudio\Lago\Sdk\Concerns;

use Saloon\Traits\Body\HasJsonBody;

trait HasDefaultBodyFromDataObject
{
    use HasJsonBody;

    protected function defaultBody(): array
    {
        return $this->bodyData->toArray();
    }
}
