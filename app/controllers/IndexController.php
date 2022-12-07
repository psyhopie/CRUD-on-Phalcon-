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
        $this->view->users = NewTable::find();
    }
    public function deleteAction($id) {
        $delete = new Query();
        $action = $delete->execute((["DELETE FROM CRUD\Models\NewTable WHERE idnew_table = :current_id:", 'bind' => ['current_id' => $id]]));
    }
}