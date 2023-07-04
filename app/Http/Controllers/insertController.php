<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Post;

class insertController extends Controller
{
    public function insertData(){

        $insert  = DB::table('categories')->insert([
          ['id' => '051', 'name' => 'Sports'],
          ['id' => '052', 'name' => 'Crime'],
          ['id' => '053', 'name' => 'Entertainment'],
          ['id' => '054', 'name' => 'Economics']
        ]


        );

    }

    public function insertPost(){
          $insert = DB::table('posts')->insert([

            ['postid' => 121 , 'title' => 'Learning LARAVEL Query Builder','excerpt'=>'Laravel10', 'slug'=>'Hellow LARAVEL Query Builder','summary'=>'Learning LARAVEL Query Builder','ispublished'=>0,'description'=>'Laravel10','minread'=>2,'category_id'=>51,'created_at'=>'2023-07-02 01:46:36'],
            ['postid' => 122 , 'title' => 'Learning LARAVEL Query Builder','excerpt'=>'Laravel10', 'slug'=>'Hellow PHP Query Builder','summary'=>'Learning LARAVEL Query Builder','ispublished'=>0,'description'=>'Laravel10','minread'=>2,'category_id'=>51,'created_at'=>'2023-07-02 01:46:36'],

            // ['postid' => 123 , 'title' => 'Learning LARAVEL Query Builder','excerpt'=>'Laravel10', 'slug'=>'Hellow C++ Query Builder','summary'=>'Learning LARAVEL Query Builder','ispublished'=>0,'description'=>'Laravel10','minread'=>2,'category_id'=>51,'created_at'=>'2023-07-02 01:46:36'],
            // ['postid' => 124 , 'title' => 'Learning LARAVEL Query Builder','excerpt'=>'Laravel10', 'slug'=>'Hellow  Query Builder','summary'=>'Learning LARAVEL Query Builder','ispublished'=>0,'description'=>'Laravel10','minread'=>2,'category_id'=>51,'created_at'=>'2023-07-02 01:46:36'],


            // ['postid' => 125 , 'title' => 'Learning LARAVEL Query Builder','excerpt'=>'Laravel10', 'slug'=>'Hellow there Query Builder','summary'=>'Learning LARAVEL Query Builder','ispublished'=>0,'description'=>'Laravel10','minread'=>2,'category_id'=>52,'created_at'=>'2023-07-02 01:46:36'],
            // ['postid' => 126 , 'title' => 'Learning LARAVEL Query Builder','excerpt'=>'Laravel10', 'slug'=>'Hellow World','summary'=>'Learning LARAVEL Query Builder','ispublished'=>0,'description'=>'Laravel10','minread'=>2,'category_id'=>52,'created_at'=>'2023-07-02 01:46:36'],

            // ['postid' => 127 , 'title' => 'Learning LARAVEL Query Builder','excerpt'=>'Laravel10', 'slug'=>'Hellow JAVASCRIPT','summary'=>'Learning LARAVEL Query Builder','ispublished'=>0,'description'=>'Laravel10','minread'=>2,'category_id'=>53,'created_at'=>'2023-07-02 01:46:36'],
            // ['postid' => 128 , 'title' => 'Learning LARAVEL Query Builder','excerpt'=>'Laravel10', 'slug'=>'Hellow C++','summary'=>'Learning LARAVEL Query Builder','ispublished'=>0,'description'=>'Laravel10','minread'=>2,'category_id'=>53,'created_at'=>'2023-07-02 01:46:36']


          ]);

          return $insert;







    }


    public function getPost(){
        //$data = DB::table('posts')->get();
        $data = Post::all();
         dd($data);
    }
}
