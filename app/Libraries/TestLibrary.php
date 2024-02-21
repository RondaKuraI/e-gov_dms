<?php

namespace App\Libraries;
use App\Models\TestModel;

class TestLibrary{

    public $db;
    public $tm;
    public $email;

    public function __construct()
    {
        // $this->db = \Config\Database::connect();
        $this->tm = new TestModel();
        $this->email = \Config\Services::email();
    }

    public function getData(){
        // return $this->db->query('SELECT * from students')->getResultArray();
        return $this->tm->find(1);
    }
}

?>