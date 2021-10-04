$(document).ready(function() {

    $(".add-point").click(function(e) {
        e.preventDefault();
        $(".mensaje").html('');
        var npunto = $(".draggable").length;

        var contador = npunto + 1;
        
        var puntocontent = `<div class="draggable" class="ui-widget-content" style="position:absolute;"><p id="point-${contador}">P${contador}</p></div>`;
        $(".canvas").append(puntocontent);

        var intext = `<div class="form-group" id="punto-${contador}">
        <label for="point-${contador}">Texto punto ${contador}</label>
        <textarea class="form-control" name="punto[]" ></textarea>
        </div>
        <div class="form-group">
        <label for="order">Número de etiqueta</label>
        <input type="text" class="form-control" name="order[]" id="order" >
        <input type="hidden" name="posx[]" class="posx-${contador}">
        <input type="hidden" name="posy[]" class="posy-${contador}">
        </div>`;
        $("#fr-invoice .box-body").append(intext);
        fundrag(contador);
    });


    $(".add-area").click(function(e) {
        e.preventDefault();
        $(".mensaje").html('');
        var npunto = $(".draggable2").length;

        var contador = npunto + 1;
        var puntocontent = `<div class="draggable2" class="ui-widget-content">
        <p id="layer-${contador }">A${contador}</p> </div>`;
        $(".canvas").append(puntocontent);

        var intext = `<input type="hidden" name="bx[]" class="bx-${contador}">
        <input type="hidden" name="by[]" class="by-${contador}">`;
        var intext1 = `<input type="hidden" name="bwidth[]" class="bwidth-${contador}">
        <input type="hidden" name="bheight[]" class="bheight-${contador}">`;

        $("#fr-invoice .box-body").append(intext);
        $("#fr-invoice .box-body").append(intext1);

        fundragbox(contador);
    });

    $(document).on('mouseover','.draggable',function(){
        $(".mensaje").html('');
    });

    $(".save-puntos").click(function(e) {
        e.preventDefault();
        var dataform = $("#fr-invoice").serialize();
        $.ajax({
            url: '/admin/setpoints',
            type: 'POST',
            dataType: 'json',
            data: dataform,
            success: function(response) {
               if(response.rpta=="ok"){
                window.location.reload();
               }else{
                   $(".mensaje").html(response.mensaje);
               }
            }
        });
    });



    $(".esmobil").change(function() {
       
        if ($(this).is(":checked")) {

            $(".canvas").css('width', '300px');
            return;
        } else {
            $(".canvas").css('width', '458px');
        }
        // not checked
    });

    $(".draggable").each(function(i, e) {
        $(".mensaje").html('');
        var indice = i + 1;
        var idem = "#point-" + indice;
        console.log(idem);
        editfundrag(idem, indice);
    });

    $(".draggable2").each(function(i, e) {
        $(".mensaje").html('');
        var indice = i + 1;
        var idem = "#layer-" + indice;
        editfundragbox(idem, indice);
    });


    tinymce.init({
        menubar: false,
        selector: '.posts textarea[name="body"]',
        skin: 'voyager',
        min_height: 300,
        resize: 'vertical',
        plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
        extended_valid_elements: 'span,input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
        file_browser_callback: function(field_name, url, type, win) {
            if (type == 'image') {
                $('#upload_file').trigger('click');
            }
        },
        toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code',
        convert_urls: false,
        image_caption: true,
        image_title: true,
        verify_html: false,
        paste_word_valid_elements: "b,strong,i,em,u,h1,h2,h3,h4,ol,ul,li",
        content_css: '/css/site.css',
        init_instance_callback: function(editor) {
            if (typeof tinymce_init_callback !== "undefined") {
                tinymce_init_callback(editor);
            }
        },
        setup: function(editor) {
            editor.on('init', function(e) {
                console.log('Editor was initialized.');
            });
        }
    });

    tinymce.init({
        menubar: false,
        selector: '.posts textarea[name="excerpt"]',
        skin: 'voyager',
        min_height: 300,
        resize: 'vertical',
        plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
        extended_valid_elements: 'span,input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
        file_browser_callback: function(field_name, url, type, win) {
            if (type == 'image') {
                $('#upload_file').trigger('click');
            }
        },
        toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code',
        convert_urls: false,
        image_caption: true,
        image_title: true,
        verify_html: false,
        paste_word_valid_elements: "b,strong,i,em,u,h1,h2,h3,h4,ol,ul,li",
        content_css: '/css/site.css',
        init_instance_callback: function(editor) {
            if (typeof tinymce_init_callback !== "undefined") {
                tinymce_init_callback(editor);
            }
        },
        setup: function(editor) {
            editor.on('init', function(e) {
                console.log('Editor was initialized.');
            });
        }
    });

    tinymce.init({
        menubar: false,
        selector: '.slider-items textarea[name="body"]',
        skin: 'voyager',
        min_height: 300,
        resize: 'vertical',
        plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
        extended_valid_elements: 'span,input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
        file_browser_callback: function(field_name, url, type, win) {
            if (type == 'image') {
                $('#upload_file').trigger('click');
            }
        },
        toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code',
        convert_urls: false,
        image_caption: true,
        image_title: true,
        verify_html: false,
        paste_word_valid_elements: "b,strong,i,em,u,h1,h2,h3,h4,ol,ul,li",
        content_css: '/css/site.css',
        init_instance_callback: function(editor) {
            if (typeof tinymce_init_callback !== "undefined") {
                tinymce_init_callback(editor);
            }
        },
        setup: function(editor) {
            editor.on('init', function(e) {
                console.log('Editor was initialized.');
            });
        }
    });

    var url = window.location.pathname;

    var turl = url.split('/');

    if (turl[2] == 'pages') {
        tinymce.init({
            menubar: false,
            selector: '.pages textarea[name="body"]',
            skin: 'voyager',
            min_height: 300,
            resize: 'vertical',
            plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
            extended_valid_elements: 'span,input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
            file_browser_callback: function(field_name, url, type, win) {
                if (type == 'image') {
                    $('#upload_file').trigger('click');
                }
            },
            toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code',
            convert_urls: false,
            image_caption: true,
            image_title: true,
            verify_html: false,
            paste_word_valid_elements: "b,strong,i,em,u,h1,h2,h3,h4,ol,ul,li",
            content_css: '/css/site.css',
            init_instance_callback: function(editor) {
                if (typeof tinymce_init_callback !== "undefined") {
                    tinymce_init_callback(editor);
                }
            },
            setup: function(editor) {
                editor.on('init', function(e) {
                    console.log('Editor was initialized.');
                });
            }
        });
    }


    $(".borrar-punto").click(function(e){
        e.preventDefault();
        let id = $(this).data('id');
        let method  = "DELETE";
        let token = $("#token").val();
        $.ajax({
            url:`/admin/invoice-items/implement/punto/${id}`,
            type:'POST',
            dataType:'json',
            data:({'id':id,'_method':method,'_token':token}),
            success:function(response){
                $(this).parent('a').parent('div').remove();
                
            }
        });
    });
});



