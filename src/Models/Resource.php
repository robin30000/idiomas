<?php
namespace App\Models;

use App\Contracts\ResourceInterface;

abstract class Resource implements ResourceInterface
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    abstract public function getDisplay(): string;
}