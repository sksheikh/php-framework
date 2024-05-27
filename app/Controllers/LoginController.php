<?php
namespace App\Controllers;

use App\Models\User;

class LoginController{
    public function index()
    {
        require('pages/login.php');
    }

    public function login()
    {
        $user = new User;
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
    
        if($user->login()){
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;
            $_SESSION['user_email'] = $user->email;
            // echo "ok";
            redirect('dashboard');
        }else{
            echo "unable to login";
        }
        
        
    }
}
