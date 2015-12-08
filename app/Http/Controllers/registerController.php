<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class registerController extends controller {

  public function __construct() {

  }

  public function getRegister() {
    return view('registerView');

  }

  public function postRegister() {
    return 'Data to the data base to login';
  }


}
  ?>
