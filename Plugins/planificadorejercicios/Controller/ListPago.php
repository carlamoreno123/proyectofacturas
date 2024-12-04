<?php
namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListPago extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'pagos';
        $page['menu'] = 'Appejercicios';
        $page['icon'] = 'fa-solid fa-credit-card';
        return $page;
    }

    protected function createViews()
    {
        
        $this->addView('ListPago', 'pago');
       
    }

    //poner por edades

    protected function createViewsProject(string $viewName = 'ListPago'): void
    {
        $this->addView($viewName, 'pagos');
           
    }
    
  
    protected function loadData($viewName, $view) {
        switch ($viewName) {
            case 'ListPago':
                
               
                $view->loadData();
                break;
            }
}
}