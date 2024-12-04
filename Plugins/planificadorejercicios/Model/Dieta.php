<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Dieta extends ModelClass
{
    use ModelTrait;

    public $iddieta;
    public $idusuario;
    public $nombreyapellidos;
    public $dieta;
    public $dias;
   

    public static function primaryColumn(): string
    {
        return 'iddieta';
    }

    public static function tableName(): string
    {
        return 'dietas';
    }
}