<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Post;
use App\Configuration;

class QuetepasoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configure = Configuration::first();
        $posts = Post::where('category_id',1)->get();
       // $content = Post::where('category_id',1)->get();
        $content = Post::where('slug','tengo-una-nueva-linea')->get();
        $ppurl = explode("/",$_SERVER['REQUEST_URI']);
       
       
        $pag= @$ppurl[2];
        if(!$pag){
            $pag = 'tengo-una-nueva-linea';
        }
       

        return view('landing.quetepaso',['posts'=>$posts,'content'=>$content,'pag'=>$pag,'configure'=>$configure]);
    }
 


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $configure = Configuration::first();
        $posts = Post::where('category_id',1)->get();
        $content = Post::where('slug',$slug)->get();

       
       
        $ppurl = explode("/",$_SERVER['REQUEST_URI']);
       
       
         $pag= $ppurl[2];
         
        return view('landing.quetepaso',['posts'=>$posts,'content'=>$content,'pag'=>$pag,'configure'=>$configure]);
    }

    
}
