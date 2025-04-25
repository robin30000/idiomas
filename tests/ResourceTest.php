<?php

use PHPUnit\Framework\TestCase;
use App\Models\ClassResource;
use App\Models\ExamResource;

class ResourceTest extends TestCase
{
    public function testClaseCreation()
    {
        $clase = new ClassResource('Clase de prueba', 4.5);
        $this->assertEquals('Clase de prueba', $clase->getNombre());
        $this->assertEquals(4.5, $clase->getPonderacion());
        $this->assertEquals('clase', $clase->getTipo());
    }

    public function testExamenCreation()
    {
        $examen = new ExamResource('Examen de prueba', 'selección');
        $this->assertEquals('Examen de prueba', $examen->getNombre());
        $this->assertEquals('selección', $examen->getTipoExamen());
        $this->assertEquals('examen', $examen->getTipo());
    }
}
