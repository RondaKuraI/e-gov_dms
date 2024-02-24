<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RegisterController extends BaseController
{
    public function index()
    {
    //     $data = [];
    //     if($this->request->getMethod() == 'POST'){
    //         $rules = [
    //             'first_name' => 'required|min_length[4]|max_length[20]',
    //             'last_name' => 'required|min_length[4]|max_length[20]',
    //             'email' => 'required|valid_email|is_unique[user.email]',
    //             'password' => 'required|min_length[6]|max_length[16]',
    //             'cpassword' => 'required|matches[pass]'
    //         ];
    //         if ($this->validate($rules)) {
    //             echo 'Save Data';
    //         }
    //         else{
    //             $data['validation'] = $this->validator;
    //         }
    //     }
        return view('auth/register.php');
    }

    // public function register(){
    //     $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
    // }
}
