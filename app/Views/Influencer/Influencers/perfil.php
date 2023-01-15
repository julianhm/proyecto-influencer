
<body>

<!-- Header Start -->
    <div id="header" class="container-fluid mb-3 px-4 headerNav">
        <div class="row ">
            <div class="row pb-2 position_title profile-position-title">
                <div class="text-center text-title-normal" >
                    <b>LOS SEGUIDORES QUE TU MARCA NECESITA SIGUEN A UN INFLUENCER</b>
                </div>
            </div>
                <div class="profile-photo-position">
                    <img class="profile-photo" src="<?php echo base_url("uploads")."/".$influencer['foto_perfil']?>" >
                </div>
                
                <hr class="profile_header_black_line">
            <a style="display: contents;" href="index.html"><img class="logo-header-normal profile-logo-header" src="<?php echo base_url("img/logo-blue.png")?>" ></a>
                
        </div>
    </div>
    <!-- Header End -->

    <?php if(session('mensaje')!=""){  ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">

        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
        <?php echo session('mensaje'); ?>
        
        </div>

        </div>
    <?php } ?>
   
    <!-- Content Profile Start -->
    <div class="container">
        <div class="row">
            <div class="text-center user-decription-black my-3" style="font-size: 25px;" >
                <p><?php echo $influencer['nombreinflu']?> <br> <?php echo $influencer['alias']?></p>
            </div>
        </div>

        <div class="row text-center" style="padding: 0 10%;">
        <?php  for ($i=0; $i < count($redes) ; $i++) { ?>

        
            <div class="col">
                <div class="row">
                    <a class="profile-sm-logo" style="cursor:pointer" href="#" ><img src=<?php echo base_url('img/iconos')."/".$arregloredes[$i]['icono'] ?>></a>
                </div>
                <div class="row mt-2">
                    <h3 class="profile-followers"><?php echo $redes[$i]['cant_seguidores'] ?></h3>
                </div>
                <div class="row">
                    <p class="user-decription-black">Seguidores</p>
                </div>
            </div>

            <?php } ?>

           
        </div>
        <?php $puntaje=0;
        $porcentaje=100;
        $promedio=0;
        $cont=0;
        foreach ($mensajes as $key => $m) {
            $puntaje=$puntaje+$m['valoracion'];
            $cont++;
        }
        if($cont!=0){
            $promedio=$puntaje/$cont;
            $porcentaje=($promedio)/5*100;
            
        }
            
        
        ?>
        <div class="d-flex justify-content-center align-items-center">
            <div class="card p-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="review-count">Reputación</h5>
                    <div class="star-rating" style="width: 160px; height: 32px; background-size: 32px;" data-rating="<?php echo $retVal = ($porcentaje==0) ? 5 : $promedio ; ?>" title="<?php echo $promedio."/5" ?>">
                        <div class="star-value rating-comment" style="background-size: 32px; width: <?=$porcentaje?>%;">
                            
                        </div>
                    </div>
                </div>
                <h3 class="user-decription-black" style="color: #606060"><?=count($mensajes)?> valoraciones</h3>
            </div>
        </div>
        <!-- 
        <hr style="background-color: #000; opacity: 1">
        -->
        <div class="d-flex justify-content-center align-items-center video-width mt-4" >
            <!-- video size width="800" height="400" -->
            <video width="100%" height="400" controls>
                  <source src="<?php echo base_url('video').'/'.$influencer['video']?>" type="video/mp4">
                  <source src="movie.ogg" type="video/ogg">
                  Su video no es soportado
            </video>
        </div>
        <div class="text-center my-4" style="padding: 0 20%;">
            <p><?=$influencer['resenia'];?></p>
        </div>




        <div class="d-flex justify-content-center flex-wrap">
            <?php foreach ($misfotos as $key => $m) {?>
                <a class="gallery-profile-show-margin" href="img/gal1.jpg" data-lightbox="photos">
                <div class="gallery-profile-show">
                    <img class="upload-gal-img" src="<?php echo base_url('uploads')."/".$m['url']?>">
                </div>
            </a>
            <?php } ?>

        </div>


            <?php if($influencer['oferta']!=null ||$influencer['oferta']!=""){?>
        <div class="text-center my-4" style="padding-left: 20%; padding-right: 20%;">
            <h2 class="section-title profile-section-title">OFERTA POR TRABAJAR CONMIGO</h2>
                         
        </div>
        <div class="text-center" style="padding-left: 20%; padding-right: 20%;">
            <p><?php echo $influencer['oferta']; ?></p>

        </div>
        <?php } ?>
        <div class="text-center my-4" style="padding-left: 20%; padding-right: 20%;">
            <h2 class="section-title profile-section-title">Idioma(s)</h2>
                         
        </div>
        <div class="text-center user-decription-black" style="padding-left: 20%; padding-right: 20%;">
            <p><?php foreach ($misidiomas as $key => $m) {
                echo " - ".$m['nombre']." - ";
            } ?></p>
        </div>
        <div class="text-center my-4" style="padding-left: 20%; padding-right: 20%;">
            <h2 class="section-title profile-section-title">Modalidades de pago</h2>
                         
        </div>
        <div class="text-center" style="padding-left: 20%; padding-right: 20%;">
            <p><?php foreach ($pagos as $key => $m) {
                echo " - ".$m['nombre']." - ";
            } ?></p>
        </div>



        <div class="text-center mt-4" style="padding-left: 20%; padding-right: 20%; margin-bottom: -25px; position: relative;">
            <h2 class="section-title profile-section-title">Marcas con las que ha trabajado</h2>
                         
        </div>

   
        <div class="row justify-content-center text-center" style=" border: 1px solid #000; border-radius: 10px; padding-top: 30px;">
            <div class="containTag">
                <div id="tagcloud" class="user-decription-black" style="text-align: center;">
                    <!-- Generar Numeros Aleatorios para el atributo rel de 1 a 12 -->
                    <p><?php foreach ($marcas as $key => $m) {
                        echo $m['nombre']."  ";
                    } ?></p>
                </div>
            </div>
        </div>



        <?php if (count($mensajes)>0) {?>
        <div class="text-center my-5" style="padding-left: 20%; padding-right: 20%; position: relative;">
            <h2 class="section-title profile-section-title">Comentarios de clientes</h2>
                         
        </div>  

        <!-- Client's Comments Start -->
  
        <div class="owl-five owl-carousel owl-theme" style="padding-left: 4%">
        
         <?php foreach ($mensajes as $key => $m) {?>
            <div class="card card-comments">               
                <div class="card-body user-decription-black text-center" style="color: #696969">
                    <div>
                        <h6 class="mb-2 card-title-comment"><?=$m['nombre']?><br><?=$m['empresa']?></h6>
                    </div>
                    <div class="card-comment-body-text">
                            <p class="card-text"><?=$m['cuerpo']?></p>
                    </div>
                    <div class="star-rating" style="width: 100px; height: 20px; background-size: 20px;" data-rating="<?=$m['valoracion'] ?>" title="<?=$m['valoracion']."/5" ?>">
                    <?php $por=$m['valoracion']/5*100; ?>    
                    <div class="star-value rating-comment" style="background-size: 20px; width: <?php echo $por."%" ?>;">
                            
                        </div>
                    </div>
                    
                </div>

                
            </div>
        <?php }?>
       
                                                    
        </div>
        <?php } ?>
        <!-- Client's Comments End -->



         <div class="row justify-content-center mt-3 mb-5">
            <button type="button" class="btn btn-contactar-influencer btn-lg" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#contactar-modal">CONTACTAR ESTE INFLUENCER</button>
        </div>
        <style type="text/css">
            .btn-contactar-influencer:hover {
                color: #000;
            }
        </style>

        <div class="row mb-4 profile-container-comentario" >

            <div class="text-center user-decription-black my-3" style="font-size: 25px;" >
                Déjale una reseña a este influencer
            </div>

           
            <form action="create" method="POST" class="register-form pt-2" id="mensaje" name="mensaje" enctype="multipart/form-data">
                <?= csrf_field() ?>   
                
                <input type="hidden" id="influencerid31" name="influencerid31" value="<?=$influencer['idinfluencer']?>">
                
                
            <div class="col-lg-12 user-decription-black" style="color: #696969">
                <div class="mb-3 row">
                    <label for="nombre" class="col-sm-3 col-form-label" style="color: #606060;">Tu nombre</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="nombre" name="nombre">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="empresa" class="col-sm-3 col-form-label" style="color: #606060;">Empresa (opc)</label>
                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="empresa" name="empresa">
                    </div>
                </div>

                <div class="mb-3 row">
                    <label for="inputBusiness" class="col-sm-3 col-form-label" style="color: #606060;">Valoración</label>
                    <div class="col-sm-9" onClick="cambio()">
                        <div id="rater" name="rater" ></div>
                    </div>
                </div>
                

                <input type="hidden" id="valoracion" name="valoracion" value=" ">
                <script>
                    function cambio() {
                        document.querySelector("#valoracion").value = document.getElementById("rater").dataset.rating;
                    }

                    
                        
                
                </script>

                <div class="mb-3 row">
                    <label for="cuerpo" class="user-decription-black col-sm-3 col-form-label" style="color: #606060;">Comentario</label>
                    <div class="col-sm-9">
                      <textarea id="cuerpo" name="cuerpo" class="form-control" rows="4" style="resize: none;"></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-9">
                      <button type="submit" class="btn btn-ver-perfil btn-sm btn-on-white" style="padding: 4px 30px !important;">Enviar</button>

                    </div>

                  </div>
                </div>
            </div>

            </form>
        </div>
    <!-- Content Profile End -->


    
    <!-- ============================================================== -->
                         <!-- MODALES -->
    <!-- ============================================================== -->

    <!-- Modal Contact Influencer Start -->
    <div class="modal fade" id="contactar-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
       
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                
                <div class="modal-body " style="padding-right: 65px; padding-left: 65px; padding-top: 0px;">
                    <form action="correo" method="POST" class="register-form pt-2" id="mensajecorreo" name="mensajecorreo" enctype="multipart/form-data">
                        <?= csrf_field() ?>   
                        
                        <input type="hidden" id="influencerid32" name="influencerid32" value="<?=$influencer['idinfluencer']?>">
                    

                        <div class="d-flex justify-content-center mb-4">
                            <div class="section-title title-modal-contactar">
                                Contactarlo
                            </div>
                        </div>


                        <div class="col ">
                            <input class="input-redes" type="text" name="nombrecontacto" id="nombrecontacto" placeholder="Tu nombre">
                        </div>

                        <div class="col pt-2" style="    margin-bottom: 0px;">
                            <input class="input-redes" type="text" name="empresacontacto" id="empresacontacto" placeholder="Empresa">
                        </div>

                        <div class="user-decription-black " style="font-size: 25px;" >
                            Dato de contacto
                        </div>

                        <div class="row">
                            <div class="col-sm-3">
                                <img class="img-hecho" style="width: 50%; padding-top: 15px;" src=<?php echo base_url("img/contact-email.png")?> >
                            </div>
                            <div class="col-sm-9">
                                <div class="col pt-2" style="margin-bottom: 0px;">
                                    <input class="input-redes" type="text" name="emailcontacto" id="emailcontacto" placeholder="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-3">

                                <div style="display: flex;">
                                    <div style="flex: 33.33%;">
                                        <img class="img-hecho" style="width: 100%; padding-top: 15px;" src=<?php echo base_url("img/contact-ws.png")?> >    
                                    </div>
                                    <div style="flex: 33.33%;">
                                        
                                        <img class="img-hecho" style="width: 100%; padding-top: 15px;" src=<?php echo base_url("img/contact-number.png")?> >
                                    </div>
                                </div>    
                            </div>
                            <div class="col-sm-9">
                                <div class="col pt-2" style="margin-bottom: 0px;">
                                    <input class="input-redes" type="text" name="celularcontacto" id="celularcontacto" placeholder="">
                                </div>
                            </div>
                        </div>

                        <div class="pt-2">
                            <textarea class="input-redes" rows="4" style="resize: none;" placeholder="Escribe aquí" name="cuerpocontacto" id="cuerpocontacto"></textarea>
                        </div>

                        <div class="form-check user-decription-black mt-2" style="color: #606060">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <span>AUTORIZO de manera previa, expresa,
                            informada y explícita, a WD Studios Corp, para
                            el uso y tratamiento de mis datos. <a style="font-weight: bold; color: #606060;" href="/privacidad" target="_blank">Ver aquí.</a>
                            </span>
                        </div> 

                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-ver-perfil btn-sm btn-on-white" style="padding: 4px 30px !important;">Enviar</button>
                        </div>

                    </form>
                </div>

                <div class="modal-footer"></div>
            </div>
            </div>
       
    </div>
    <!-- Modal Contact Influencer End -->


<!-- Modal Nosotros -->
    <div class="modal fade" id="modal-nosotros" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000; background-color: #00ffff">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    
                    <div class="text-center user-decription-black" style="padding: 0 12px; font-size: 18px">
                        <p>BUSCOINFLUENCERS es una marca registrada de WD Studios Corporation S.A.S. Somos una organización abierta, emprendedora y diversa con el gusto por innovar, dedicada al diseño y desarrollo de portales de servicios, tiendas virtuales y soluciones digitales para mercados nacionales e internacionales, creando alternativas para la comercialización de productos y servicios para todo público.</p>
                    </div>
                    
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Modal Nosotros -->

