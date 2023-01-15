<div class="mb-3 mt-4" style="border-top: 1px solid #000;">
                <h2 class="mypro-section-title">MIS CUENTAS</h2>
            </div>

<!-- ============================================================== -->
<!-- ------------------ELIMINAR REDES SOCIALES     --------------->
<!-- ============================================================== -->                    
            <div id="accounts" class="row mt-4">
            <?php for ($i=0; $i < count($redes); $i++) { 
               ?>
            <form action="/elminarRedes" method="POST" class="register-form pt-2" id="elminarRedes" name="elminarRedes" enctype="multipart/form-data">
                
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
                           
           



