@extends('voyager::master')

@section('content')

<section class="content">
                   
    <div class="row">
        
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header with-border">
                           
                    </div>
                        <div class="box-body">
                                   
                            <div class="box box-warning">
                                    <div class="box-header with-border">
                                      
                                    </div>
                                    <div class="box-body">
                                        <div class="canvas" style="background:url(/storage/{!! optional($items)->imagen !!}) no-repeat center top; background-size:contain;     height: 750px;
                                           @if(@$items->mobile==2)
                                             width: 300px;
                                           @else
                                             width: 458px;
                                           @endif
                                           ">
                                          @if($points=="")
                                            
                                           @else
                                                @foreach($points as $key => $point)

                                                <div class="draggable" class="ui-widget-content"  style="position: absolute; left: {{ $point->latx }}px; top: {{ $point->laty }}px;">
                                                    <p id="point-{{ $key+1 }}">P{{ $key+1 }}</p>
                                                    <a href="#" class="borrar-punto" data-id="{{ $point->id }}" ><span class="icon voyager-x"></span></a>
                                                </div>

                                                @endforeach
                                                
                                         @endif

                                        @foreach($layers as $k => $layer)

                                                <div class="draggable2" class="ui-widget-content"  style="position: absolute; left: {{ $layer->latx }}px; top: {{ $layer->laty }}px; width:{{ $layer->width_box }}px; height:{{ $layer->height_box }}px">
                                                    <p id="layer-{{ $k+1 }}">A{{ $k+1 }}</p>
                                                    <a href="#" class="borrar-capa" data-id="{{ $layer->id }}"><span class="icon voyager-x"></span></a>
                                                </div>

                                        @endforeach
                                       </div>   
                                    </div>    
                            </div>
                           
                                    
                       </div>
                </div>             
            </div>  
            <div class="col-md-4">
                <div class="box">
                  
                  <form id="fr-invoice">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                    <input type="hidden" name="invoice_item_id" id="item_id" value="{{ $items? $items->id: '' }}">
                    <input type="hidden" name="invoice_id" id="invoice_id" value="{{ $items->invoice_id }}">
                  <div class="box-header">
                    <H2>Puntos de implementación</H2>
                  </div>
                  <div class="box-body">
                    <a href="#" class="add-point btn btn-default btn-xs">Agregar Punto</a>

                    <a href="#" class="add-area btn btn-default btn-xs">Agregar Area</a>
                   <br>
                   <div class="mensaje" style="color:red"></div>
                   <br>
                   <div class="form-check">
                   <label class="form-check-label"><strong>Es mobile</strong> </label>
                     <input type="checkbox" name="esmovil" class="form-check-input esmobil" value="2"
                     @if($items->mobile==2)
                        checked
                     @endif
                     >
                  </div>                   
                   <br><br>
                    @if($points=="")
                                            
                    @else
                        @foreach($points as $key => $point)
                            <div class="form-group" id="punto-{{ $key+1 }}">
                                <label for="point-{{ $key+1 }}">Texto punto {{ $key+1 }}</label>
                                <textarea class="form-control" name="punto[]" > {{ $point->descripcion }}</textarea> 
                            </div>
                            <div class="form-group">  
                                <label for="point-{{ $key+1 }}">Número etiqueta {{ $key+1 }}</label>
                                <input type="number" class="form-control" name="order[]" id="order" value="{{ @$point->order }}">
                                <input type="hidden" name="posx[]" class="posx-{{ $key+1 }}" value="{{ $point->latx }}">
                                <input type="hidden" name="posy[]" class="posy-{{ $key+1 }}" value="{{ $point->laty }}">
                               
                            </div>
                        @endforeach
                    @endif
                    
                    @foreach($layers as $k => $layer)
                    
                        <input type="hidden" name="bx[]" class="bx-{{ $k+1 }}" value="{{ $layer->latx }}">
                        <input type="hidden" name="by[]" class="by-{{ $k+1 }}" value="{{ $layer->laty }}">
                        <input type="hidden" name="bwidth[]" class="bwidth-{{ $k+1 }}" value="{{ $layer->width_box }}">
                        <input type="hidden" name="bheight[]" class="bheight-{{ $k+1 }}" value="{{ $layer->height_box }}">
                    @endforeach
                  </div>
                  <div class="box-footer">
                        <a href="#" class="btn btn-danger save-puntos">Guardar</a>
                   
                  </div>
                </form>
                </div>
            </div>
          
         </div> 

   
</section>  

@endsection