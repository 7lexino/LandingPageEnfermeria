<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <link rel="icon" type="image/png" href="imagenes/favicon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Uniformes de enfermería - Juguel Uniformes</title>
        
        <meta name="description" content="Sacos, chalecos, abrigos, pantalones, faldas, blusas y accesorios de enfermera. 30 años fabricando uniformes de enfermería." >
        <meta name="keywords" content="enfermera, enfermería, abrigos, chalecos, blusas, faldas, juguel, trajes">
        <meta name="robots" content="index, follow">

        <!-- Librerías de bootstrap y JQuery-->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery-3.1.0.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>

        <!-- Librerías de animaciones-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css"/>

        <!-- Librerías custom -->
        <link rel="stylesheet" href="css/custom_styles.css">
        <script src="js/ui.js"></script>

	</head>
	<body>
		<nav class="navbar navbar-expand-lg fixed-top nav_footer">

            <!-------------- Logotipo ------------------>

            <!-- Desktop version -->
            <div class="container d-none d-md-block">
                <div class="row">
                    <div class="col">
                        <img loading="lazy" id="img_main_logo" class="img-fluid d-block img_logo_footer" src="imagenes/juguel-logo-blanco.png" />
                    </div>
                </div>
            </div>

            <!-- Mobile version -->
            <div class="container justify-content-center d-xs-block d-md-none">
                <span class="navbar-brand mb-0">
                    <img loading="lazy" id="img_main_logo_mobile" class="img-fluid d-block img_logo_footer" src="imagenes/logo_mobile.png" />
                </span>
            </div>

            <ul class="navbar-nav d-none d-md-block">
                <li class="nav-item">
                    <a class="nav-link text-white" href="https://tienda.juguel.com/shop">Tienda en línea</a>
                </li>
            </ul>

            <div class="container justify-content-center d-xs-block d-md-none">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="https://tienda.juguel.com/shop">Tienda en línea</a>
                    </li>
                </ul>
            </div>
            <!--------------- Menú -------------------->
            

		</nav>
        
        <section id="section_cover" class="section_cover">
            <div class="container">
                
                <div class="row d-none d-md-block" style="height:25vh;">
                    <!-- Desktop version -->
                </div>

                <div class="row d-sm-block d-md-none" style="height:10vh;">
                    <!-- Mobile version -->
                </div>

                <div class="row">

                    <!-- Desktop version -->
                    <div class="col-12 text-right d-none d-md-block">
                        <h1 class="display-1 animate__animated animate__fadeInRight">Productos de enfermera</h1>
                        <p id="li_prendas" class="display-4 ts_40 ">Uniformes</p>
                        <button onclick="$(location).attr('href','https://tienda.juguel.com/shop');" type="button" style="font-size:28px;" class="btn btn-lg btn-dark mt-3 animate__animated animate__fadeInRight">Ir a tienda en línea</button>
                    </div>

                    <!-- Mobile version -->
                    <div class="col-12 text-center d-sm-block d-md-none">
                        <p class="display-4 animate__animated animate__fadeInRight">Productos de enfermera</p>
                        <button onclick="$(location).attr('href','https://tienda.juguel.com/shop');" type="button" class="btn btn-dark btn-lg animate__animated animate__fadeInRight">Ir a tienda en línea</button>
                        <img loading="lazy" class="image-fluid mt-3 cover_mobile" src="imagenes/cover_movil.jpg" alt="">
                    </div>

                </div>

            </div>
        </section>

        <section id="section_introduction_phantom" class="section_introduction_phantom">
            <!-- Desktop & mobile version -->
        </section>

        <section id="section_introduction" class="section_introduction">
            <div class="container">
                <div class="row d-none d-md-block" style="height:30vh;">
                    <!-- Desktop version -->
                </div>
                <div class="row d-sm-block d-md-none" style="height:20vh;">
                    <!-- Mobile version -->
                </div>
                <div class="row">

                    <!-- Desktop version -->
                    <div class="col d-none d-md-block">
                        <h2 id="sint_title" class="display-2 tss_white animate__animated animate__fadeInLeft">Conoce nuestra colección de enfermería</h2>
                        <p id="sint_descr" class="display-4 tss_white ts_30 animate__animated animate__fadeInLeft" style="margin-right:50%;">Cuidamos cada detalle para elaborar uniformes de enfermería manufacturados con los mejores materiales y excelente confección para ofrecerle un producto confortable y de excelente calidad.</p>
                        <!-- <button id="sint_btn" data-toggle="modal" data-target="#ModalCatalogo" type="button" style="font-size:28px;border:2px solid;" class="btn btn-outline-dark btn-lg mt-4 animate__animated animate__fadeInLeft">Ver productos</button> -->
                        <button onclick="$(location).attr('href','https://tienda.juguel.com/shop');" type="button" style="font-size:28px;border:2px solid;" class="btn btn-outline-dark btn-lg mt-4 animate__animated animate__fadeInLeft">Ver productos</button>
                    </div>

                    <!-- Mobile version -->
                    <div class="col d-sm-block d-md-none si_mobile_descr">
                        <h2 class="display-4 text-white ">Conoce nuestra colección de enfermería</h2>
                        <p class="ts_20 text-white ">Cuidamos cada detalle para elaborar uniformes de enfermería manufacturados con los mejores materiales y excelente confección para ofrecerle un producto confortable y de excelente calidad.</p>
                        <!-- <button data-toggle="modal" data-target="#ModalCatalogo" type="button" class="btn btn-light btn-lg ">Ver productos</button> -->
                        <button onclick="$(location).attr('href','https://tienda.juguel.com/shop');" type="button" class="btn btn-light btn-lg ">Ver productos</button>
                    </div>

                </div>
            </div>
        </section>

        <!-- Modal -->
        <div class="modal fade" id="ModalCatalogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl modal-dialog-scrollable modal_catalogo">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Catálogo de enfermería</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body overflow-hidden">
                        <!-- <embed id="embed_catalogo" class="embed_catalogo" src="docs/catalogo_enfermeria.pdf" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html"> -->
                        <iframe id="pdfviewer" class="embed_catalogo" src="https://docs.google.com/gview?embedded=true&url=https://juguel.com/enfermeria/docs/catalogo_enfermeria.pdf&amp;embedded=true" frameborder="0" ></iframe>
                        <!-- <object data="docs/catalogo_enfermeria.pdf#view=Fit" type="application/pdf" class="embed_catalogo"> 
                            <div class="text-center">
                                <p class="ts_20">Tu navegador no soporta ver archivos .pdf en línea.</a></p>
                                <a rel="external" href="docs/catalogo_enfermeria.pdf">
                                    <button type="button" class="btn btn-lg btn-primary">Clic aquí para descargar el catálogo</button>
                                </a>
                            </div>
                        </object> -->
                        <!-- <a href="pdfviewer://x-callback-url/add-file?url=https://pspdfkit.com/downloads/case-study-box.pdf">Add to PDF Viewer</a> -->
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                    </div>
                </div>
            </div>
        </div>

        <section id="section_nanopel" class="section_nanopel">
            <div class="container-fluid">
                <div class="row">
                    <div id="section_nanopel_col_before" class="section_nanopel_col_before"></div>
                    <div class="col text-center">
                        
                        <!-- Destop version -->
                        <h2 id="a_antifluidos" class="display-2 d-none d-md-block animate__animated animate__fadeInUp" >Antifluidos</h2>
                        <p class="ts_30 d-none d-md-block animate__animated animate__fadeInUp">La tecnología Nanopel permite repeler líquidos al contacto con el textil.</p>
                        
                        <!-- Mobile version -->
                        <h2 class="display-4 d-sm-block d-md-none animate__animated animate__fadeInUp">Antifluidos</h2>
                        <p class="ts_18 mx-5 d-sm-block d-md-none animate__animated animate__fadeInUp">La tecnología Nanopel permite repeler líquidos al contacto con el textil.</p>

                        <video id="video_repelencia" autoplay loop playsinline class="cs_video-fluid">
                            <source  src="videos/repelente_agua_opt.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div id="section_nanopel_col_after" class="section_nanopel_col_after"></div>
                </div>
            </div>
        </section>
        
        <section id="section_uvrays" class="section_uvrays">
            <img loading="lazy" id="img_proteccion" class="d-none d-lg-block" width="100%" src="imagenes/blusa_uv4.png" alt="Tela con protección contra rayos uv." style="position:absolute;" />
            <div class="container">
                
                <div class="row d-none d-lg-block" style="height:5vh;">
                    <!-- Desktop version -->
                </div>
                <div class="row d-none d-xl-block" style="height:10vh;">
                    <!-- Desktop version -->
                </div>
                <div class="row d-sm-block d-lg-none" style="height:15vh;">
                    <!-- Mobile version -->
                </div>

                <div class="row text-right">

                    <!-- Desktop version -->
                    <div class="col offset-lg-4 d-none d-lg-block">
                        <h2 class="display-2">Protección solar</h2>
                        <p class="display-4 ts_30" >Tecnología que permite que el textil evite el paso de los rayos UV.</p>
                    </div>

                    <!-- Mobile version -->
                    <div class="col offset-lg-4 d-sm-block d-lg-none text-center">
                        <h2 class="display-4">Protección solar</h2>
                        <p class="ts_18">Tecnología que permite que el textil evite el paso de los rayos UV.</p>
                        <img loading="lazy" class="mt-5" style="width:100%;" src="imagenes/uv_protection.png" alt="Tela con protección contra rayos uv.">
                    </div>

                </div>
                <!-- <div class="row text-center">
                    <div class="col">
                        <p>Hola mundo</p>
                    </div>
                </div> -->
            </div>
        </section>

        <section id="section_quality" class="section_quality">
            <div class="container-fluid">
                <div class="row">
                    
                    <!-- Mobile version -->
                    <div class="col-sm-12 d-sm-block d-lg-none text-center">
                        <p class="display-4 ts_30">Altos estándares de calidad</p>
                    </div>

                    <div class="col-12">
                        <video id="video_cocida" autoplay loop playsinline class="cs_video_calidad">
                            <source src="videos/cocida_opt.mp4" type="video/mp4">
                        </video>
                        <!-- Desktop version -->
                        <div class="texto_over d-none d-lg-block mb-3">
                            <p class="ts_100">Altos estándares de calidad</p>
                        </div>    
                    </div>

                </div>
            </div>
        </section>

        <!-- <section id="section_pedido" class="section_pedido">
            <div class="container-fluid">

                <div class="row d-none d-md-block" style="height:15vh;">
                    
                </div>

                <div class="row d-sm-block d-md-none" style="height:10vh;">
                   
                </div>

                <div class="row">
                    <div class="col text-right">
                        <p class="display-2 mr-5">Realiza tu pedido</p>
                        <button class="btn btn-lg btn-success mr-5">Llama ya</button>
                    </div>
                </div>

            </div>
        </section> -->

        <section id="section_nosotros" class="section_nosotros d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-7">
                        <video id="video_juguel" autoplay playsinline class="sn_video" loading="lazy" controls>
                            <source src="videos/juguel_opt.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="col-sm-12 col-lg-5 sn_col_descr d-flex justify-content-center">
                        <div class="row d-flex align-items-center">
                            <div class="col-12 text-center">
                                <h3 class="display-4 font-weight-bold">30 años</h3>
                                <p class="ts_20">de experiencia.</p>
                            </div>
                            
                        </div>    
                    </div>
                </div>
            </div>
        </section>
        
        <section id="section_ecommerce" class="section_ecommerce">
            <div class="container-fluid">
                <div class="row">
                    <div class="col text-center">
                        <h3 class="">¡Visita nuestra tienda en línea!</h3>
                        <button onclick="$(location).attr('href','https://tienda.juguel.com/shop');" type="button" class="btn btn-light">Ir a la tienda</button>
                    </div>
                </div>
            </div>
        </section>


        <section id="section_informacion" class="section_informacion">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-8 mb-5 mb-md-0 align-self-center order-1 order-md-0">
                        <div class="row">
                            <div class="col d-flex justify-content-center">
                                <button data-toggle="modal" data-target="#ModalCatalogo" type="button" class="btn btn-lg btn-outline-light rounded-pil mt-4 mt-md-0 sinfo_vercatalogo_btn">Ver catálogo</button>
                            </div>
                        </div>

                        <!-- <div class="col-12 text-white">Síguenos en nuestras redes sociales</div> -->
                        <div class="d-flex justify-content-center mt-5">
                            <div class="mx-2 d-inline-flex">
                                <a target="_blank" href="https://wa.me/5218128721259?text=Me%20interesa,%20puede%20mandarme%20más%20información%20porfavor."><img width="30" src="imagenes/waab.png" /></a>
                            </div>
                            <div class="mx-2 d-inline-flex">
                                <a target="_blank" href="https://www.facebook.com/Juguel.Of/"><img width="30" src="imagenes/fbb.png" /></a>
                            </div>
                            <div class="mx-2 d-inline-flex">
                                <a target="_blank" href="https://www.instagram.com/juguel.of/"><img width="30" src="imagenes/insb.png" /></a>
                            </div>
                        </div>

                        <div class="d-block d-flex justify-content-center mt-5">
                            <div class="mx-2 d-inline-flex">
                                <a class="text-white ts_20" style="text-decoration:none;" href="mailto:ventasenfermeria@juguel.com"><img width="25" class="mr-2" src="imagenes/emb.png" /> ventasenfermeria@juguel.com</a>
                            </div>
                        </div>

                        <div class="d-block d-flex justify-content-center mt-3">
                            <div class="mx-2 d-inline-flex">
                                <!-- <a class="text-white ts_20" style="text-decoration:none;" href="tel:+5218180422031"><img width="21" class="mr-2" src="imagenes/telb.png" /> (81) 8042 2031</a> -->
                                <a class="text-white ts_20" style="text-decoration:none;" href="tel:+5218180422019">
                                    <button type="button" class="btn btn-dark btn-lg rounded-pil" >
                                        <span><img width="14" src="imagenes/telb.png" aria-hidden="true"> </span>
                                        <span> Llamada directa</span>
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4 order-0 order-md-1">
                        <form class="my-5 text-center mr-0" action="">
                            <div class="form-group col-sm-12 col-lg-8">
                                <p class="text-white display-3 ts_30">Solicite más información</p>
                                <hr class="separator_form"></hr>
                            </div>    
                            <div class="form-group col-sm-12 col-lg-8">
                                <input data-toggle="tooltip" data-placement="left" title="Campo requerido" id="txt_form_nombre" class="form-control sinfo_form_textbox" type="text" placeholder="Nombre"/>
                            </div>
                            <div class="form-group col-sm-12 col-lg-8">
                                <input id="txt_form_correo" class="form-control sinfo_form_textbox" type="email" placeholder="Correo electrónico"/>
                            </div>
                            <div class="form-group col-sm-12 col-lg-8">
                                <input id="txt_form_telefono" class="form-control sinfo_form_textbox" type="text" placeholder="Teléfono / Celular"/>
                            </div>
                            <div class="form-group col-sm-12 col-lg-8">
                                <textarea id="txt_form_mensaje" class="form-control sinfo_form_textbox" rows="3" type="textarea" placeholder="Mensaje"></textarea>
                            </div>
                            <div class="form-group col-sm-12 col-lg-8">
                                <button id="btn_enviarform" class="btn btn-lg btn-light btn-block sinfo_form_btn" type="button">
                                    Enviar
                                </button>
                            </div>
                            
                            <div class="form-group col-sm-12 col-lg-8">
                                <div id="mensaje_enviado" style="display:none;" class="alert alert-success alert-dismissible fade show" role="alert">
                                    El mensaje se ha enviado correctamente, nos pondremos en contacto tan pronto como sea posible.
                                    <button type="button" id="cerrar_btn_enviado" class="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                
                                <div id="mensaje_no_enviado" style="display:none;" class="alert alert-warning alert-dismissible fade show" role="alert">
                                    Hubo un error y no se ha podido enviar el mensaje. Recargue el sitio e inténtelo de nuevo.
                                    <button type="button" id="cerrar_btn_no_enviado" class="close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </section>

        <section id="section_map" class="section_map">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 sm_col_map">
                        <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=Juguel%20Uniformes&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near" aria-label="Juguel Uniformes"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <footer id="footer_bottom" class="footer_bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 my-2 text-center text-md-left text-white">
                        <a target="_blank" class="text-white" href="https://juguel.com/"><img width="15" class="mr-2" src="imagenes/favicon_color.png" />Uniformes Ejecutivos</a>
                        <a target="_blank" class="text-white" href="https://juguel.com/wp-content/uploads/2020/07/Aviso-de-Privacidad-2020.pdf"> | Política de privacidad</a>
                    </div>
                    <div class="col-12 col-md-6 my-2 text-center text-md-right text-white">
                        <p>Sitio web diseñado y desarrollado por <a class="text-secondary" target="_blank" href="http://www.alejandrohdz.net/curriculum-vitae/">Alejandro Hernández</a></p>
                    </div>
                </div>
            </div>
        </footer>
        

	</body>
</html>