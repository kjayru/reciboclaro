<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Term;
use App\Glosary;
use App\Configuration;
class GlosarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $configure = Configuration::first();
        $terms = Term::with('glosaries')->get();
        //dd($terms);
        $glosario = Term::with('glosaries')->first();
        $ppurl = explode("/",$_SERVER['REQUEST_URI']);
       
         $pag = @$ppurl[2];
         if(!$pag){
             $pag = $glosario->name;
         }

        return view('landing/glosario',['terms'=>$terms,'glosario'=>$glosario,'pag'=>$pag,'configure'=>$configure]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $terms = Term::with('glosaries')->get();
        //dd($terms);
        $glosario = Term::where('name',$slug)->with('glosaries')->first();

        $ppurl = explode("/",$_SERVER['REQUEST_URI']);
       
        $pag = $ppurl[2];

        return view('landing/glosario',['terms'=>$terms,'glosario'=>$glosario,'pag'=>$pag,'configure'=>$configure]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
