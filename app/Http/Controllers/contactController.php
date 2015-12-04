<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class contactController extends controller {

  public function __construct() {

  }

  public function getContact() {
    return view('contactView');

  }

  public function postContact() {
    return 'Send the mail';
  }


}
  ?>
