<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Objetivo extends ModelClass
{
    use ModelTrait;

    public $idobjetivo;
    public $idusuario;
    public $nombreyapellidos;
    public $objetivo;
    public $dia;
    public $hecho;
  

    public static function primaryColumn(): string
    {
        return 'idobjetivo';
    }

    public static function tableName(): string
    {
        return 'objetivos';
    }
}