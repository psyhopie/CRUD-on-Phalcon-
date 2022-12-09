<?php

use Phalcon\Mvc\Controller;

class TaskDeleteController extends Controller
{
    public function indexAction($id) {
        $this->view->user = NewTable::findFirst($id);
    }

    public function deleleteAction(){
        $id = $this->request->getPost("idnew_table");
        $user = NewTable::findFirst($id);

        $success = $user->delete(
            $this->request->getPut(),
            [
                "idnew_table",
                "task_name",
                "task_description",
            ]
        );
        if($success){
            echo "Task succesfully deleted!";
        }else{
            echo "Ne, pogodi";
        }
        set_time_limit(1);
        $this->response->redirect('/CRUD');
        $this->view->disable();

    }

}