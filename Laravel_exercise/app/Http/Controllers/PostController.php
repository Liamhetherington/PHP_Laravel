<?php
namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostController extends Controller 
  {

  public function getDashboard() 
    {
      $posts = Post::orderBy('views', 'desc')->orderBy('created_at', 'desc')->get();

      return view('dashboard', ['posts' => $posts]);
  }

  public function postCreatePost(Request $request) 
    {
      $this->validate($request, [
        'title' => 'required',
        'body' => 'required|max:1000'
      ]);
      $post = new Post();
      $post->body = $request['body'];
      $post->title = $request['title'];
      $message = 'There was an error';
      if ($request->user()->posts()->save($post)) {
        $message = 'Post successfully created!';
      }
      return redirect()->route('dashboard');
  }

  public function getDeletePost($post_id) 
    {
      $post = Post::where('id', $post_id)->first();
      if (Auth::user() != $post->user) {
        return redirect()->back();
      }
      $post->delete();
      return redirect()->route('dashboard');
  }

  public function postEditPost(Request $request) 
    {
      $this->validate($request, [
          'title' => 'required',
          'body' => 'required'
      ]);
      $post = Post::find($request['postId']);
      if (Auth::user() != $post->user) {
          return redirect()->back();
      }
      $post->title = $request['title'];
      $post->body = $request['body'];
      $post->update();
      return response()->json(['new_body' => $post->body, 'new_title' => $post->title], 200);    
  }

  public function views(Request $request, $id) 
    {
      $post = Post::find($id);
      Post::where('id', '=', $id)->update(['views' => $post->views + 1]);   
  }

}