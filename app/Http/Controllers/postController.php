<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Http\Request;

class postController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request...
 
        $post = new Post;
 
        $post->postid = 1;
        $post->category_id=54;
        $post->title = 'New post';
        $post->slug = 'new-post';
        $post->excerpt = 'lorem ipsum';
        $post->description = 'New post description';
        $post->	ispublished =1 ;
        $post->minread =10 ;
 
        $post->save();
 
        //return redirect('/flights');
    }

    //use SoftDeletes;
    function deletePost($id){

            $data = Post::where('postid', '=', $id)->delete();
             return $data;



    }

    function getsoftdelete(){

     $data = Post::onlyTrashed()->get();
     dd($data->toArray());
     

    }

    function getAllData(){

        $data = Post::all();
        return view('Post',['post'=>$data]);


    }
}
