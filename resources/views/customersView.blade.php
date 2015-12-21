@extends('layouts.master')

@section('title')
AGTEL
@stop

@section('content')

<h3>Registered Customers</h3>
<?php


if(!$customers->isEmpty()) {

    // Output the customers
    foreach($customers as $customer) {
        echo '<p>';
        echo $customer->first_name .' ' . $customer->last_name1  .' ' . $customer->last_name2 .'<br>';
        echo $customer->email . '<br>';
        echo $customer->phone_number1 . '<br>';
        echo $customer->phone_number2 . '<br>';
        echo '</p>';
    }
}
else {
    echo 'No customers found';
}
?>
@stop
