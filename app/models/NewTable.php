<?php

use Phalcon\Mvc\Model;

class NewTable extends Model
{
    public $idnew_table;
    public $task_name;
    public $task_description;

    public static function findFirst($parameters = null) {
        return parent::findFirst($parameters);
    }
}