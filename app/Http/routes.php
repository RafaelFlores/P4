<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'catalogController@getHome');

Route::get('/catalog', 'catalogController@getIndex');

Route::post('/catalog', 'catalogController@postCatalog');

Route::get('/blog', 'blogController@getBlog');

Route::post('/blog', 'blogController@postBlog');

Route::get('/contact', 'contactController@getContact');

Route::post('/contact', 'contactController@postContact');

Route::get('/register', 'registerController@getRegister');

Route::post('/register', 'registerController@postRegister');

Route::get('/customers', 'customerController@getCustomers');

# Show login form
Route::get('/login', 'Auth\AuthController@getLogin');

# Process login form
Route::post('/login', 'Auth\AuthController@postLogin');

# Process logout


Route::group(['middleware' => 'auth'], function () {

    Route::get('/addProduct', 'productController@getAddProduct');

    Route::post('/addProduct', 'productController@postAddProduct');

    Route::get('/editProduct/{id?}', 'productController@getEditProduct');

    Route::post('/editProduct/{id?}', 'productController@postEditProduct');

    Route::get('/deleteProduct/{id?}', 'productController@getDeleteProduct');

    Route::get('/doDeleteProduct/{id?}', 'productController@getDoDeleteProduct');

    Route::get('/addPost', 'postController@getAddPost');

    Route::post('/addPost', 'postController@postAddPost');

    Route::get('/editPost/{id?}', 'postController@getEditPost');

    Route::post('/editPost/{id?}', 'postController@postEditPost');

    Route::get('/deletePost/{id?}', 'postController@getDeletePost');

    Route::get('/doDeletePost/{id?}', 'postController@getDoDeletePost');

    Route::get('/logout', 'Auth\AuthController@getLogout');

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});
