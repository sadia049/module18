<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $table = 'categories';
    //protected $primaryKey = 'id';

    public function post():HasMany{
       
        return $this->hasMany(Post::class,"category_id");
    }

    function latestPost(Request $request){

        //getting the latest post Q:11
        $data = DB::table('posts')
       // ->join('posts', 'categories.id','=','posts.category_id')
        ->select('posts.*')
        ->where('posts.category_id','=',$request->id)
        ->latest('updated_at')
        ->first();
        
        
       dd($data);
    }
}
