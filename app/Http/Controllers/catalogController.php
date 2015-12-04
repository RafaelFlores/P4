<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class catalogController extends controller {

  public function __construct() {

  }

  public function getIndex() {
    return view('catalogView');

  }

  public function postCatalog() {
    return 'When a new Item is added';
  }


}
  ?>
