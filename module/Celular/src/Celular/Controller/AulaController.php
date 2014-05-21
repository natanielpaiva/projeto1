<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Celular\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class AulaController extends AbstractActionController
{
    public function indexAction()
    {
        var_dump($this->getEvent()->getRouteMatch()->getParam('parametroQueEuQuiser'));
        echo "<br>";
        var_dump($this->getEvent()->getRouteMatch()->getParam('amigo'));
       // return new ViewModel();
    }
    public function desabilitarLayoutAction()
    {
        echo "burro";
    	$result = new ViewModel();
        $result->setTerminal(true);
    
        return $result;
    }
    
    public function semTemplateAction()
    {
        var_dump($this->getEvent()->getRouteMatch()->getParam('parametroQueEuQuiser'));
        echo "<br>";
        var_dump($this->getEvent()->getRouteMatch()->getParam('amigo'));
        return '';
    }
}
