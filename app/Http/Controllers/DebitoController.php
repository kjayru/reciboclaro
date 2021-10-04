<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Slider;
use App\Configuration;

class DebitoController extends Controller
{
     public function index()
    {
        $configure = Configuration::first();
        $page = Page::findBySlug('debito');
        return view('landing/debito',['page'=>$page,'configure'=>$configure]);
    }
}
