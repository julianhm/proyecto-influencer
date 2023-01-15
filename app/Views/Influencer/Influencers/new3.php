<body>


    <!-- Header Start -->
    <div id="header" class="container-fluid mb-3 px-4 headerNav">
        <div class="row ">
            <div class="row g-0 pb-2 position_title">
                <div class="text-center text-title-normal" >
                    <b>LOS SEGUIDORES QUE TU MARCA NECESITA SIGUEN A UN INFLUENCER</b>
                </div>
            </div>
            <div class="mx-auto text-end mb-2 mt-2 main-section-title">
               Regístrate
            </div>
            <hr class="header_black_line">
            <a style="display: contents;" href="index.html"><img class="logo-header-normal" src=<?php echo base_url('img/logo-blue.png')?> > </a>

                
        </div>

    </div>
    
    <!--MENSAJES FLASH-->
    <?php if($mensaje!=""){  ?>
        <div class="alert alert-success d-flex align-items-center" role="alert">

        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Alert:"><use xlink:href="#check-circle-fill"/></svg>
        <div>
        <?php echo session('mensaje'); ?>
        
        </div>

        </div>
    <?php } ?>
    <!-- Header End -->


   
    <!-- Content Register Start -->
    <div class="container">
        <div class="row">
            <div class="text-center" >

            <?php  echo $validation->listErrors(); ?>
            <div class="content">

            <div class="user-decription-black my-3" style="font-size: 25px;" >
                EDITAR PERFIL
            </div> 
                
                <div class="d-flex justify-content-center mb-4">
                    <div class="section-title">
                        Idioma en que creas tu contenido
                    </div>
                </div>

            <form action="../continuarregistro" method="POST" class="register-form pt-2" enctype="multipart/form-data">
            <?= csrf_field() ?>    
           

            <input type="hidden" id="influencerid30" name="influencerid30" value="<?=$influencer['idinfluencer']?>">
                


                <div class="col my-4" style="padding-left: 25%; padding-right: 25%;">
                    <select id="langSelect" name="langSelect" onchange="addLanguage()" class="form-select select-sm-profile" aria-label="Default select example">
                        <option selected disabled="">Selecciona un idioma</option>
                        <?php foreach ($idiomas as $key => $m) {?>
                            <option value="<?=$m['ididioma'] ?>"><?=$m['nombre'] ?></option>
                       <?php } ?>
                        
                        
                    </select>
                        
                </div>

            

                <div class="d-flex justify-content-center mb-4">
                    <div class="section-title">
                        ¿De qué temas hablas?
                    </div>
                </div>

                                  
                <div class="row mb-4">

                    <div class="select-size align-topics">
                        <input type="checkbox" name="gastronomia" id="topic1" />
                        <input type="checkbox" name="tecnologia" id="topic2" />
                        <input type="checkbox" name="ciencia" id="topic3" />
                        <input type="checkbox" name="arte" id="topic4" />
                        <input type="checkbox" name="moda" id="topic5" />
                        <input type="checkbox" name="educacion" id="topic6" />

                        <label class="label-topic" for="topic1">Gastronomía</label>
                        <label class="label-topic" for="topic2">Tecnología</label>
                        <label class="label-topic" for="topic3">Ciencia</label>
                        <label class="label-topic" for="topic4">Arte y Diseño</label>
                        <label class="label-topic" for="topic5">Moda</label>
                        <label class="label-topic" for="topic6">Educacion</label>
                    </div>

                    <div class="select-size align-topics">
                        <input type="checkbox" name="farandula" id="topic7" />
                        <input type="checkbox" name="entretenimiento" id="topic8" />
                        <input type="checkbox" name="cine" id="topic9" />
                        <input type="checkbox" name="politica" id="topic10" />
                        <input type="checkbox" name="juegos" id="topic11" />
                        <input type="checkbox" name="deportes" id="topic12" />

                        <label class="label-topic" for="topic7">Farándula</label>
                        <label class="label-topic" for="topic8">Entretenimiento</label>
                        <label class="label-topic" for="topic9">Cine</label>
                        <label class="label-topic" for="topic10">Política y sociedad</label>
                        <label class="label-topic" for="topic11">Juegos</label>
                        <label class="label-topic" for="topic12">Deportes</label>
                    </div>
                    

                    <div class="select-size align-topics">
                        <input type="checkbox" name="estilo" id="topic13" />
                        <input type="checkbox" name="belleza" id="topic14" />
                        <input type="checkbox" name="talentos" id="topic15" />
                        <input type="checkbox" name="nutricion" id="topic16" />
                        <input type="checkbox" name="salud" id="topic17" />
                        <input type="checkbox" name="amor" id="topic18" />

                        <label class="label-topic" for="topic13">Estilo de vida</label>
                        <label class="label-topic" for="topic14">Belleza</label>
                        <label class="label-topic" for="topic15">Talentos especiales</label>
                        <label class="label-topic" for="topic16">Nutrición</label>
                        <label class="label-topic" for="topic17">Salud</label>
                        <label class="label-topic" for="topic18">Amor</label>
                    </div>

                    <div class="select-size align-topics">
                        <input type="checkbox" name="humanidades" id="topic19" />
                        <input type="checkbox" name="transporte" id="topic20" />
                        <input type="checkbox" name="sexo" id="topic21" />
                        <input type="checkbox" name="musica" id="topic22" />
                        <input type="checkbox" name="turismo" id="topic23" />
                        <input type="checkbox" name="aventura" id="topic24" />

                        <label class="label-topic" for="topic19">Humanidades</label>
                        <label class="label-topic" for="topic20">Transporte</label>
                        <label class="label-topic" for="topic21">Sexo</label>
                        <label class="label-topic" for="topic22">Música</label>
                        <label class="label-topic" for="topic23">Turismo y viajes</label>
                        <label class="label-topic" for="topic24">Aventura</label>
                    </div>

                    <div class="select-size align-topics">
                        <input type="checkbox" name="todo" id="topic25" />
                        <input type="checkbox" name="esoterismo" id="topic26" />
                        <input type="checkbox" name="astrologia" id="topic27" />
                        <input type="checkbox" name="superacion" id="topic28" />
                        <input type="checkbox" name="finanzas" id="topic29" />
                        <input type="checkbox" name="entrenamiento" id="topic30" />

                        <label class="label-topic" for="topic25">De todo</label>
                        <label class="label-topic" for="topic26">Esoterismo</label>
                        <label class="label-topic" for="topic27">Astrología</label>
                        <label class="label-topic" for="topic28">Superación</label>
                        <label class="label-topic" for="topic29">Finanzas</label>
                        <label class="label-topic" for="topic30">Entrenamiento</label>
                    </div>

                    <div class="select-size align-topics">
                        <input type="checkbox" name="identidad" id="topic31" />
                        <input type="checkbox" name="opinion" id="topic32" />
                        <input type="checkbox" name="religion" id="topic33" />

                        <label class="label-topic" for="topic31">Identidad</label>
                        <label class="label-topic" for="topic32">Opinión</label>
                        <label class="label-topic" for="topic33">Religión</label>


                    </div>


                    <div class="row justify-content-center mt-3">
                        <div class="search-container user-decription-black">
                            <span>Otro: </span>
                            <input type="text" class="input-redes-other" style="border-radius: 12px; background-color: #ece7e7;" placeholder="escriba otros temas" name="agregar" id="agregar">
                            
                        </div>
                    </div>

                </div>


                
                
                <div class="d-flex justify-content-center mb-4">
                    <div class="section-title">
                        Envíanos un video tuyo hablando de ti*
                    </div>
                </div>


                <div class="row mb-2 user-decription-black">
                
               <!-- <div id="video-prev" style="display: none;" class="col-lg-12 video-width">
                    <div>
                        <video width="100%" height="400" class="video-preview"  style="background-color: #000" controls="controls"><source src=<?php echo base_url('img/bg-binf.mp4')?> type="video/mp4"></video>
                    </div>
                    <a style="cursor:pointer" onclick="hideVideoPrev()" ><img src=<?php echo base_url('img/remove-acc.png')?> alt="Remove"></a> 
                </div>-->
                <h5>Adjuntar video</h5> 
                <div class="col-lg-12 d-flex align-items-center my-2 btn-media">
                    
                    <input type="file" name="videoperfil" id="videoperfil" class="open-send btn btn-gray-normal btn-lg" style="border-radius: 0.7rem;" value='<?= old('videoperfil') ?>' accept="video/mp4, video/*" />
                    <!-- data-bs-toggle="modal" data-bs-target="#modal-upload-image" onclick="cleanUpload(); showInfoProfile();" data-id="btn-profile"-->
                   
               <!-- <button type="button" class="btn btn-gray-normal btn-lg" style="border-radius: 0.7rem;" data-bs-dismiss="modal" data-bs-toggle="modal" onclick="cleanVid();" data-bs-target="#modal-upload-video">Adjuntar Video</button> -->
                </div> 



                <div class="form-group mb-3 user-decription-black">
                    <p>* Te recomendamos no más de 1 minuto de duración.</p>
                </div>


                <div class="d-flex justify-content-center">
                    <div class="section-title">
                        Si gustas, puedes adjuntar una galería de imágenes.
                    </div>
                </div>
                    
                                        
         
                <div id="gallery" class="d-flex justify-content-center flex-wrap" style="padding-top: 10px; padding-bottom: 35px;">

                </div>
 

                <div class="col-lg-12 d-flex align-items-center mt-4 btn-media">
                    <input type="file" name="galeriaperfil[]" id="galeriaperfil[]" class="open-send btn btn-gray-normal btn-lg" style="border-radius: 0.7rem;" value='<?= old('videoperfil') ?>' multiple="" />

                   <!-- <button id="btn-img1" data-id="btn-gallery" type="button" class="btn btn-gray-normal btn-lg open-send" style="border-radius: 0.7rem;" onclick="cleanUpload(); hideInfoProfile();" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#modal-upload-image">Subir foto</button>-->
                </div> 
                

                <div class="form-group mb-3 user-decription-black">
                    <p>* Peso máximo por imagen (500k). <br> * Cantidad maxima de fotos 5</p>
                </div>


                <div class="d-flex justify-content-center mb-4">
                    <div class="section-title">
                        ¿En qué empresa o marca has trabajado? 
                    </div>
                </div>

                <div id="experience" class="row justify-content-center mt-4">
                    Escribe una nueva Empresa
                </div>

                <div class="col-lg-12 d-flex align-items-center mt-3 mb-4 btn-media">
                <input id="input-exp" name="marcatxt" id="marcatxt" class="input-redes" type="text"  onkeyup="success()" placeholder="Marca / Empresa">
                </div> 

                <div class="col-lg-12 d-flex align-items-center mt-3 mb-4 btn-media">
                    <select id="tipoMarca" name="tipoMarca"  class="form-select select-sm-profile" aria-label="Default select example">
                        <option selected value="privada">PRIVADA</option>  
                        <option value="publica">PUBLICA</option>      
                    </select>
                </div>
                <br/>
                <br/>



                <div class="d-flex justify-content-center mb-4">
                    <div class="section-title">
                        Estás dispuesto(a) a trabajar por
                    </div>
                </div>



                <div class="row justify-content-center user-decription-black" style="padding-left: 112px; padding-right: 112px;">
                    <p>Marca los que consideres</p>

                    <div class="col-md-auto">
                        CANJE X PRODUCTO <br>
                        <input class="form-check-input" type="checkbox" value="" name="canje" id="flexCheckDefault">
                    </div>

                    <div class="col-md-auto">
                        DINERO <br>
                        <input class="form-check-input" type="checkbox" value="" name="dinero" id="flexCheckDefault">
                    </div>
                    <div class="col-md-auto">
                        SERVICIOS <br>
                        <input class="form-check-input" type="checkbox" value="" name="servicios" id="flexCheckDefault">
                    </div>
                    <div class="col-md-auto">
                        PATROCINIO <br>
                        <input class="form-check-input" type="checkbox" value="" name="patrocinio" id="flexCheckDefault">
                    </div>
                   <!-- <div class="col-md-auto">
                        TODOS LOS ANTERIORES <br>
                        <input class="form-check-input" type="checkbox" value="" name="canje" id="flexCheckDefault">
                    </div>-->
                
                </div>

                <div style="padding-left: 10%; padding-right: 10%;">
                    <hr class="break_line">
                </div>


                <div class="d-flex justify-content-center user-decription-black">
                    <div class="btn-register">
                        <div class="row align-privacy">
                            <div class="col-lg-1" >
                            <input class="form-check-input" type="checkbox" value="" id="terminoscheck" name="terminoscheck">
                        </div>
                        <div class="col-lg-8 align-privacy-text">
                            AUTORIZO de manera previa, expresa,<br> 
                        informada y explícita, a WD Studios Corp, para <br>el uso y tratamiento de mis datos.
                        </div>
                        </div>
                    </div>
                </div>

                <script>
                    var miCheckbox = document.getElementById('terminoscheck');
                    var boton = document.getElementById('submit');
                    miCheckbox.addEventListener('change', function(){
                        if(miCheckbox.checked){
                            document.getElementById('submit').disabled=false;
                        }else{
                            document.getElementById('submit').disabled=true;
                        }
                        
                       
                    });
                </script>

               <div class="d-flex justify-content-center user-decription-black my-4">
                    <div>
                        <img src=<?php echo base_url('img/doc.png')?>>
                    </div>
                    <div style="padding: 10px;">
                        <a style="color: #000; text-decoration: underline;" href="/privacidad" target="_blank">Ver documento</a>
                    </div>
   
                </div>
                                  

                <div class="d-flex justify-content-center mb-4">
                    <div class="btn-register">
                        <input type="submit" name="submit" id="submit"class="btn btn-login btn-lg btn-register-width user-decription-black" style="font-size: 20px;" value= "¡REGISTRARME!" disabled="true"/>
                       <!-- data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#confirmation-modal"-->
                    </div>
                </div>
            </form>
