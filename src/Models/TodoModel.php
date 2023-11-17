<?php

namespace App\Models;

class TodoModel
{
    protected \PDO $db;

    public function __construct(\PDO $db){


        $this->db = $db;

    }

    public function getTodoList()
        {
//    $query = $this->db->prepare("INSERT INTO `todo`(`message` WHERE `id`=?");
//             $query->execute([$id]);
            $query = $this->db->prepare('SELECT * FROM `todo`');
            $query->execute();
            return $query->fetchAll();

        }

}