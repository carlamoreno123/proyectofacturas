<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Model;

use FacturaScripts\Core\Model\Base\ModelClass;
use FacturaScripts\Core\Model\Base\ModelTrait;

class Pago extends ModelClass
{
    use ModelTrait;

    public $idpago;
    public $idusuario;
    public $nombreyapellidos;
    public $suscripcion;
    public $coste;
    public $pagado;
  

    public static function primaryColumn(): string
    {
        return 'idpago';
    }

    public static function tableName(): string
    {
        return 'pagos';
    }
}