<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;
use App\Slider;
use App\Configuration;

class ReciboEmailController extends Controller
{
     public function index()
    {
        $configure = Configuration::first();
        $page = Page::findBySlug('recibo-por-email');
        return view('landing/reciboEmail',['page'=>$page,'configure'=>$configure]);
    }
}
