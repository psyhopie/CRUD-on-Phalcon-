<?php

use Phalcon\Mvc\Controller;
use Phalcon\Mvc\Model;

class TaskEditController extends Controller
{
    public function indexAction($id) {
        $this->view->user = NewTable::findFirst($id);
    }

    public function ediditAction(){
        $id = $this->request->getPost($this->view->idnew_table);
        $user = NewTable::findFirst($id);

        $this->view->idnew_table=$user->idnew_table;
        $this->view->task_name=$user->task_name;
        $this->view->task_description=$user->task_description;
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
        $this->response->redirect('/CRUD');
//        header("refresh: 1; url = http://localhost/CRUD/");
        $this->view->disable();

    }

}