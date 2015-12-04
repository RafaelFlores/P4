<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class blogController extends controller {

  public function __construct() {

  }

  public function getBlog() {
    return view('blogView');

  }

  public function postBlog() {
    return 'When a new Item is added to the blog';
  }


}
  ?>