</div>

</div>
            </div>
        </div>
    </div>
    <!-- Content Register End -->


    <!-- ============================================================== -->
                            <!-- MODALES -->
    <!-- ============================================================== -->
   <!-- Modal Upload Image Start -->
    <div class="modal fade" id="modal-upload-image" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">

                    <div id="info-profile" class="text-center user-decription-black" style="font-weight: bold; font-size: 15px; margin-left: auto; display: none; padding: 0 10px;">
                        Para una mejor experiencia en tu foto de perfil, selecciona una imagen cuadrada!
                    </div>

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">

                    <input type="hidden" id="picId" name="picId" value="">

                    <div class="file-upload">
                        <div class="text-center">
                            <button id="btn-img-up" type="button" class="btn btn-get-info user-decription btn-lg" onclick="$('.file-upload-input').trigger( 'click' )" >Cargar Imagen</button>
                        </div>
                        <div class="image-upload-wrap">
                            <input id="uploader-input" class="file-upload-input" name="foto_perfil" type='file' onchange="uploadImage($('#picId').val());" accept="image/*" />
                            <div class="drag-text">
                                <h3>Arrastra una imagen para subir</h3>
                            </div>
                        </div>
                        <div class="file-upload-content">
                            <div class="text-center user-decription-black" style="font-weight: bold; font-size: 15px">
                                <img class="img-hecho my-3" src=<?php echo base_url('img/upload-img.png')?> >
                                <div class="text-center user-decription-black" style="font-weight: bold; font-size: 35px">
                                    <p>¡LISTO!</p>
                                </div>
                                <p class="image-title"></p>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-get-info user-decription btn-lg" onclick="cleanUpload()" data-bs-dismiss="modal" aria-label="Close" style="width: 40%;">CONTINUAR</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer user-decription-black" style="font-weight: bold; "></div>
            </div>
        </div>
    </div>
    <!-- Modal Upload Image End -->


