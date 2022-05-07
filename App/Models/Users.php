<?php

namespace App\Models;

class Users
{
    protected $db;

    public function __construct(\PDO $db)
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        
        return $this->db->query($sql)->fetchAll();
    }
}
