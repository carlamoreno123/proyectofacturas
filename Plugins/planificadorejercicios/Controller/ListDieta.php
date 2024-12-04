<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListDieta extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'dietas';
        $page['menu'] = 'Appejercicios';
        $page['icon'] = 'fa-solid fa-apple-whole';
        return $page;
    }

    protected function createViews()
    {
        
        $this->addView('ListDieta', 'dieta');
        $this->addOrderBy('ListDieta',['dias'], 'dias a hacer');
       
    }

    //poner por edades

    protected function createViewsProject(string $viewName = 'ListDieta'): void
    {
        $this->addView($viewName, 'dietas')
        ->addOrderBy(['dias'], 'dias a hacer')
        ->addSearchFields(['dias']);
           
    }
    
  
    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListDieta':
                
               
                $view->loadData();
                break;
            }
}
}