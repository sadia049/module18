<?php

namespace App\Models;

//use GuzzleHttp\Psr7\Request;
use illuminate\Http\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as FacadesRequest;

class Post extends Model
{
    use HasFactory,SoftDeletes;
    //protected $table = 'posts';

    

    public function categories():BelongsTo{

        return $this->belongsTo(Category::class);

    }

    public function retrieveDatafromCategory($id ){
        $data = DB::table('posts')->where('category_id',$id)->count();
        echo $data;
        // echo "<pre>";
        // echo $data;
        // echo "<pre>";
        
     }
     function getsoftdelete(){

        $data = Post::onlyTrashed()->get();
        dd($data->toArray());
        
   
       }


    

   
}
