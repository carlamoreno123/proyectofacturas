<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditUsuario extends EditController
{
    public function getModelClassName(): string
    {
        return 'Usuario';
    }
}