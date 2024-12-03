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
        
        $this->addView('ListUsuario', 'usuario');
        $this->addOrderBy('ListUsuario',['edad'], 'edad');
    
    }

    //poner por edades

    protected function createViewsProject(string $viewName = 'ListUsuario'): void
    {
        $this->addView($viewName, 'usuarios')
            ->addOrderBy(['edad'], 'edad')
            ->addSearchFields(['edad']);
    }
    
  
    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListUsuario':
                
               
                $view->loadData();
                break;
            }
}
}