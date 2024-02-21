<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('admin_panel/index');
    }

    public function static()
    {
        return view('admin_panel/static');
    }
}
