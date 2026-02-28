<?php

namespace App\Services;

class TaskService {
    private $tasks;

    public function add($name){
        $this->tasks[] = $name;
    }

    public function getAllTasks(){
        return $this->tasks;
    }
}