<?php

use Phalcon\Mvc\Controller;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;

class TaskCreateController extends Controller
{
    public function indexAction()
    {

    }

    public function registerAction()
    {
        $task = new NewTable();

        // Store and check for errors
        $success = $task->save(
            $this->request->getPost(),
            [
                "task_name",
                "task_description",
            ]
        );

        if ($success) {
            echo "Thanks for signing up your task!";
            set_time_limit(1);
            $this->response->redirect();
        } else {
            echo "Sorry, the following problems were generated: ";
            set_time_limit(1);
            $this->response->redirect();

            $messages = $task->getMessages();

            foreach ($messages as $message) {
                echo $message->getMessage(), "<br/>";
            }
        }

        $this->view->disable();
    }
}