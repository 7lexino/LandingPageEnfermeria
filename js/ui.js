
//Obtenemos el alto y ancho inicial de la pantalla del viewport
let window_width = $(window).width();
let window_height = $(window).height();
//Obtenemos el alto y ancho total inicial de nuestro documento (Esto depende del dispositivo en que se vea)
//var document_width = $(document).width();
//var document_height = $(document).height();

setTimeout(function(){
    $('.slideRight').each( function(i){

        var bottom_of_object = $(this).position().top + $(this).outerHeight() + $(window).height() - 500;
        var bottom_of_window = $(window).scrollTop() + $(window).height();

        if( bottom_of_window > bottom_of_object){
            $( ".slideRight" ).addClass('active');
        }; //else {
            //$( ".slideLeft" ).removeClass('active');
        //};
    }); 
}, 200);

$(document).ready(function(){
    //Esto se ejecuta cuando el documento está preparado
    
    $('body').on('click touchstart', function () {
        const videoElement1 = document.getElementById('video_repelencia');
        const videoElement2 = document.getElementById('video_cocida');
        const videoElement3 = document.getElementById('video_juguel');

        if (!videoElement1.playing) {
            videoElement1.play();
        }

        if (!videoElement2.playing) {
            videoElement2.play();
        }

        if (!videoElement3.playing) {
            videoElement3.play();
        }
    });

    //Función para que se vayan corriendo esos textos
    $(function () {
        let count = 0;
        let prendas = ['Abrigos', 'Sacos', 'Chalecos', 'Blusas', 'Faldas', 'Pantalones'];
        setInterval(function () {
            count++;
            $("#li_prendas").fadeOut(400, function () {
            $(this).text(prendas[count % prendas.length]).fadeIn(400);
            });
        }, 2500);
    });
    

    if($("#img_proteccion").is(":visible")){
        $("#section_uvrays").css({'height': $("#img_proteccion").height()});
    }else{
        $("#section_uvrays").css({'height': "100vh"});
    }

    //Autoreproducir el video
    $('video').prop('muted',true);

    function IrTop(){
        $('html, body').animate({
            scrollTop: 0
        }, 1200);
    }
    
    function IrBottom(){
        $('html, body').animate({
            scrollTop: $("#section_informacion").offset().top
        }, 2000);
    }

    //Ir al top al dar click en el logo en Desktop
    $("#img_main_logo").click(function(){
        IrTop();
    });

    //Ir al top al dar click en el logo en mobile
    $("#img_main_logo_mobile").click(function(){
        IrTop();
    });

    /* $("#contactanos1").click(function(){
        //IrBottom();

    });

    $("#contactanos1_m").click(function(){
        IrBottom();
    }); */

    $("#cerrar_btn_no_enviado").click(function(){
        $("#mensaje_no_enviado").hide("slow");
    });

    $("#cerrar_btn_enviado").click(function(){
        $("#mensaje_enviado").hide("slow");
    });

    $("#btn_enviarform").click(function(){
        $("#btn_enviarform").attr("disabled");

        let txtNombre = $("#txt_form_nombre").val();
        let txtCorreo = $("#txt_form_correo").val();
        let txtTelefono = $("#txt_form_telefono").val();
        let txtMensaje = $("#txt_form_mensaje").val();

        console.log(txtNombre.length);

        if(txtNombre.length == 0 || txtCorreo.length == 0 || txtTelefono.length == 0 || txtMensaje.length == 0) {
            $("#btn_enviarform").removeAttr("disabled");
            return;
        }

        let datosCorreo = {
            nombre: txtNombre,
            correo: txtCorreo,
            telefono: txtTelefono,
            mensaje: txtMensaje
        };

        $("#mensaje_enviado").hide();
        $("#mensaje_no_enviado").hide();

        $.post( "actions/enviarcorreo.php", datosCorreo, function( data ) {
            if(data == 'true'){
                //console.log("Se envió el correo exitosamente!");
                $("#mensaje_enviado").show("slow");
            }else{
                //console.log("No se ha podido enviar el correo");
                $("#mensaje_no_enviado").show("slow");
            }
        });

        $("#txt_form_nombre").val("");
        $("#txt_form_correo").val("");
        $("#txt_form_telefono").val("");
        $("#txt_form_mensaje").val("");

        $("#btn_enviarform").removeAttr("disabled");
    });
    
});

$(window).resize(function(){
    //Esto se ejecuta cuando se cambia el tamaño de la ventana
    
    //Actualizamos el alto y ancho del viewport al cambiar de tamaño
    window_height = $(window).height();
    window_width = $(window).width();

    if($("#img_proteccion").is(":visible")){
        $("#section_uvrays").css({'height': $("#img_proteccion").height()});
    }else{
        $("#section_uvrays").css({'height': "100vh"});
    }
});

var position = $(window).scrollTop(); 
$(window).scroll(function() {

    //Esto se ejecuta cuando se hace scroll en la pantalla
    
    // setTimeout(function(){
    //     $("#sint_title").each(function(i){
    //         let bottom_of_object = $(this).position().top + $(this).outerHeight() + $(window).height() - 500;
    //         let bottom_of_window = $(window).scrollTop() + $(window).height();

    //         if( bottom_of_window > bottom_of_object){
    //             console.log("Ya se ejecutó la animación");
    //             $("#sint_title").addClass('anim_toRight_active');
    //         };
    //     });
    // }, 200);

    // setTimeout(function(){
    //     $("#sint_descr").each(function(i){
    //         let bottom_of_object = $(this).position().top + $(this).outerHeight() + $(window).height() + 500;
    //         let bottom_of_window = $(window).scrollTop() + $(window).height();

    //         if( bottom_of_window > bottom_of_object){
    //             console.log("Ya se ejecutó la animación");
    //             $("#sint_descr").addClass('anim_toRight_active');
    //         };
    //     });
    // }, 200);

    //Con esto detectamos si el usuario hace scroll arriba o abajo
    var scroll = $(window).scrollTop();
    let calidadPosition = $("#section_quality").first().position();

    if(scroll > position) {
        $("#section_cover").css({'top': -scroll});
    } else {
        $("#section_cover").css({'top': -scroll});
    }

    if(position >= calidadPosition.top){
        if(scroll > position){
            $("#section_quality").css({'position': 'relative'}).animate({left: 0, top: 10});
        }else{
            $("#section_quality").css({'position': 'relative'}).animate({left: 0, top: +10});
        }
    }

    //Actualizamos la sección 4 para que se se adapte a la imagen después de cargarse
    if($("#img_proteccion").is(":visible")){
        $("#section_uvrays").css({'height': $("#img_proteccion").height()});
    }else{
        $("#section_uvrays").css({'height': "100vh"});
    }

    //Guardamos la posición del row3
    let section_nanopel_position = $("#section_nanopel").first().position().top;
    if(scroll >= (section_nanopel_position - 250)){
        $("#section_nanopel_col_before").css({'left': -(scroll - (section_nanopel_position - 250))/2});
        $("#section_nanopel_col_after").css({'right': -(scroll - (section_nanopel_position - 250))/2});
    }

    position = scroll;
});