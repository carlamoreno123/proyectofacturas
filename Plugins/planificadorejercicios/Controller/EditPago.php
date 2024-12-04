<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditPago extends EditController
{
    public function getModelClassName(): string
    {
        return 'Pago';
    }
}