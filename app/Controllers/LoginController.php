<?php
namespace App\Controllers;

use App\Models\User;

class LoginController{

    public function index()
    {
        $user = new User();
        // $data = $user->fetchData('select * from users');
        $data = $user->fetchData('select * from users where id = 2');
        
        echo '<pre>';
        print_r($data);
        return view('auth.login');
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
