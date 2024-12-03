<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListUsuario extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'usuarios';
        $page['menu'] = 'Appejercicios';
        $page['icon'] = 'fa-solid fa-user';
        return $page;
    }

    protected function createViews()
    {
        // creamos cada pestaña en una función separada, por comodidad
        $this->addView('ListUsuario', 'usuario');
    }

    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListUsuario':
                
                $view->loadData();
                break;
            }
}
}