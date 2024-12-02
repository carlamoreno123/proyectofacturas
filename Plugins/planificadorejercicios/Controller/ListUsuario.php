<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class Usuario extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'usuarios';
        $page['menu'] = 'Appejercicios';
        $page['icon'] = 'fas fa-search';
        return $page;
    }

    protected function createViews()
    {
        // creamos cada pestaña en una función separada, por comodidad
        $this->addView('ListUsuario', 'Usuario');
    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListUsuario':
                
                $view->loadData();
                break;
            }
}
}