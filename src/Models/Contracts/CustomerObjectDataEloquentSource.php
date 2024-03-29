<?php

namespace IBroStudio\Lago\Models\Contracts;

use MichaelRubel\ValueObjects\Collection\Complex\Email;
use MichaelRubel\ValueObjects\Collection\Complex\FullName;

interface CustomerObjectDataEloquentSource
{
    public function getId(): string;

    public function getName(): FullName;

    public function getEmail(): Email;
}
