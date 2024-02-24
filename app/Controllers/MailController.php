<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// use PHPMailer\PHPMailer\PHPMailer;

// // Include Composer's autoloader
// require 'vendor/autoload.php';

class MailController extends BaseController
{
    public function index()
    {
        $to = 'johnronda0527@gmail.com';
        $subject = 'Account Activation';
        $message = 'Hi John,<br><br>Thanks. Your account was created successfully. Please click the link below to activate your account' . '<a href="'.base_url().'/verify" target="_blank">Activate Account</a><br><br>Thanks<br>Team';

        $email = \Config\Services::email();

        $email->setTo($to);
        $email->setFrom('yukinon@gmail.com', 'Info');
        $email->setMessage($message);
        if($email->send()){
            echo "Account Created Successfully. Please activate your account.";
        }
        else{
            $data = $email->printDebugger(['headers']);
            print_r($data);
        }
    }

    public function verify(){
        echo "Account Verified";
    }
}
