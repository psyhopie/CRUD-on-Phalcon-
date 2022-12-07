<?php

use Phalcon\Mvc\Controller;

class TaskDeleteController extends Controller
{
    public function indexAction($id) {
        $this->view->user = NewTable::findFirst($id);

        $this->view->idnew_table=$user->idnew_table;
        $this->view->task_name=$user->task_name;
        $this->view->task_description=$user->task_description;
    }

    public function deleleteAction(){
        $id = $this->request->getPost($this->view->idnew_table);
        $user = NewTable::findFirst($id);
        $success = $user->delete();
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