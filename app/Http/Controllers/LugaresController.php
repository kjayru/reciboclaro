<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;
use App\Slider;
use App\SliderItems;
use App\Configuration;

class LugaresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configure = Configuration::first();
        $lugares = Category::Where('parent_id',2)->with('posts')->get();
        
        return view('landing/lugares',['lugares'=>$lugares,'configure'=>$configure]);
    }

   
    public function show($slug)
    {
        $configure = Configuration::first();
        $post = Post::where('slug',$slug)->first();

        $sliders = Slider::where('slug',$slug)->with('slideritems')->get(); 
        return view('landing/bancos',['post'=>$post,'sliders'=>$sliders,'configure'=>$configure]);
      
    }

   
    public function bancos($slug)
    {
        $configure = Configuration::first();
        $post = Post::where('slug',$slug)->first();
       
        $sliders = Slider::where('slug',$slug)->with('slideritems')->get();

        //dd($post);

        if($slug == 'puntos-autorizados'){
            $post = Category::Where('id',7)->with('posts')->get();
            //dd($post);
            return view('landing/puntos',['post'=>$post,'configure'=>$configure]);
          }else{
           return view('landing/cajeros',['post'=>$post,'sliders'=>$sliders,'configure'=>$configure]);
          }
    }

    public function puntos()
    {
        $post = Post::where('slug','puntos-autorizados')->first();
        return view('landing/puntos',['post'=>$post,'configure'=>$configure]);

    }

    public function empresas()
    {
        $configure = Configuration::first();
        return view('landing/lugares-de-pago-empresa');
    }

    public function statibcp()
    {
        return view('landing/lugares-bcp');
    }


    public function empresasdebitoscotiabank()
    {
        return view('landing/empresasdebitoscotiabank');
    }


    public function empresasdebitobcp()
    {
        return view('landing/empresasdebitobcp');
    }
    

    public function lugaresempresas()
    {
        return view('landing/lugaresempresas');
    }

    public function digital()
    {
        return view('landing/digital');
    }

    public function debito()
    {
        return view('landing/debito');
    }

    public function debitonew()
    {
        return view('landing/debitonew');
    }

    public function digitalempresa()
    {
        return view('landing/digitalempresa');
    }

    public function debitoempresa()
    {
        return view('landing/debitoempresa');
    }
}
