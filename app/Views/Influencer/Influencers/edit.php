
<body>

    <?php echo view("influencer/influencers/_headeredit"); ?>



        <div class="content">

            <div class="user-decription-black my-3" style="font-size: 25px;" >
                EDITAR PERFIL
            </div> 
            
            
<!-- ============================================================== -->
<!-- ------------------CARGAR UNA NUEVA FOTO DE PERFIL --------------->
<!-- ============================================================== -->
              
                <div class="row g-0 mb-3">
                    <div class="col-lg-2">
                        <div>
                            <img id="img-profile" class="my-profile-photo" src="<?php echo base_url("/uploads")."/".$influencer['foto_perfil']?>" >
                        </div>
                    </div>

                      
                    <div class="col-lg-8 d-flex align-items-center my-profile-justify-margin">
                       <button type="button" data-id="btn-profile" class="open-send btn btn-white-normal btn-lg" onclick="cleanUpload(); showInfoProfile();" data-bs-toggle="modal" data-bs-target="#modal-upload-image">Subir foto de perfil</button> 
                    </div>  
                </div>
               
<!-- ============================================================== -->
<!-- ------------------Actualizar PERFIL ----------------------------->
<!-- ============================================================== -->
        <form action="/influencer/actualizarPerfil" method="POST" class="register-form pt-2" enctype="multipart/form-data">
            
            <input type="hidden" id="influencerid3" name="influencerid3" value="<?=$influencer['idinfluencer']?>">
            
            <div class="row g-2 mb-3">
                <div class="col-lg-12">
                    <div>
                        <img class="icon-input" src="<?php echo base_url("img/icon-user.png")?>" ><span class="user-decription-black" style="margin-left: 12px; font-size: 18px;">NOMBRE</span>
                        <input class="input-modify my-profile-input-line" type="text" name="nombredit" id="nombredit" placeholder="<?=$influencer['nombreinflu']?>" value="<?=$influencer['nombreinflu']?>">
                    </div>
                </div> 
                <div class="col-lg-12">
                    <div>
                        <img class="icon-input" src="<?php echo base_url("img/icon-alias.png")?>" ><span class="user-decription-black" style="margin-left: 12px; font-size: 18px;">ALIAS (opcional)</span>
                        <input class="input-modify my-profile-input-line" type="text" name="aliasedit" id="aliasedit" placeholder="<?=$influencer['alias']?>" value="<?=$influencer['alias']?>">
                    </div>
                </div> 
                <div class="col-lg-12">
                    <div>
                        <img class="icon-input" src="<?php echo base_url("img/icon-user.png")?>" ><span class="user-decription-black" style="margin-left: 12px; font-size: 18px;">USUARIO</span>
                        <input class="input-modify my-profile-input-line" type="text" name="usuarioedit" id="usuarioedit" placeholder="<?=$influencer['usuario']?>" value="<?=$influencer['usuario']?>">
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <img class="icon-input" src="<?php echo base_url("img/icon-email.png")?>" ><span class="user-decription-black" style="margin-left: 12px; font-size: 18px;">Correo electrónico</span>
                        <input class="input-modify my-profile-input-line" type="text" name="email" id="email" placeholder="<?=$influencer['correo']?>" value="<?=$influencer['correo']?>" disabled>
                    </div>
                </div> 
                <div class="col-lg-12">
                    <div>
                        <img class="icon-input" style="width: 18px;" src="<?php echo base_url("img/icon-location.png")?>" ><span class="user-decription-black" style="margin-left: 12px; font-size: 18px;">País</span>
                        <input class="input-modify my-profile-input-line" type="text" name="pais" id="pais" placeholder="<?=$pais['nombre']?>" value="<?=$pais['nombre']?>" disabled>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div>
                        <img class="icon-input" style="width: 18px;" src="<?php echo base_url("img/icon-location.png")?>" ><span class="user-decription-black" style="margin-left: 12px; font-size: 18px;">Ciudad</span>
                        <input class="input-modify my-profile-input-line" type="text" name="ciudad" id="ciudad" placeholder="<?=$ciudad['nombre']?>" value="<?=$ciudad['nombre']?>"disabled>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-login btn-lg btn-register-width user-decription-black" style="font-size: 20px; width: fit-content; padding: 12px 45px;">ACTUALIZAR PERFIL</button>
            </form>
            <div class="mb-3 mt-4" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">MIS CUENTAS</h2>
            </div>

