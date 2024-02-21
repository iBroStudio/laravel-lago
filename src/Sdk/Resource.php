<?php

namespace IBroStudio\Lago\Sdk;

use Saloon\Http\Connector;

class Resource
{
    public function __construct(
        protected Connector $connector,
    ) {
    }
}
