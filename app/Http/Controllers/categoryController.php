<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    function getData(Request $request){

        
         $data = DB::table('categories')
         ->join('posts', 'categories.id','=','posts.category_id')
         
         ->select('posts.*','categories.name')
         ->where('categories.id','=',$request->id)
         ->get();

         
        //$data = DB::table('posts')->select('category_id')->get();

        dd($data->toArray());

    }

    function latestPost(Request $request){

        //getting the latest post Q:11
        $data = DB::table('categories')
        ->join('posts', 'categories.id','=','posts.category_id')
        ->where('categories.id','=',$request->id)
        ->max('posts.updated_at');
        
       dd($data);
    }
    
}
