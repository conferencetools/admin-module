<?php

namespace ConferenceTools\Admin\Controller;

use ConferenceTools\Attendance\Controller\AppController;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}