<!-- Modal Upload Video Start -->
    <div class="modal fade" id="modal-upload-video" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" onclick="closeVid()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">

                    <div class="file-upload">
                        <div class="text-center">
                            <button id="btn-vid-up" type="button" class="btn btn-get-info user-decription btn-lg" onclick="$('.upload-video-file').trigger( 'click' )" >Buscar Video</button>
                        </div>
                        <div class="video-upload-wrap">
                            <input id="uploader-input-vid" class="upload-video-file file-upload-input-vid" type='file' accept="video/*" />
                            <div class="drag-text">
                                <h3>Arrastre y suelte o seleccione Buscar Video</h3>
                            </div>
                        </div>
                        <div class="file-upload-content-vid">
                            <div class="text-center user-decription-black" style="font-weight: bold; font-size: 15px">
                                <img class="img-hecho my-3" src="img/upload-vid.png" >
                                <div class="text-center user-decription-black" style="font-weight: bold; font-size: 35px">
                                    <p>¡LISTO!</p>
                                </div>
                                <p class="video-title"></p>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-get-info user-decription btn-lg" data-bs-dismiss="modal" onclick="showVidmyProfile();" aria-label="Close" style="width: 40%;">CONTINUAR</button>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer user-decription-black" style="font-weight: bold; "></div>
            </div>
        </div>
    </div>
    <!-- Modal Upload Video End --> 
