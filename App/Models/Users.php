<?php

namespace App\Models;

use MF\Model\Model;
class Users extends Model
{

    public function getAll()
    {
        $sql = "SELECT * FROM users";
        
        return $this->db->query($sql)->fetchAll();
    }
}