<!-- ============================================================== -->
<!-- ------------------ELIMINAR REDES SOCIALES     --------------->
<!-- ============================================================== -->                    
            <div id="accounts" class="row mt-4">
            <?php for ($i=0; $i < count($redes); $i++) { 
               ?>
            <form action="/influencer/eliminarRedes" method="POST" class="register-form pt-2" id="elminarRedes" name="elminarRedes" enctype="multipart/form-data">
                
            <input type="hidden" id="redeseliminar" name="redeseliminar" value="<?php echo $redesInfluencer[$i]['id']?>">
            <input type="hidden" id="influencerid2" name="influencerid2" value="<?=$influencer['idinfluencer']?>">
                                   
                
                <div id="sm_1" class="col-lg-6">
                    <div class="row mb-3">
                        <div class="col-md-auto">
                            <div>
                                <input style="cursor:pointer" type="image" src="<?php echo base_url("img/remove-acc.png")?>" >
                            </div>
                        </div>
                        <div class="col-md-auto my-profile-logo-sm-align">
                            <img src="<?php echo base_url("img/iconos")."/".$redes[$i]['icono']?>" >
                        </div>
                        <div class="col input-sm-align">
                            <input class="input-redes" type="text" name="textuser" id="textuser" value="<?=$redesUsuarios[$i]?>" disabled>
                        </div> 
                    </div>
                </div>
                
            </form>
            <?php } ?>

                
            </div>

<!-- ============================================================== -->
<!-- ------------------ CARGA UN MODAL PARA AGREGAR REDES SOCIALES---->
<!-- ============================================================== --> 
            <div class="col-lg-12 d-flex align-items-center" style="justify-content: left;">
                <button type="button" class="btn btn-white-normal btn-lg"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#add-acc-modal">+ &nbsp; Adicionar</button>
            </div> 


<!-- ============================================================== -->
<!-- ------------------ELIMINAR CATEGORIAS     --------------->
<!-- ============================================================== --> 
            
<div class="mb-3 mt-5" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">TUS TEMAS Y CONTENIDOS</h2>
            </div>
