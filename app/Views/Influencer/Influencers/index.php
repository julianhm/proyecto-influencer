
<body>
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    setTimeout(function() {
        $(".alert").fadeOut(1500);
    },3000);
 
    
});
</script>

<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
<!--
<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    An example alert with an icon
  </div> -->
</div>
<?php if($mensaje!=""){  ?>
    <div class="alert alert-success d-flex align-items-center" role="alert">

<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
<div>
  <?php echo $mensaje; ?>
  
</div>

</div>
<?php } ?>

<!--
<div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    An example warning alert with an icon
  </div>
</div>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    An example danger alert with an icon
  </div>
</div>
-->

    <!-- Header Start -->
    <div class="container-fluid ">
        <div class="row ">
            <div class="text-center text-main-title" >
                    <b>LOS SEGUIDORES QUE TU MARCA NECESITA SIGUEN A UN INFLUENCER</b>
            </div>
            
            <div>
                <img class="main-logo" src="img/logo-white.png" alt="Binf" >
            </div>

            <div class="col bg-main-inf" >
                <div class="text-center type-user">
                    SOY
                </div>
                
                <div class="text-center user-decription">
                    Si eres influencer y quieres darte a conocer <br>
                    fácilmente, comienza aquí.
                </div>
                <div class="text-center pt-5" >
                    <a href="influencer/new">
                        <button type="button" class="btn btn-light btn-sm" style="width: 180px; font-weight: 100;">REGISTRARME</button>
                    </a>
                    
                </div>
                <div class="text-center pt-3" >

                    <button type="button" class="btn btn-sm btn-login" style="width: 180px; font-weight: 100;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      INICIAR SESIÓN
                    </button>
                      
                </div>
            </div>
            
            <div class="col bg-main-cli" >
                <div class="text-center type-user">
                    BUSCO
                </div>
                <div class="text-center user-decription">
                    Si buscas un influencer para fortalecer tu marca, <br>
                    impulsar tu negocio, promover un evento, una <br>
                    campaña, una idea, llegaste al lugar indicado.
                </div>
                <div class="text-center pt-5" >
                    <a href="<?=base_url('busqueda')?>">
                        <button type="button" class="btn btn-light btn-sm" style="width: 180px; font-weight: 100;">BUSCAR</button>
                    </a>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Talentos Recientes Start -->
    <div class="container-fluid py-5">
        <div class="container-fluid">
            <div class="mx-auto text-center mb-5 main-section-title" style="max-width: 500px;">
                Talentos recientes
            </div>
           
            <div class="owl-one owl-carousel px-5">
                 <?php foreach ($datos as $key => $m) {?>
                    <div>
                        <div class="product-item position-relative d-flex flex-column text-center">
                            <img class="img-fluid mb-4" width="80" height="80" src=<?php echo base_url('uploads')."/".$m['foto_perfil']?> alt="" >
                            <h6 class="user-decription-black"><?=$m['nombreinflu']?> <br> <?=$m['alias']?> <br> <?=$m['nombrecat']?> </h6>
                            <div class="container-fluid">
                                <a href="<?php echo base_url('perfil')."/".$m['idinfluencer']?>"><button type="button" class="btn btn-ver-perfil btn-sm btn-on-white">Ver perfil</button></a>
                                
                            </div>
                        </div>
                    </div>

                <?php } ?> 
                
                
            </div>
            <br>
            <br>
        </div>
    </div>
    <!-- Talentos Recientes End -->


    <div >
      <img class="line" src="img/line.png">
    </div>


    <!-- Mundo influencer Start -->
    <div class="container-fluid py-5">
        <div class="container-fluid">
            <div class="mx-auto text-center mb-5 main-section-title" style="max-width: 500px;">
                Mundo influencer
            </div>
            <div class="owl-two owl-carousel owl-theme">
                <?php  foreach ($noticias as $key => $m) {?>
                    <div class="position-relative d-flex flex-column user-decription">
                    <div class="mundo-description"><?=$m['titulo']?>
                    </div>
                    <img class="img-fluid-mundo-influencer mb-4" src="<?=base_url('fotosnoticias')."/".$m['url_foto']?>">
                </div>
                <?php }?>
                
            </div>
        </div>
    </div>
    <!-- Mundo influencer End -->



    <!-- Categoria Start -->
    <div class="container-fluid ">
        <div class="container-fluid">
            <div class="mx-auto text-center mb-5 main-section-title" style="max-width: 600px;">
                Encuéntralo por categoría
            </div>
            
            <div class="owl-three owl-carousel px-5">
            
                <?php foreach ($categorias as $key => $m) {?>
                                   <div>
                       <div class="product-item position-relative d-flex flex-column text-center" >
                           <a href="#" ><img class="img-fluid-categoria" src="<?=base_url('img').'/categorias/'.$m['imagen']?>" alt="Tecnologia"></a>
                           <div class="py-2 categoria-description " style="background-color: #B3AFAE; border: 0px;">
                               <?php echo $m['nombrecat'] ?>
                           </div>                                
                       </div>
                   </div>
   
                   <?php } ?>
                <div >
                    <div class="product-item position-relative d-flex flex-column text-center" >
                        <img class="img-fluid-categoria" src="img/cat2.png" alt="Gamer">
                        <div class="py-2 categoria-description " style="background-color: #00a9a9;">
                            Gamer
                        </div>  
                    </div>
                </div>
                <div >
                    <div class="product-item position-relative  d-flex flex-column text-center">
                        <img class="img-fluid-categoria" src="img/cat3.png" alt="Nutricion">
                        <div class="py-2 categoria-description " style="background-color: #e88082;">
                            Nutrición
                        </div> 
                    </div>
                </div>
                <div >
                    <div class="product-item position-relative  d-flex flex-column text-center" >
                        <img class="img-fluid-categoria" src="img/cat4.png" alt="Belleza">
                        <div class="py-2 categoria-description " style="background-color: #ffacff;">
                            Belleza
                        </div> 
                    </div>
                </div>
                <div >
                    <div class="product-item position-relative  d-flex flex-column text-center">
                        <img class="img-fluid-categoria" src="img/cat5.png" alt="Viajes">
                        <div class="py-2 categoria-description " style="background-color: #ffd856; border: 0px;">
                            Viajes
                        </div> 
                    </div>
                </div>
                <div >
                    <div class="product-item position-relative  d-flex flex-column text-center">
                        <img class="img-fluid-categoria" src="img/cat1.png" alt="Otra">
                        <div class="py-2 categoria-description " style="background-color: #32244e;">
                            Otra
                        </div>  
                    </div>
                </div>
                <div >
                    <div class="product-item position-relative  d-flex flex-column text-center">
                        <img class="img-fluid-categoria" src="img/cat2.png" alt="Otra 2">
                        <div class="py-2 categoria-description " style="background-color: #00a9a9;">
                            Otra 2
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
    <!-- Categoria End -->


    <!-- El/la + seguido Start -->
    <div class="container-fluid pt-3" style="background-color: #00ffff;">
        <div class="container-fluid">
            <div class="mx-auto text-center mb-5 main-section-title" style="max-width: 600px;">
                El/la más seguidos(as) en
            </div>
            
            <div class="owl-four owl-carousel px-5">
                 
            <?php foreach ($informacion as $key => $m) {?>
                           
                           <div>
                               <div class="product-item position-relative d-flex flex-column text-center">
                                   <div class="tag-categoria">
                                       <?=$m['nombrecat']?>
                                   </div>
                                   <img class="img-fluid-el-mas mb-2" src="<?=base_url('uploads')."/".$m['foto_perfil']?>" >
                                   <h6 class="user-decription-black"><?=$m['nombreinflu']?> <br> <?=$m['alias']?></h6>
                                   <div class="container-fluid">
                                       <div class="row mb-3">
                                           <div class="col" style="padding-right: 0px;">
                                               <img class="img-sm-main" src="<?=base_url('img')."/iconos/".$m['icono']?>" >
                                           </div>
                                           <div class="col" >
                                               <p class="followers-sm-main"><?=$m['cant_seguidores']?></p>
                                           </div>
                                       </div>
                                       <a href="<?php echo base_url('perfil')."/".$m['idinfluencer']?>"><button type="button" class="btn btn-ver-perfil btn-sm btn-on-white">Ver perfil</button></a>
                                   </div>
                               </div>
                           </div>
                           <?php } ?>
                           
            </div>
            
        </div>
    </div>
    <!-- El/la + seguido End -->


    <!-- Donar Start -->
   <div class="container py-5 ">
        <div class="row">
            <div class="col-8 text-center donar-decription-black" style="padding-left: 20%;">
                Buscoinfluencers es un servicio gratuito, construido y sostenido para la industria de generadores de <br>
                contenido. Es de uso y consulta libre. Si deseas ayudarnos a su sostenimiento y que siempre pueda <br>
                estar disponible, bienvenidas las donaciones. Cualquier cariño se te agradecerá.
            </div>
            <div class="col-4" >
                <img class="img-donar" src="img/donar.png" >
            </div>
        </div>
        <div class="row">
            <div class="col" style="padding-left: 20%;">
                <button type="button" class="btn btn-contactar btn-lg" data-bs-toggle="modal" data-bs-target="#exampleModal2">Contáctanos si necesitas un representante</button>
            </div>
        </div>
    </div>
    <!-- Donar End -->


    <!-- ============================================================== -->
                        <!-- MODALES -->
    <!-- ============================================================== -->
    
    <!-- Modal Login Start -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <form class="user-decription-black" action="/edit">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="text-center user-decription-black" style="font-weight: bold; display: block;">USUARIO</label>
                            <input type="email" class="input-redes" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="correo electrónico o alias">
                    
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="text-center user-decription-black" style="font-weight: bold; display: block;">CONTRASEÑA</label>
                            <input type="password" class="input-redes" id="exampleInputPassword1" placeholder="Contraseña">
                        </div>

                        <input type="submit" class="btn btn-ingresar user-decription btn-lg" style="border-radius: 50px; width: 100%;">INGRESAR</input>

                    </form>
                </div>
                <div class="modal-footer user-decription-black" style="font-weight: bold; ">
                    
                    <a style="color: #000;" href="">¿Olvidaste tu contraseña?</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Login End -->

    

    <!-- Modal Representante Start -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <div class="text-center user-decription-black" style="font-weight: bold; font-size: 35px">
                        
                        <p>¿BUSCAS <br> REPRESENTANTE?</p>
                    </div>
                    <form class="user-decription-black" style="padding-left: 40px; padding-right: 40px;">
                        <div class="mb-3">
                            <input type="text" class="input-redes" style="text-align: center;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TU NOMBRE">
                    
                        </div>
                        <div class="mb-3">
                            <input type="email" class="input-redes" style="text-align: center;" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="TU CORREO">
                    
                        </div>

                        <div class="text-center">
                            <button type="button" class="btn btn-get-info user-decription btn-lg" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#exampleModal3">SOLICITAR INFORMACIÓN</button>
                        </div>

                    </form>
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Modal Representante End -->



    <!-- Modal Representante Confirmación Start -->
    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <img class="img-hecho mb-3" src="img/hecho.png" >
                    <div class="text-center user-decription-black" style="font-weight: bold; font-size: 35px">
                        
                        <p>¡HECHO!</p>
                    </div>
                    <div class="text-center user-decription-black" style="font-weight: bold; font-size: 15px">
                        <p>PRONTO NOS CONTACTAREMOS CONTIGO. <br>
                            EL EQUIPO BINF.</p>
                    </div>
                    
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Modal Representante Confirmación End -->


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

    

