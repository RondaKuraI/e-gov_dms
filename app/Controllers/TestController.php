<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\TestLibrary;

class TestController extends BaseController
{
    public $tl;
    public function __construct()
    {
        $this->tl = new TestLibrary();
    }
    public function index()
    {
        $data = $this->tl->getData();
        echo "<pre>";
        print_r($data);
    }

    public function viewFilters(){
        $parser = \Config\Services::parser();
        $data = [
            'mobile' => '09123456789',
        ];
        return $parser->setData($data)->render("testview");
        // echo view('testview', $data);
        // $parser->setData($data);
        // return $parser->render("testview");
    }
}
