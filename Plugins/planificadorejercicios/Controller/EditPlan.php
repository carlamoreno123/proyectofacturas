<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditPlan extends EditController
{
    public function getModelClassName(): string
    {
        return 'Plan';
    }
}