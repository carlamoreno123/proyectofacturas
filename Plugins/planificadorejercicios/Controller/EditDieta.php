<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditDieta extends EditController
{
    public function getModelClassName(): string
    {
        return 'Dieta';
    }
}