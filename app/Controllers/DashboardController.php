<?php
namespace App\Controllers;

class DashboardController{
    
    public function index()
    {
        echo "DashboardController is here";
    }

    public function logout()
    {
      $_SESSION = [];
      session_destroy();
      require('pages/login.php');
    }
}
