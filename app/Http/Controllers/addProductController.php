<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class addProductController extends controller {

  public function __construct() {

  }

  public function getAddProduct() {

    return view('addProductView');

  }

  public function postAddProduct(Request $request) {
      $this->validate(

      $request,
      [
            'title' => 'required|min:5',
            'description' => 'required|min:25',
            'file' => 'required|image',
          ]
      );
      $product = new \App\Product();
      $product->title = $request->title;
      $product->description = $request->description;
      $file = $request->file('file');
      $file_name = $file->getClientOriginalName();
      \Storage::disk('local')->put($file_name,  \File::get($file));



      $product->link_to_image = 'uploads/' . $file_name;
      $img = Image::make($product->link_to_image)->resize(130,60);
      $img->save();
      $product->save();

       \Session::flash('flash_message','Your Product was added!');

    return redirect('/addProduct');
  }


}
  ?>
