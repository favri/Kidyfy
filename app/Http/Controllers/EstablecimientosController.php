<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Group;
use Auth;

class EstablecimientosController extends Controller
{
  public function view()
  {
      // $user = User::find($id);
      $posts = Post::where('group_id', '3')->orderBy('created_at', 'desc')->visibles()->get();
      return view('groupviews.establecimientos', compact('user','posts'));
  }

  public function store(Request $request)
  {
    $post = Post::create([
        'post_text' => $request['post_text'],
        'user_id' => Auth::user()->id,
        'group_id' => $request['group_id'],
    ]);

    $posts = Post::where('group_id', '3')->orderBy('created_at', 'desc')->get();

    if ($request->postfile) {
      //guardo el archivo

      foreach ($request->postfile as $key => $postfile) {
        $file = $postfile;
        $ext = $file->extension();
        $name = uniqid();
        $file->storeAs('posts/post-'.$post->id, $name.'.'.$ext);

        //persiste en base
        $imagespost = new \App\ImagesPost(['src' => 'posts/post-'.$post->id.'/'.$name.'.'.$ext]);
        $post->imagespost()->save($imagespost);
        $post->imagespost($postfile,$request->post_id);
      }
    }

    return view('groupviews.establecimientos', compact('posts'));

  }

  public function AllPosts(Auth $user, Post $post)
  {
      $posts = $post->where("user_id", "=", $user->id)->get();
      return view('groupviews.establecimientos' , compact('posts'));
  }

  public function show($id)
  {
    $posts = Post::find($id);
    return view('groupviews.establecimientos', compact('posts'));
  }

  public function destroy(Post $post)
  {
    foreach ($post->imagespost as $imagepost) {
        //borrar los archivo imagen
        \Storage::delete($imagepost->src);
        //borrar las filas imagen
        $imagepost->delete();
      }
      //pasar el product a inactivo
      $post->visible = 0;
      $post->save();

      return redirect('groupviews.establecimientos');
    }

    public function imagespost(Request $request, $id)
    {
      //guardo el archivo
      $post = Post::find($id);
      $file = $request->file('file');
      $ext = $file->extension();
      $name = uniqid();
      $file->storeAs('posts/post-'.$post->id, $name.'.'.$ext);

      //persiste en base
      $imagespost = new \App\ImagesPost(['src' => 'posts/post-'.$post->id.'/'.$name.'.'.$ext]);
      $post->imagespost()->save($imagespost);
    }
}
