<?php

use Phalcon\Mvc\Controller;
use Phalcon\Http\Request;
use Phalcon\Http\Response;
use Phalcon\Mvc\Model\Query;
use Phalcon\Html\Helper\Button;

class IndexController extends Controller
{
    /**
     * Welcome and user list
     */
    public function indexAction() {
        $this->view->tasks = NewTable::find();
    }
}