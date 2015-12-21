<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Image;

class postController extends controller {

  public function __construct() {

  }

  public function getAddPost() {

    return view('addPostView');

  }

  public function postAddPost(Request $request) {
      $this->validate(

      $request,
      [
            'title' => 'required|min:5',
            'description' => 'required|min:25',
            'file' => 'required|image',
            //'link_to_video' => 'url',
          ]
      );
      $post = new \App\Post();
      $post->title = $request->title;
      $post->description = $request->description;
      $post->link_to_video = $request->link_to_video;
      $file = $request->file('file');
      $file_name = $file->getClientOriginalName();
      \Storage::disk('local')->put($file_name,  \File::get($file));
      $post->link_to_image = 'uploads/' . $file_name;
      $img = Image::make($post->link_to_image)->resize(560,315);
      $img->save();
      $post->save();

       \Session::flash('flash_message','Your Post was added!');

    return redirect('/addPost');
  }

  public function getEditPost($id = null) {
    $post = \App\Post::find($id);

    if(is_null($post)) {
        \Session::flash('flash_message', 'Post not found.');
        return redirect('/blog');
    }
    return view('editPostView')->with('post',$post);


  }

  public function postEditPost(Request $request) {
      $this->validate(

      $request,
      [
          'title' => 'required|min:5',
          'description' => 'required|min:25',
          'file' => 'image',
          'link_to_video' => 'url',

          ]
      );

      $post = \App\Post::find($request->id);
      $post->title = $request->title;
      $post->description = $request->description;
      $post->link_to_video = $request->link_to_video;

      if($request->file == null) {

      }
      else {

          $file = $request->file('file');
          $file_name = $file->getClientOriginalName();
          \Storage::disk('local')->put($file_name,  \File::get($file));
          $post->link_to_image = 'uploads/' . $file_name;
          $img = Image::make($post->link_to_image)->resize(130,60);
          $img->save();
      }

      $post->save();
      \Session::flash('flash_message','Your Post Is Updated!');
      return redirect('/blog');
  }

  public function getDeletePost($id = null) {
    $post = \App\Post::find($id);

    if(is_null($post)) {
        \Session::flash('flash_message', 'Post not found.');
        return redirect('/blog');
    }
    return view('deletePostView')->with('post',$post);
  }
  public function getDoDeletePost($id = null) {
      $post = \App\Post::find($id);
      if(is_null($post)) {
          \Session::flash('flash_message', 'Post not found.');
          return redirect('/blog');
      }
      $post->delete();
      \Session::flash('flash_message', $post->title .'was deleted.');
      return redirect('/blog');

  }


}
  ?>
