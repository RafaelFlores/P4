@extends('layouts.master')

@section('title')
AGTEL - catalog
@stop

@section('content')



    <!-- Intro -->

        <div class="inner">
            <h3>Catalog</h3>
            <p>In this section you can find all our products.</p>
            <ul class="actions">
            </ul>
        </div>


        <?php


        if(!$products->isEmpty()) {

            // Output the products
            foreach($products as $product) {
                echo '<p><h1>'. $product->title. '</h1><br>';
                echo $product->description .'<br>';
                ?>
                {!! Html::image($product->link_to_image) !!}
                @if(Auth::check())
                {!! Html::link('/editProduct/' . $product->id , 'Edit') !!}
                {!! Html::link('/deleteProduct/' . $product->id , 'Delete') !!}
                @endif
                <?php
                echo '<br></p>';


            }
        }
        else {
            echo 'No products found';
        }
        ?>
    </section>


@stop
