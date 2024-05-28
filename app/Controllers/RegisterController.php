<?php
namespace App\Controllers;

use App\Models\User;

class RegisterController{

    public function index()
    {
        return view('auth.register');
    }

    public function register()
    {
        
        $successMessage = '';
        $errorMessage = '';
        // print_r($_POST);
        $user = new User;
        $user->name = $_POST['name'];
        $user->email = $_POST['email'];
        $user->password = $_POST['password'];
    
        if($user->register()){
          return $successMessage =  "registered successfully";
        }else{
           return $errorMessage = "unable to register";
        }
    }
}