function fundrag(point) {
    $(".mensaje").html('');
    
    var drag = $(".draggable").draggable({
        snapMode: "inner",
        containment: '.canvas',
        drag: function(event, ui) {

            var cont = $(this).children('p').attr('id');
            let ppo = cont.split('-');

            var posx = `.posx-${ppo[1]}`;
            var posy = `.posy-${ppo[1]}`;
            console.log(`${posx} - ${posy}`);
            $(posx).val(ui.position.left);
            $(posy).val(ui.position.top);

        }
    });
}



function fundragbox(point) {

    var drag = $(".draggable2").draggable({
        snapMode: "inner",
        containment: '.canvas',
        drag: function(event, ui) {


            var posx = `.bx-${point}`;
            var posy = `.by-${point}`;
            console.log(`${posx} - ${posy}`);
            $(posx).val(ui.position.left);
            $(posy).val(ui.position.top);

        }
    }).resizable({
        snapMode: "inner",
        containment: '.canvas',
        resize: function(event, ui) {


            var sizex = `.bwidth-${point}`;
            var sizey = `.bheight-${point}`;

            $(sizey).val(ui.size.height);
            $(sizex).val(ui.size.width);

        }
    });
}


function editfundrag(idem, point) {

    var drag = $(idem).parent("div").draggable({
        snapMode: "inner",
        containment: '.canvas',
        drag: function(event, ui) {


            var posx = `.posx-${point}`;
            var posy = `.posy-${point}`;
           
            $(posx).val(ui.position.left);
            $(posy).val(ui.position.top);

        }
    });

}


function editfundragbox(idem, point) {

    var drag = $(idem).parent("div").draggable({
        snapMode: "inner",
        containment: '.canvas',
        drag: function(event, ui) {


            var posx = `.bx-${point}`;
            var posy = `.by-${point}`;

            $(posx).val(ui.position.left);
            $(posy).val(ui.position.top);

        }
    }).resizable({
        snapMode: "inner",
        containment: '.canvas',
        resize: function(event, ui) {


            var sizex = `.bwidth-${point}`;
            var sizey = `.bheight-${point}`;

            $(sizey).val(ui.size.height);
            $(sizex).val(ui.size.width);

        }
    });
}



function tinymce_init_callback(editor) {
    editor.on('ExecCommand', function(e) {
       
    });
}