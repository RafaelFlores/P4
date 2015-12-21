<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class customerController extends controller {

  public function __construct() {

  }

  public function getCustomers() {
    $customers = \App\Customer::all();
    return view('customersView')->with('customers',$customers);

  }

  public function postCatalog() {
    return 'When a new Customer is added';
  }


}
  ?>
