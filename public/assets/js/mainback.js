$(document).ready(function(){
    console.log("en back");
    $(".add-point").click(function(e){
        e.preventDefault();
        var npunto= $(".draggable").length;
       
        var contador = npunto + 1;
        var puntocontent = '<div class="draggable" class="ui-widget-content"><p id="point-'+contador+'">P'+contador+'</p></div>';
        $(".canvas").append(puntocontent);

        var intext = '<div class="form-group" id="punto-'+contador+'"><label for="point-'+contador+'">Texto punto '+contador+'</label><textarea class="form-control" name="punto[]" ></textarea><input type="hidden" name="posx[]" class="posx-'+contador+'"><input type="hidden" name="posy[]" class="posy-'+contador+'"></div>';
        $("#fr-invoice .box-body").append(intext);
        fundrag(contador);
    });

    $(".add-area").click(function(e){
        e.preventDefault();
        var npunto= $(".draggable2").length;
       
        var contador = npunto + 1;
        var puntocontent = '<div class="draggable2" class="ui-widget-content"><p id="layer-'+contador+'">A'+contador+'</p></div>';
        $(".canvas").append(puntocontent);


         var intext = '<input type="hidden" name="bx[]" class="bx-'+contador+'"><input type="hidden" name="by[]" class="by-'+contador+'">';
         var intext1 = '<input type="hidden" name="bwidth[]" class="bwidth-'+contador+'"><input type="hidden" name="bheight[]" class="bheight-'+contador+'">';
        $("#fr-invoice .box-body").append(intext);
        $("#fr-invoice .box-body").append(intext1);
       
        fundragbox(contador);
    });

    $(".save-puntos").click(function(e){
        e.preventDefault();
       var dataform =  $("#fr-invoice").serialize();
        $.ajax({
            url:'/admin/recibo/setpoints',
            type:'POST',
            dataType:'json',
            data:dataform,
            success:function(response){
                window.location.reload();
            }
        });
    });
});


function fundrag(point){

    var drag = $( ".draggable" ).draggable({
        snapMode: "inner",
        containment : '.canvas',
        drag: function( event, ui ) {
           
            
            var posx = ".posx-"+point;
            var posy = ".posy-"+point;

            $(posx).val(ui.position.left);
            $(posy).val(ui.position.top);

        }
      });
}
function fundragbox(point){

    var drag = $( ".draggable2" ).draggable({
        snapMode: "inner",
        containment : '.canvas',
        drag: function( event, ui ) {
           
           
            var posx = ".bx-"+point;
            var posy = ".by-"+point;

            $(posx).val(ui.position.left);
            $(posy).val(ui.position.top);

        }
      }).resizable({
          snapMode: "inner",
          containment : '.canvas',
          resize:function(event,ui){
          

            var sizex = ".bwidth-"+point;
            var sizey = ".bheight-"+point;

            $(sizey).val(ui.size.height);
            $(sizex).val(ui.size.width);
             
          }
      });
}


 $(".add-point").click(function(e){
        e.preventDefault();
        var npunto= $(".draggable").length;
       
        var contador = npunto + 1;
        var puntocontent = '<div class="draggable" class="ui-widget-content"><p id="point-'+contador+'">P'+contador+'</p></div>';
        $(".canvas").append(puntocontent);

        var intext = '<div class="form-group" id="punto-'+contador+'"><label for="point-'+contador+'">Texto punto '+contador+'</label><textarea class="form-control" name="punto[]" ></textarea><input type="hidden" name="posx[]" class="posx-'+contador+'"><input type="hidden" name="posy[]" class="posy-'+contador+'"></div>';
        $("#fr-invoice .box-body").append(intext);
        fundrag(contador);
    });

    $(".add-area").click(function(e){
        e.preventDefault();
        var npunto= $(".draggable2").length;
       
        var contador = npunto + 1;
        var puntocontent = '<div class="draggable2" class="ui-widget-content"><p id="layer-'+contador+'">A'+contador+'</p></div>';
        $(".canvas").append(puntocontent);


         var intext = '<input type="hidden" name="bx[]" class="bx-'+contador+'"><input type="hidden" name="by[]" class="by-'+contador+'">';
         var intext1 = '<input type="hidden" name="bwidth[]" class="bwidth-'+contador+'"><input type="hidden" name="bheight[]" class="bheight-'+contador+'">';
        $("#fr-invoice .box-body").append(intext);
        $("#fr-invoice .box-body").append(intext1);
       
        fundragbox(contador);
    });

    $(".save-puntos").click(function(e){
        e.preventDefault();
       var dataform =  $("#fr-invoice").serialize();
        $.ajax({
            url:'/admin/recibo/setpoints',
            type:'POST',
            dataType:'json',
            data:dataform,
            success:function(response){
                window.location.reload();
            }
        });
    });