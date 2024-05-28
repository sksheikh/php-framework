<?php
namespace App\Controllers;

class DashboardController{
    
    public function index()
    {
        return view('dashboard');
    }

    public function logout()
    {
      $_SESSION = [];
      session_destroy();
      return redirect('/login');
    }
}
