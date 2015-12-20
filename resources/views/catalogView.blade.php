@extends('layouts.master')

@section('title')
AGTEL
@stop

@section('content')

 <h3>Catalog</h3>
 <?php


 if(!$products->isEmpty()) {

    // Output the products
    foreach($products as $product) {
        echo $product->title.'<br>';
        echo $product->description .'<br>';
        ?>
        {!! Html::image($product->link_to_image) !!}
        {!! Html::link('/editProduct/' . $product->id , 'Edit') !!}
         <?php
        echo '<br>';


    }
}
else {
    echo 'No products found';
}
?>
@stop
