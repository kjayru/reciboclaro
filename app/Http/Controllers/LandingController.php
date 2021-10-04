<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Slider;
use App\Configuration;
class LandingController extends Controller
{
    public function show()
    {
        $configure = Configuration::first();
        
        $page = Page::findBySlug('inicio');
        $slider = Slider::where('name','Slider Home')->with('slideritems')->get();
     
        return view('landing.index',['page'=>$page,'slider'=>$slider,'configure'=>$configure]);
    }

    public function lineanueva(){
        $configure = Configuration::first();
        
        $page = Page::findBySlug('inicio');
       

        return view('landing.lineanueva',['page'=>$page,'configure'=>$configure]);
    }
}
