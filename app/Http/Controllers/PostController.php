<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class PostController extends Controller
{
    public function getIndex ()
    {   $posts =Posts::all();
        return view('posts.index',['posts'=>$posts]);
    }

    public function create ()
    {
        return view('posts.create');
    }
    public function createPost(Request $request)
    {
        $this->validate($request,[
            'postName'=> 'required|min:4',
            'description'=> 'required|min:10'
        ]);
        if(Input::hasFile('image')){
            $image =Input::file('image');
            $image->move('images',$image->getClientOriginalName());
            $imagePath1 ='/images/'.$image->getClientOriginalName();
        }else{
            $imagePath1='/images/default.jpg';
        }
        $post =new Posts([
            'postName'=>$request->input('postName'),
            'description'=>$request->input('description'),
            'imagePath'=>$imagePath1
        ]);
        $post->save();
        echo "Post Successfully added";
    }
}
