<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
  
  public function getLogout() 
  {
    Auth::logout();
    return redirect()->route('welcome');
  }

  public function getWelcomePage() {
    return view('welcome');
  }
}