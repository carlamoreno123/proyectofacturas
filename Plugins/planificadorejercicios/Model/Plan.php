<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Plan extends ModelClass{

    use ModelTrait;

    public $idplan;
    public $idusuario;
    public $nombreyapellidos;
    public $partedelcuerpo; 
    public $dia;
   

    
    public static function primaryColumn(): string
    {
        return 'idplan';

    }
    public static function tableName(): string
    {
        return 'planes';

    }

}