<form action="/influencer/elminarCategoria" method="POST" class="register-form pt-2" id="elminarCategoria" name="elminarCategoria" enctype="multipart/form-data">
                  
                <div id="topics" class="row mt-4">

                    <?php for ($i=0; $i < count($categorias); $i++) {?>
                        <input type="hidden" id="categoriaeliminar" name="categoriaeliminar" value="<?php echo $categoriainfluencer[$i]['id']?>">
                        <input type="hidden" id="influencerid3" name="influencerid3" value="<?=$influencer['idinfluencer']?>">
             
                    <div id="t_5" class="col-lg-3">
                        <div class="row mb-3">
                            <div class="col-md-auto my-profile-width-remove">
                                <div>
                                    <input style="cursor:pointer" type="image" src="<?php echo base_url("img/remove-acc.png")?>" >

                                </div>
                            </div>
                            <div class="col-md-auto user-decription-black my-profile-align-txt-content">
                            <?=$categorias[$i]['nombrecat']?>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                    
                </div>
            </form>

            <br>
            <br>
<!-- ============================================================== -->
<!-- ------------------ CARGA UN MODAL PARA AGREGAR CATEGORIAS-------->
<!-- ============================================================== --> 
            
            <div class="col-lg-12 d-flex align-items-center" style="justify-content: left;">
                <button type="button" class="btn btn-white-normal btn-lg"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#add-cat-modal">+ &nbsp; Adicionar</button>
            </div>

            <div class="mb-3 mt-5" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">TUS IDIOMAS</h2>
            </div>
<!-- ============================================================== -->
<!-- ------------------ ELIMINAR IDIOMAS ----------------------------->
<!-- ============================================================== --> 

            <div id="languages" class="row mt-4">
                
                <form action="/influencer/eliminarLenguaje" method="POST" class="register-form pt-2" id="eliminarLenguaje" name="eliminarLenguaje" enctype="multipart/form-data">
                    <?php for ($i=0; $i <count($idiomas) ; $i++) {?>
                       
                       <input type="hidden" id="idiomaeliminar" name="idiomaeliminar" value="<?php echo $idiomainfluencer[$i]['id']?>">
                       <input type="hidden" id="influencerid5" name="influencerid5" value="<?=$influencer['idinfluencer']?>">
             
                        <div id="lang_1" class="col-lg-3">
                            <div class="row mb-3">
                                <div class="col-md-auto my-profile-width-remove">
                                    <div>
                                    <input style="cursor:pointer" type="image" src="<?php echo base_url("img/remove-acc.png")?>" >
    
                                    </div>
                                </div>
                                <div class="col-md-auto user-decription-black my-profile-align-txt-content">
                                <?=$idiomas[$i]['nombre'] ?>
                                </div>
                            </div>
                        </div>

                    <?php } ?>

                   
                </form>
                
<!-- ============================================================== -->
<!-- ------------------ CARGA UN MODAL PARA AGREGAR IDIOMAS----------->
<!-- ============================================================== --> 

                <div class="col-lg-12 d-flex align-items-center mt-4" style="justify-content: left;">
                        
                <button type="button" class="btn btn-white-normal btn-lg"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#add-lan-modal">+ &nbsp; Adicionar</button>
                    </div> 
                

            </div>

            


            <div class="mb-3 mt-5" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">MI VIDEO</h2>
            </div>

<!-- ============================================================== -->
<!-- ------------------ ELIMINAR VIDEO ------------------------------->
<!-- ============================================================== --> 
            <div class="row mb-2 user-decription-black">
                        
                    <div id="video-prev" class="col-lg-8">
                    <?php if ($influencer['video']!=null) { ?>
                        <div>
                            <video width="100%" height="400" class=" video-preview" style="background-color: #000" controls="controls"><source src="<?php echo base_url("/video")."/".$influencer['video']?>" type="video/mp4"></video>
                        </div>
                    
                        
                        <form action="/influencer/eliminarVideo" method="POST" class="register-form pt-2" id="eliminarVideo" name="eliminarVideo" enctype="multipart/form-data">
                            <input type="hidden" id="influencerid7" name="influencerid7" value="<?=$influencer['idinfluencer']?>">
                 
                            <input style="cursor:pointer" type="image" src="<?php echo base_url("img/remove-acc.png")?>" >
    
                        </form>
                    <?php } ?> 
                    </div>
                            
                </div>
<!-- ============================================================== -->
<!-- ------------------ MODEL PARA CARGAR VIDEO ---------------------->
<!-- ============================================================== -->

                <div class="col-lg-12 d-flex align-items-center mt-4" style="justify-content: left;">
                    <button type="button" class="btn btn-white-normal btn-lg"  data-bs-dismiss="modal" data-bs-toggle="modal" onclick="cleanVid();" data-bs-target="#modal-upload-video">+ &nbsp; Cambiar Video</button>
                </div>
            
                <div class="mb-3 mt-5" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">MI GALERIA</h2>
            </div>

<!-- ============================================================== -->
<!-- ------------------ ELIMINAR FOTO DE GALERIA ---------------------->
<!-- ============================================================== -->

            
        <div id="gallery" class="d-flex justify-content-left flex-wrap" style="padding-top: 10px; padding-bottom: 35px;">
            
            <?php foreach ($galeria as $key => $m) {?>
            <form action="/influencer/eliminarFotoGaleria" method="POST" class="register-form pt-2" id="eliminarFotoGaleria" name="eliminarFotoGaleria" enctype="multipart/form-data">
                        
                <input type="hidden" id="fotoGaeliminar" name="fotoGaeliminar" value="<?php echo $m['idfoto']?>">
                <input type="hidden" id="influencerid10" name="influencerid10" value="<?=$influencer['idinfluencer']?>">
                       
                           <div id="gal-img0" class="gallery-profile-show-margin">
                               <div class="gallery-profile-show">
                                   <img class="upload-gal-img" src="<?php echo base_url("uploads")."/".$m['url']?>">
                               </div>
                               <div class="pt-2">
                                    <input style="cursor:pointer" type="image" src="<?php echo base_url("img/remove-acc.png")?>" >
                               </div>
                           </div>
                                                      
            </form>
            <?php } ?>

            </div>
<!-- ============================================================== -->
<!-- ------------------ MODAL PARA AGREGAR FOTO A LA GALERIA --------->
<!-- ============================================================== -->
            <form action="/influencer/agregarFotoGaleria" method="POST" class="register-form pt-2" id="agregarFotoGaleria" name="agregarFotoGaleria" enctype="multipart/form-data">
            
                <div class="col-lg-12 d-flex align-items-center" style="justify-content: left;">
                    <button id="btn-img1" data-id="btn-gallery" type="button" class="open-send btn btn-white-normal btn-lg" onclick="cleanUpload(); hideInfoProfile();" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-upload-image-galeria">subir fotos</button>
                </div> 
            </form>



            <div class="mb-3 mt-5" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">MI RESEÑA</h2>
            </div>

<!-- ============================================================== -->
<!-- ------------------ CARGAR O EDITAR LA RESEÑA -------------------->
<!-- ============================================================== -->

            <form action="/influencer/editarResenia" method="POST" class="register-form pt-2" id="editarResenia" name="editarResenia" enctype="multipart/form-data">
            
                <input type="hidden" id="influencerid12" name="influencerid12" value="<?=$influencer['idinfluencer']?>">
                       
                <div class="mb-4 ">
                    <textarea class="input-redes" id="reseniaInfluencer" name="reseniaInfluencer" style="resize: none; width: 100%;" rows="6" placeholder="">
                        <?php echo $influencer['resenia']; ?>    
                    </textarea>
                </div>

            
                <div class="col-lg-12 d-flex align-items-center" style="justify-content: left;">
                    <button id="btn-img1"  type="submit" class="open-send btn btn-white-normal btn-lg" >Actualizar</button>
                </div> 
            </form>


            <div class="mb-3 mt-5" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">MARCAS / EMPRESAS / EXPERIENCIA</h2>
            </div>

<!-- ============================================================== -->
<!-- ------------------ Eliminar MARCAS ------------------------------>
<!-- ============================================================== -->
            <div id="experience" class="row mt-4">
                         
            
                <?php for ($i=0; $i <count($influencermarca) ; $i++) {?>
                <form action="/influencer/eliminarMarcas" method="POST" class="register-form pt-2" id="eliminarMarcas" name="eliminarMarcas" enctype="multipart/form-data">
                
                       
                       <input type="hidden" id="marcaeliminada" name="marcaeliminada" value="<?php echo $influencermarca[$i]['idmarca']?>">
                       <input type="hidden" id="influencerid13" name="influencerid13" value="<?=$influencer['idinfluencer']?>">
               
                 
                    <div id="exp_1" class="col-lg-3">
                        <div class="row mb-3">
                            <div class="col-md-auto my-profile-width-remove">
                                <div>
                                    <input style="cursor:pointer" type="image" src="<?php echo base_url("img/remove-acc.png")?>" >
                                </div>
                            </div>
                            <div class="col-md-auto user-decription-black my-profile-align-txt-content">
                            <?=$influencermarca[$i]['nombre'] ?> 
                            </div>
                        </div>
                    </div>
                </form>
            <?php } ?>

<!-- ============================================================== -->
<!-- ------------------ MODAL PARA AGREGAR MARCAS -------------------->
<!-- ============================================================== -->

                    <div class="col-lg-12 d-flex align-items-center mt-4" style="justify-content: left;">
                        <button type="button" class="btn btn-white-normal btn-lg"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#add-empresa-modal">+ &nbsp; Adicionar</button>
                    </div>
                
            </div>

            



            <div class="mb-3 mt-5" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">MI MÉTODOS DE PAGO</h2>
            </div>

<!-- ============================================================== -->
<!-- ------------------ Eliminar PAGOS ------------------------------>
<!-- ============================================================== -->
        <?php for ($i=0; $i <count($pagos) ; $i++) {?>
            <form action="/influencer/eliminarPagos" method="POST" class="register-form pt-2" id="eliminarPagos" name="eliminarPagos" enctype="multipart/form-data">
                <input type="hidden" id="pagoeliminada" name="pagoeliminada" value="<?php echo $influencerPagos[$i]['id']?>">
                <input type="hidden" id="influencerid15" name="influencerid15" value="<?=$influencer['idinfluencer']?>">
                  
                  
                <div id="exp_1" class="col-lg-3">
                    <div class="row mb-3">
                        <div class="col-md-auto my-profile-width-remove">
                            <div>
                                <input style="cursor:pointer" type="image" src="<?php echo base_url("img/remove-acc.png")?>" >
                            </div>
                        </div>
                        <div class="col-md-auto user-decription-black my-profile-align-txt-content">
                        <?=$pagos[$i]['nombre'] ?>
                        </div>
                    </div>
                </div>
            </form>
        <?php } ?>

<!-- ============================================================== -->
<!-- ------------------ MODAL PARA AGREGAR PAGOS --------------------->
<!-- ============================================================== -->

        <div class="col-lg-12 d-flex align-items-center mt-4" style="justify-content: left;">
            <button type="button" class="btn btn-white-normal btn-lg"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#add-pago-modal">+ &nbsp; Adicionar</button>
        </div>
                
<!-- ============================================================== -->
<!-- ------------------ AGREGAR OFERTAS ------------------------------>
<!-- ============================================================== -->
            

            <div class="mb-3 mt-5" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">MIS PROMOS Y OFERTAS</h2>
            </div>
        <form action="/influencer/editarOferta" method="POST" class="register-form pt-2" id="eliminarPagos" name="eliminarPagos" enctype="multipart/form-data">
            <input type="hidden" id="influencerid19" name="influencerid19" value="<?=$influencer['idinfluencer']?>">
                 
            <div class="col-lg-12">
                <div>
                    
                    <input class="input-modify my-profile-input-line" type="text" name="promocion" id="promocion" placeholder="Escriba su promoción" value="<?php if(!($influencer['oferta']==null||$influencer['oferta']=="")){ echo $influencer['oferta'];  }?>">
                    <button type="submit" class="btn btn-white-normal btn-lg" >actualizar Promoción</button>
                </div>
            </div> 


           
        </form>

        <div class="d-flex justify-content-center text-center my-5">
                <div class="btn-register">
                    <button type="button" class="btn btn-login btn-lg btn-register-width user-decription-black" style="font-size: 20px; width: fit-content; padding: 12px 45px;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#confirmation-changes-modal">GUARDAR CAMBIOS</button>
                </div>
            </div>

        </div>
        <!-- content -->

    </div>
    <!-- Content Mi Perfil End -->

    

<!-- ============================================================== -->
                    <!-- MODALES -->
<!-- ============================================================== -->

    <!-- Modal agregar RED SOCIAL -->
    <div class="modal fade" id="add-acc-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body " style="padding-right: 65px; padding-left: 65px; padding-top: 0px;">

                    <div class="user-decription-black text-center" style="font-size: 25px;" >
                        <p>Selecciona la red social<br>
                        y escribe tu usuario</p>
                    </div>
                    <form action="/influencer/agregarRedSocial" method="POST" class="register-form pt-2" id="agregarRedSocial" name="agregarRedSocial" enctype="multipart/form-data">
                        <input type="hidden" id="influencerid1" name="influencerid1" value="<?=$influencer['idinfluencer']?>">
                        <div class="col mt-4">
                            <select id="redessocialesagregar" name="redessocialesagregar" class="form-select select-sm-profile" aria-label="Default select example">
                                <option selected disabled>Selecciona la red social</option>
                                <?php foreach ($redesNoUsadas as $key => $m) {?>
                                    <option value="<?=$m['idredes']?>"><?=$m['nombre']?></option>
                                <?php }?>
                                
                            
                            </select>
                                
                        </div>

                        <div class="col pt-3">
                            <input class="input-redes" type="text" name="textousuariored" id="textousuariored" placeholder="Tu usuario">
                        </div>
                    
                        <div class="text-center mt-3">
                        <button type="submit" class="btn btn-get-info user-decription btn-lg" >Adicionar</button>
                        </div>

                    </form>

                </div>

                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!--FINAL Modal AGREGAR RED SOCIAL -->


     <!-- Modal AGREGAR CATEGORIA -->
     <div class="modal fade" id="add-cat-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body " style="padding-right: 65px; padding-left: 65px; padding-top: 0px;">

                    <div class="user-decription-black text-center" style="font-size: 25px;" >
                        <p>Agrega un Idioma</p>
                    </div>

                    <form action="/influencer/adicionarCategoria" method="POST" class="register-form pt-2" id="adicionarCategoria" name="adicionarCategoria" enctype="multipart/form-data">
                        <input type="hidden" id="influencerid4" name="influencerid4" value="<?=$influencer['idinfluencer']?>">
                    
                        

                            <select id="categorianew" name="categorianew"class="form-select select-sm-profile" onchange="addTopic(this);" aria-label="Default select example">
                                <option selected disabled>Selecciona un tema</option>
                                <?php foreach ($categoriasNoUsadas as $key => $m) {?>
                                    <option value="<?=$m['idcategoria'] ?>"><?=$m['nombrecat'] ?></option>
                                    <?php }?>
                                
                                
                            </select>
                        
                        <div class="col-md-auto user-decription-black mt-2" style=" font-size: 18px; padding: 6px;">
                            <input type="submit" class="btn btn-white-normal btn-lg"   value="Adicionar"/>
                            
                        </div> 

                    </form>

                </div>

                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!--FINAL Modal AGREGAR CATEGORIA -->



    <!-- Modal AGREGAR LENGUAJE -->
    <div class="modal fade" id="add-lan-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body " style="padding-right: 65px; padding-left: 65px; padding-top: 0px;">

                    <div class="user-decription-black text-center" style="font-size: 25px;" >
                        <p>Agrega un Idioma</p>
                    </div>

                    <form action="/influencer/adicionarIdioma" method="POST" class="register-form pt-2" id="adicionarIdioma" name="adicionarIdioma" enctype="multipart/form-data">
                        <input type="hidden" id="influencerid6" name="influencerid6" value="<?=$influencer['idinfluencer']?>">
                    
                        

                            <select id="idiomanew" name="idiomanew"class="form-select select-sm-profile" >
                                <option selected disabled>Selecciona un tema</option>
                                <?php foreach ($idimanousado as $key => $m) {?>
                                    <option value="<?=$m['ididioma'] ?>"><?=$m['nombre'] ?></option>
                                    <?php }?>
                                
                                
                            </select>
                        
                        <div class="col-md-auto user-decription-black mt-2" style=" font-size: 18px; padding: 6px;">
                            <input type="submit" class="btn btn-white-normal btn-lg"   value="Adicionar"/>
                            
                        </div> 

                    </form>
                    
                </div>

                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- final Modal AGREGAR LENGUAJE -->

    

    <!-- Modal ACTUALIZAR UN VIDEO -->
    <div class="modal fade" id="modal-upload-video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" onclick="closeVid()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">

                <div class="user-decription-black text-center" style="font-size: 25px;" >
                        <p>Agrega un Video</p>
                    </div>

                <form action="/influencer/cambiarVideo" method="POST" class="register-form pt-2" id="cambiarFotoPerfil" name="cambiarFotoPerfil" enctype="multipart/form-data">
            

                    <input type="hidden" id="influencer9" name="influencer9" value="<?=$influencer['idinfluencer']?>">

                    <div class="file-upload">
                        
                        <div class="image-upload-wrap">
                            <input id="newvideo" name="newvideo" class="file-upload-input" type='file' accept="video/mp4, video/*"/>
                            
                        </div>
                        </br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-get-info user-decription btn-lg" >Cambiar video</button>
                        </div>
                        
                    </div>
                </form>

                </div>
                <div class="modal-footer user-decription-black" style="font-weight: bold; "></div>
            </div>
        </div>
    </div>
    <!-- FINAL Modal ACTUALIZAR UN VIDEO --> 



    <!-- Modal MODIFICAR FOTO PERFIL -->
    <div class="modal fade" id="modal-upload-image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">

                    <div id="info-profile" class="text-center user-decription-black" style="font-weight: bold; font-size: 15px; margin-left: auto; display: none;">
                        Selecciona una imagen cuadrada!
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                <div class="user-decription-black text-center" style="font-size: 25px;" >
                        <p>Agrega una Foto de Perfil</p>
                    </div>
                <form action="/influencer/cambiarFotoPerfil" method="POST" class="register-form pt-2" id="cambiarFotoPerfil" name="cambiarFotoPerfil" enctype="multipart/form-data">
            

                    <input type="hidden" id="picId" name="picId" value="<?=$influencer['idinfluencer']?>">

                    <div class="file-upload">
                        
                        <div class="image-upload-wrap">
                            <input id="newfoto" name="newfoto" class="file-upload-input" type='file'   />
                            
                        </div>
                        </br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-get-info user-decription btn-lg" >Cambiar Foto de Perfil</button>
                        </div>
                        
                    </div>
                </form>
                </div>
                <div class="modal-footer user-decription-black" style="font-weight: bold; "></div>
            </div>
        </div>
    </div>
    <!-- FINAL MODAL ACTUALIZAR FOTO PERFIL -->


     <!-- Modal AGREGAR FOTO A LA GALERIA -->
     <div class="modal fade" id="modal-upload-image-galeria" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">

                    <div id="info-profile" class="text-center user-decription-black" style="font-weight: bold; font-size: 15px; margin-left: auto; display: none;">
                        Selecciona una imagen cuadrada!
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                <div class="user-decription-black text-center" style="font-size: 25px;" >
                        <p>Agrega algunas Fotos a tu galeria</p>
                    </div>
                <form action="/influencer/agregarFotoGaleria" method="POST" class="register-form pt-2" id="agregarFotoGaleria" name="agregarFotoGaleria" enctype="multipart/form-data">
            

                    <input type="hidden" id="influencer11" name="influencer11" value="<?=$influencer['idinfluencer']?>">

                    <div class="file-upload">
                        
                        <div class="image-upload-wrap">
                            <input id="newfotoGaleria[]" name="newfotoGaleria[]" class="file-upload-input" type='file' multiple="" accept="image/png,image/jpeg"  />
                            
                        </div>
                        </br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-get-info user-decription btn-lg" >Cambiar Fotos de tu Galeria</button>
                        </div>
                        
                    </div>
                </form>
                </div>
                <div class="modal-footer user-decription-black" style="font-weight: bold; "></div>
            </div>
        </div>
    </div>
    <!-- FINAL AGREGAR UNA FOTO A LA GALERIA -->



    <!-- Modal CREAR UNA EMPRESA -->
    <div class="modal fade" id="add-empresa-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body " style="padding-right: 65px; padding-left: 65px; padding-top: 0px;">

                    <div class="user-decription-black text-center" style="font-size: 25px;" >
                        <p>Escribe una empresa o marca</p>
                    </div>

                    <form action="/influencer/adicionarEmpresa" method="POST" class="register-form pt-2" id="adicionarEmpresa" name="adicionarEmpresa" enctype="multipart/form-data">
                        <input type="hidden" id="influencerid16" name="influencerid16" value="<?=$influencer['idinfluencer']?>">
                            
                        <div class="col mt-4">
                            <input id="empresanewtxt" name="empresanewtxt"  class="input-redes" type="text"  placeholder="Marca / Empresa">
                        </div>
                        <div class="col mt-4">
                            <select id="tipoempres" name="tipoempres"  class="input-redes" type="text"  placeholder="Marca / Empresa">
                            <option value="publica">Publica</option>
                            <option value="privada">Privada</option>
                                </select>
                        </div>
                            
                        
                        <div class="text-center mt-3" style=" font-size: 18px; padding: 6px;">
                            <input type="submit" class="btn btn-white-normal btn-lg"   value="Adicionar"/>
                            
                        </div> 

                    </form>
                </div>

                <div class="modal-footer"></div>

            </div>
        </div>
    </div>
    <!-- FINAL MODAL CREAR EMPRESA -->


        <!-- Modal CREAR UN PAGO -->
        <div class="modal fade" id="add-pago-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body " style="padding-right: 65px; padding-left: 65px; padding-top: 0px;">

                    <div class="user-decription-black text-center" style="font-size: 25px;" >
                        <p>Agrega una nueva forma de Pago</p>
                    </div>

                    <form action="/influencer/adicionarPago" method="POST" class="register-form pt-2" id="adicionarPago" name="adicionarPago" enctype="multipart/form-data">
                        <input type="hidden" id="influencerid17" name="influencerid17" value="<?=$influencer['idinfluencer']?>">
                            <select id="pagonew" name="pagonew"class="form-select select-sm-profile" >
                                <option selected disabled>Selecciona un pago</option>
                                <?php foreach ($pagosNoUsados as $key => $m) {?>
                                    <option value="<?=$m['idpago'] ?>"><?=$m['nombre'] ?></option>
                                    <?php }?>
                                
                                
                            </select>

                    

                            
                        
                        <div class="text-center mt-3" style=" font-size: 18px; padding: 6px;">
                            <input type="submit" class="btn btn-white-normal btn-lg"   value="Adicionar"/>
                            
                        </div> 

                    </form>
                </div>

                <div class="modal-footer"></div>

            </div>
        </div>
    </div>
    <!-- FINAL MODAL CREAR UN PAGO -->




    <!-- Modal Confirmación Start -->
    <div class="modal fade" id="confirmation-changes-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <img class="img-hecho mb-3" src="<?php echo base_url("img/hecho.png")?>" >
                    <div class="text-center user-decription-black" style="font-weight: bold; font-size: 35px">
                        
                        <p>¡HECHO!</p>
                    </div>
                    <div class="text-center user-decription-black" style="font-weight: bold; font-size: 15px">
                        <p>Los cambios se han realizado correctamente.</p>
                    </div>
                    
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Modal Confirmación End -->

    

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
