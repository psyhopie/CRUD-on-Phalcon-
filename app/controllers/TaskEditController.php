<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model;

class TaskEditController extends Controller
{
    public function indexAction($id) {
        $this->view->user = NewTable::findFirst($id);
    }

    public function ediditAction(){
        $id = $this->request->getPost("idnew_table");
        $user = NewTable::findFirst($id);

        $success = $user->save(
            $this->request->getPut(),
            [
                "idnew_table",
                "task_name",
                "task_description",
            ]
        );
        if($success){
            echo "Task succesfully updated!";
        }else{
            echo "Ne, pogodi";
        }
        set_time_limit(1);
        $this->response->redirect();
        $this->view->disable();

    }

}