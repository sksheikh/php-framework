<?php 
namespace App\Middleware;

class Auth{
    public function handle(){
        if(!isset($_SESSION['user_id'])){
            return redirect('login');
            exit();
        }
    }
}
