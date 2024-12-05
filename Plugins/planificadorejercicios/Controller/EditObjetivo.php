<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditObjetivo extends EditController
{
    public function getModelClassName(): string
    {
        return 'Objetivo';
    }
}