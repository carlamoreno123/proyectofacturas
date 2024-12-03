<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Usuario extends ModelClass
{
    use ModelTrait;

    public $idusuario;
    public $nombreyapellidos;
    public $DNI;
    public $edad;
    public $genero;
    public $peso;
    public $altura;

    public static function primaryColumn(): string
    {
        return 'idusuario';
    }

    public static function tableName(): string
    {
        return 'usuarios';
    }
}