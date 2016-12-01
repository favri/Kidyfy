<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class PostsController extends Controller
{
    public function store(Request $request)
    {
       Post::create([
            'post_text' => $request['post_text'],
            'user_id' => Auth::user()->id,
            'group_id' => $request['group_id'],
            'visitor' => $request->ip,

        ]);
        $posts = Post::orderBy('created_at', 'desc')->get();

        return view('home', compact('posts'));
    }

    public function AllPosts(Auth $user, Post $post)
    {
        $posts = $post->where("user_id", "=", $user->id)->get();
        return view('home' , compact('posts'));
    }

    public function show($id)
    {
      $posts = Post::find($id);
      return view('home', compact('posts'));
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

        return redirect('home');
      }

      public function imagespost(Request $request, $id)
      {
        //guardo el archivo
        $post = Post::find($id);
        $file = $request->file('file');
        $ext = $file->extension();
        $name = uniqid();
        $file->storeAs('imagespost/post-'.$post->id, $name.'.'.$ext);

        //persiste en base
        $imagepost = new \App\ImagePost(['src' => 'imagespost/post-'.$post->id.'/'.$name.'.'.$ext]);
        $post->imagespost()->save($imagepost);
      }

}
