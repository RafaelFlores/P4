@extends('layouts.master')

@section('title')
AGTEL
@stop

@section('content')

 <h3>Blog</h3>
 <?php


 if(!$posts->isEmpty()) {

    // Output the products
    foreach($posts as $post) {
        echo '<p>';
        echo $post->title.'<br>';
        echo $post->description .'<br>';
        if ($post->link_to_video != null) {
            echo '<p>';
            echo '<iframe width="560" height="315" src='.'"'. $post->link_to_video.'"' .'frameborder="0" allowfullscreen></iframe>';
            echo '<br>';
            echo '</p>';
        }

        ?>
        {!! Html::image($post->link_to_image, 'alt', array('width' => 560, 'height' => 315)) !!}
        @if(Auth::check())
        {!! Html::link('/editPost/' . $post->id , 'Edit') !!}
        {!! Html::link('/deletePost/' . $post->id , 'Delete') !!}
        @endif
         <?php
        echo '<br>';
        echo '</p>';

    }
 }
 else {
    echo 'No posts found';
 }
 ?>
@stop
