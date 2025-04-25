<?php

namespace App\Models;

class ExamResource extends Resource
{
    private string $tipo;

    public function __construct(string $name, string $tipo)
    {
        parent::__construct($name);
        $this->tipo = $tipo;
    }

    public function getDisplay(): string
    {
        return "Examen: {$this->name} | {$this->tipo}";
    }

    public function getNombre(): string
    {
        return $this->name;
    }

    public function getTipoExamen(): string
    {
        return $this->tipo;
    }

    public function getTipo(): string
    {
        return 'examen';
    }
}
