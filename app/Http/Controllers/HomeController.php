<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quiz;
use App\Question;
use App\Answer;
use App\CategoryPage;
use App\Invoice;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizes = Quiz::whereNull('parent_id')->orderBy('order','asc')->get();
        
        $path = "dudas-sobre-tu-facturacion";

        return view('front.dudas-facturacion',['quizes'=>$quizes,'path'=>$path]);
    }

    public function enlaces($cat){
      //dd($cat); 
         $path1 = $cat;
        $quiz = Quiz::where('slug',$cat)->first();

        $contenido = CategoryPage::where('category_id',$quiz->id)->first();
        $invoices = Invoice::where('category_id',$quiz->id)->get();
       

          return view('front.conoce',['quiz'=>$quiz,'path1'=>$contenido,'invoices'=>$invoices,'subcat'=>$contenido]);

    }

    public function subenlaces($cat,$subcat){

        //$contenido = Question::where('slug',$subcat)->first();

        $path1 = $cat;
        $quiz = Quiz::where('slug',$subcat)->first();

        $contenido = CategoryPage::where('category_id',$quiz->id)->first();
        $invoices = Invoice::where('category_id',$quiz->id)->get();
       

          return view('front.conoce',['quiz'=>$quiz,'path1'=>$contenido,'invoices'=>$invoices,'subcat'=>$contenido]);
    }

  
}
 