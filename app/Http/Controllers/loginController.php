<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class loginController extends controller {

  public function __construct() {

  }

  public function getLogin() {
    return view('loginView');

  }

  public function postLogin() {
    return 'Data to the data base to login';
  }


}
  ?>
