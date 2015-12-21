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

  public function postRegister(Request $request) {
      $this->validate(

      $request,
      [
            'first_name' => 'required|min:3',
            'last_name1' => 'required|min:3',
            'last_name2' => 'required|min:3',
            'email' => 'required|email',
            'phone_number1' => 'required',
            'phone_number2' => 'required',
          ]
      );

      $customer = new \App\Customer();
      $customer->first_name = $request->first_name;
      $customer->last_name1 = $request->last_name1;
      $customer->last_name2 = $request->last_name2;
      $customer->email = $request->email;
      $customer->phone_number1 = $request->phone_number1;
      $customer->phone_number2 = $request->phone_number2;
      $customer->save();

      \Session::flash('flash_message','Customer' . $customer->first_name . ' ' . $customer->last_name1 . ' ' . 'Registered');
      return redirect('/');


  }


}
  ?>
