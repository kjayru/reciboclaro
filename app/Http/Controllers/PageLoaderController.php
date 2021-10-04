<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Page;
use App\CategoryPage;
use App\Position;
use App\Layer;
use App\InvoiceItem;
use App\Invoice;
use App\Configuration;

class PageLoaderController extends Controller
{
    public function index(Request $request){
          $path = $request->url();
          $categories = $request->segments();
          $countSeg   = count($categories);

          $fcategory  = null;
          $fpage      = null;

            if($countSeg>0 && $countSeg<4){
                for($i = 0; $i <= $countSeg; $i++)
                {
                    
                   
                    if($i==$countSeg){
                        //paginas de 2 nivel
                     
                        $existe = Category::where('slug',$categories[$i-1])->count();                
                        
                       
                        if($existe>0){
                            $parent = Category::where('slug',$categories[$i-1])->first();  
                            $parent_id = $parent->id;
                            $categorias = Category::where('parent_id',$parent_id)->orderby('order','asc')->get();
                           //slug for accordions
                            $slugs  = Category::where('id',10)->first();
                            $subcategorias = Category::where('parent_id',10)->orderby('order','asc')->get();
                            $pathslug = $slugs->slug;

                            if(count($categorias)>0){

                                switch($countSeg){
                                    case 1:
                                   
                                    return view('landing.dudas',['categorias'=>$categorias,'path'=>$path,'pathslug'=>$pathslug,'subcategorias'=>$subcategorias]);
                                    break;

                                    case 2:
                                    return view('landing.dudas2',['categorias'=>$categorias,'path'=>$path]);
                                    break;

                                    case 3:
                                    return view('landing.dudas3',['categorias'=>$categorias,'path'=>$path]);
                                    break;
                                }
                            
                            
                            }else{
                             
                                //vista inicial recibo
                                    @$path1 = Category::where('slug',$categories[0])->first();
                                    @$path2 = Category::where('slug',$categories[1])->first();
                                    @$path3 = Category::where('slug',$categories[2])->first();

                                switch($countSeg){
                                    case 2: 
                                        $path = $categories[0].'/'.$categories[1];
                                        
                                    break;
                                    
                                    case 3:
                                        $path = $categories[0].'/'.$categories[1].'/'.$categories[2];
                                        

                                    break;
                                }
                                
                                    $datos = CategoryPage::where('category_id',$parent_id)->first();
                                    $category_id = $datos->category_id;
                                    $configure = Configuration::first();
                            
                                    $recibo = Invoice::where('category_id',$category_id)->first();
                                    $recibos = Invoice::where('category_id',$category_id)->get();
                                    
                                    $invoices = InvoiceItem::where([['invoice_id','=',$recibo->id]])->with('positions','layers')->get();
                                    
                                    
                                    
                                   
                                    $ppurl = explode("/",$_SERVER['REQUEST_URI']);
                                        if(!empty($ppurl[4])){
                                        $pag= $ppurl[4];
                                    }else{
                                        $titulo = 'Hoja 1';
                                        $pag= $recibo->slug;
                                    }
                                    
                                   
                                    
                                    return view('landing.'.$datos->template,['elementos'=>$countSeg,'path1'=> $path1,'path2'=> $path2,'path3'=> $path3,'path'=>$path,'datos'=>$datos,'invoices'=>$invoices,'recibos'=>$recibos,'pag'=>$pag,'titulo'=>$titulo,'configure'=>$configure]);

                                    
                            }
                        }else{
                           
                            ///slug segundo nivle
                                @$path1 = Category::where('slug',$categories[0])->first();
                                @$path2 = Category::where('slug',$categories[1])->first();
                                @$path3 = Category::where('slug',$categories[2])->first();

                                $configure = Configuration::first();

                                
                                $parent = Category::where('slug',$categories[1])->first();  
                            
                                $parent_id = $parent->id;
                
                                $datos = CategoryPage::where('category_id',$parent_id)->first();
                                $category_id = $datos->category_id;


                                $slugrecibo = $categories[2];
                               
                                $recibo = Invoice::where([['slug','=',$slugrecibo],['category_id','=',$category_id]])->first();
                                
                                $recibos = Invoice::where('category_id',$category_id)->get();
                                $invoices = InvoiceItem::where('invoice_id',$recibo->id)->with('positions','layers')->get();
                        
                                $ppurl = explode("/",$_SERVER['REQUEST_URI']);
                                if(!empty($ppurl[3])){
                                    $pag= $ppurl[3];
                                    $titulo = $recibo->name;
                                    }else{
                                        $titulo = 'Hoja 1';
                                        $pag= $recibo->slug;
                                    }
                                
                                $path = $categories[0].'/'.$categories[1];
                                return view('landing.'.$datos->template,['path'=>$path,'elementos'=>$countSeg,'datos'=>$datos,'path1'=> $path1,'path2'=> $path2,'path3'=> $path3,'path'=>$path,'invoices'=>$invoices,'recibos'=>$recibos,'pag'=>$pag,'titulo'=>$titulo,'configure'=>$configure]);
                                        
                        }

                    }
                }
            }else{
                
                //vista recibos
                @$path1 = Category::where('slug',$categories[0])->first();
                @$path2 = Category::where('slug',$categories[1])->first();
                @$path3 = Category::where('slug',$categories[2])->first();

                $configure = Configuration::first();

                $parent = Category::where('slug',$categories[2])->first();  
                         
                $parent_id = $parent->id;

                $datos = CategoryPage::where('category_id',$parent_id)->first();
                $category_id = $datos->category_id;


                $categorias = Category::where('id',$parent_id)->orderby('order','asc')->get();

                
                $slugrecibo = $categories[3];
               
                $recibo = Invoice::where([['slug','=',$slugrecibo],['category_id','=',$category_id]])->first();
                
                $recibos = Invoice::where('category_id',$category_id)->get();
                $invoices = InvoiceItem::where('invoice_id',$recibo->id)->with('positions','layers')->get();
        
                $ppurl = explode("/",$_SERVER['REQUEST_URI']);
                if(!empty($ppurl[4])){
                $pag= $ppurl[4];
                $titulo = $recibo->name;
                }else{
                    $titulo = 'Hoja 1';
                    $pag= $recibo->slug;
                }
               
               
                $path = $categories[0].'/'.$categories[1].'/'.$categories[2];
                return view('landing.'.$datos->template,['path'=>$path,'elementos'=>$countSeg,'datos'=>$datos,'path1'=> $path1,'path2'=> $path2,'path3'=> $path3,'path'=>$path,'invoices'=>$invoices,'recibos'=>$recibos,'pag'=>$pag,'titulo'=>$titulo,'configure'=>$configure]);
                        
                
            }
          
    }
}