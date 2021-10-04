@extends('voyager::master')

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">

                <form method="POST" enctype="multipart/form-data" action="{{ route('voyager.configuracion') }}">
                        {{ csrf_field() }}
                        <input type="hidden" name="id" value="{{ @$configure[0]->id }}">
                <div class="panel">
                            
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="voyager-character"></i> Datos de globales
                                
                            </h3>
                            <div class="panel-actions">
                                <a class="panel-action voyager-angle-down" data-toggle="panel-collapse" aria-hidden="true"></a>
                            </div>
                        </div>
                       
                            <div class="panel-body">
                                    
                                <div class="group">
                                        <input type="text" class="form-control" id="title" name="title" placeholder="Título pagina" value="{{ @$configure[0]->title }}">
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="group">
                                        <input type="text" class="form-control" id="description" name="description" placeholder="Descripción pagina" value="{{ @$configure[0]->description }}">
                                </div>                           
                            </div>
                            <div class="panel-body">
                                    <div class="group">
                                            <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Keywords pagina" value="{{ @$configure[0]->keywords }}">
                                    </div>                        
                            </div>
                            <div class="panel-body">
                                    <div class="group">
                                            <input type="text" class="form-control" id="ogsite_name" name="ogsite_name" placeholder="OG:site_name" value="{{ @$configure[0]->ogsite_name }}">
                                    </div>                        
                            </div>
                            <div class="panel-body">
                                    <div class="group">
                                            <input type="text" class="form-control" id="ogtype" name="ogtype" placeholder="OG:type" value="{{ @$configure[0]->ogtiype }}">
                                    </div>                        
                            </div>
                            <div class="panel-body">
                                    <div class="group">
                                            <input type="text" class="form-control" id="ogurl" name="ogurl" placeholder="OG:url" value="{{ @$configure[0]->ogurl }}">
                                    </div>                        
                            </div>
                            <div class="panel-body">
                                    <div class="group">
                                            <input type="text" class="form-control" id="ogtitle" name="ogtitle" placeholder="OG:title" value="{{ @$configure[0]->ogtitle }}">
                                    </div>                        
                            </div>
                            <div class="panel-body">
                                    <div class="group">
                                            <input type="text" class="form-control" id="ogdescription" name="ogdescription" placeholder="OG:description" value="{{ @$configure[0]->ogdescription }}">
                                    </div>                        
                            </div>
                            <div class="panel-body">
                                    <div class="group">
                                            <input type="text" class="form-control" id="ogimagen" name="ogimagen" placeholder="OG:imagen" value="{{ @$configure[0]->ogimagen }}">
                                    </div>                        
                            </div>


                            <div class="panel-body">
                                <div class="group">
                                        <input type="text" class="form-control" id="analitycs" name="analitycs" placeholder="Código analitycs" value="{{ @$configure[0]->analitycs }}">
                                </div>                        
                            </div>
                            <div class="panel-footer">
                                <button type="submit" class="btn btn-primary save">Guardar</button>
                            </div>
                    
                    </div>
        
                </form>
               
                </div>
        
    </div>
</div>
@stop