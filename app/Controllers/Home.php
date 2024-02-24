<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('admin_panel/index');
    }

    public function incoming()
    {
        return view('admin_panel/incoming');
    }

    public function outgoing()
    {
        return view('admin_panel/outgoing');
    }

    public function maintenance()
    {
        return view('admin_panel/maintenance');
    }

    public function reports()
    {
        return view('admin_panel/reports');
    }

    public function user_management()
    {
        return view('admin_panel/user_management');
    }

    public function my_account()
    {
        return view('admin_panel/my_account');
    }
}
