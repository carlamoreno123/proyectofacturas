<?php

namespace FacturaScripts\Plugins\planificadorejercicios\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

use FacturaScripts\Core\Tools;

class ListPlan extends ListController
{
    public function getPageData(): array
    {
        $page = parent::getPageData();
        $page['title'] = 'Planes';
        $page['menu'] = 'Appejercicios';
        $page['icon'] = 'fa-solid fa-dumbbell';
       
        return $page;
    }

    protected function createViews()
    {
        $this->createPlan();
      
    }


    protected function createPlan($viewName = 'ListPlan')
    {
        $this->addView($viewName, 'Plan', 'Planes', 'fa-solid fa-dumbbell');
        $this->addSearchFields($viewName, ['nombreyapellidos', 'partesdelcuerpo']);
        $this->addOrderBy($viewName, ['dia'], 'dia', 2);
       
      
    }

  

    protected function loadData($viewName, $view)
    {
        switch ($viewName) {
            case 'ListPlan':
           
                $view->loadData();
                break;
        }
    }
}