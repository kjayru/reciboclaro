<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
class SimuladorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configure = Configuration::first();
        
        return view('landing.simulador',['configure'=>$configure]);
    }

    
}
