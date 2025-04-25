<?php

namespace App\Models;

class ClassResource extends Resource
{
    private float $score;

    public function __construct(string $name, float $score)
    {
        parent::__construct($name);
        $this->score = $score;
    }

    public function getDisplay(): string
    {
        return "Clase: {$this->name} | {$this->score}/5";
    }

    public function getNombre(): string
    {
        return $this->name;
    }

    public function getPonderacion(): float
    {
        return $this->score;
    }

    public function getTipo(): string
    {
        return 'clase';
    }
}
