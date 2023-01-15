
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
               Resultados de búsqueda
            </div>
            <hr class="header_black_line">
            <a style="display: contents;" href="index.html"><img class="logo-header-normal" src="<?=base_url(),"/img/logo-blue.png"?>" > </a>
                
        </div>
    </div>
    <!-- Header End -->


    
    <!-- Content search result Start -->
    <div class="container-fluid px-5  py-3">
        
        <div class="row">
            <div class="col sidebar-width">

                <div class="row">
                    <div class="px-2 py-3 user-decription searched-black-box">
                        <p style="font-weight: bold;">TU BÚSQUEDA FUE:</p>

                        <div id="filter_1" class="select_custom_small user-decription-black filter_searched">
                            <span><?=$criteriosBusqueda['categoria'];?></span>
                            <a style="cursor:pointer" onclick="removeAcc('filter_1')" ><img class="img_remove_filter" src="<?=base_url(),"/img/remove.png"?>" alt="Remove"></a>
                        </div>

                        <div id="filter_2" class="select_custom_small user-decription-black filter_searched">
                            <span><?=$criteriosBusqueda['redes'];?></span>
                            <a style="cursor:pointer" onclick="removeAcc('filter_2')" ><img class="img_remove_filter" src="<?=base_url(),"/img/remove.png"?>" alt="Remove"></a>
                        </div>
                        
                        <div id="filter_3" class="select_custom_small user-decription-black filter_searched">
                            <span><?=$criteriosBusqueda['cantidad']." seguidores";?> </span>
                            <a style="cursor:pointer" onclick="removeAcc('filter_3')" ><img class="img_remove_filter" src="<?=base_url(),"/img/remove.png"?>" alt="Remove"></a>
                        </div>

                        <div id="filter_4" class="select_custom_small user-decription-black filter_searched">
                            <span><?=$criteriosBusqueda['idioma'];?></span>
                            <a style="cursor:pointer" onclick="removeAcc('filter_4')" ><img class="img_remove_filter" src="<?=base_url(),"/img/remove.png"?>" alt="Remove"></a>
                        </div>

                        <div id="filter_5" class="select_custom_small user-decription-black filter_searched">
                            <span><?=$criteriosBusqueda['pago'];?></span>
                            <a style="cursor:pointer" onclick="removeAcc('filter_5')" ><img class="img_remove_filter" src="<?=base_url(),"/img/remove.png"?>" alt="Remove"></a>
                        </div>

                        <div id="filter_6" class="select_custom_small user-decription-black filter_searched">
                            <span><?=$criteriosBusqueda['pais']."/".$criteriosBusqueda['ciudad'];?></span>
                            <a style="cursor:pointer" onclick="removeAcc('filter_6')" ><img class="img_remove_filter" src="<?=base_url(),"/img/remove.png"?>" alt="Remove"></a>
                        </div>

                        <div >
                            <button type="button" class="btn btn-gray-clean-all btn-sm" style="margin-top: 10px;">Limpiar todo</button>
                        </div>

                    </div>
                </div>

                <div class="row sidebar-filter">
                    <div class="px-2 py-3 sidebar-filter-text ">
                        <p style="font-weight: bold;">FILTRAR POR:</p>

                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header sidebar-filter-text" style="margin-bottom: 8px;" id="headingOne">
                                    <button class="accordion-button sidebar-filter-text" style="font-weight: bold;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Categoría
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"  aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="select_custom_small user-decription-black">
                                            <span>Amor</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Arte y Diseño</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Astrología</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Aventura</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Belleza</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Ciencia</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Cine</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>De todo</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Deportes</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Educación</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Entrenamiento</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Entretenimiento</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Esoterismo</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Estilo de vida</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Farándula</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Finanzas</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Gastronomía</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Humanidades</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Identidad</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Juegos</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Moda</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Música</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Nutrición</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Opinión</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Política y sociedad</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Salud</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Sexo</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Superación</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Religión</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Talentos especiales</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Tecnología</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Transporte</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Turismo y viajes</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header sidebar-filter-text" style="margin-bottom: 8px;" id="headingTwo">
                                    <button class="accordion-button sidebar-filter-text collapsed" style="font-weight: bold;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Red Social
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="select_custom_small user-decription-black">
                                            <span>Behance</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Ello</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Facebook</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Instagram</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Linkedin</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>OnlyFans</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Pinterest</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>QQ</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Qzone</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Reddit</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Snapchat</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Telegram</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>TikTok</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Tumblr</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Twitter</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Twitch</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Vimeo</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Wechat</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Weibo</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Youtube</span>
                                            <input class="form-check-input img_remove_filter" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="select_custom_small user-decription-black filter_searched" style="margin-bottom: 8px; font-weight: bold; color: #606060 !important;">
                                Seguidores

                            </div>

                            <div style="margin-bottom: 20px;">
                                
                                 <input type="range" min="0" value="6" max="12" step="1" class="slider" id="input">
                                 <div class="row" style="font-size: 10px;">
                                     <div class="col">
                                         <p>0</p>
                                     </div>
                                     <div class="col" style="text-align: center;">
                                         <p><span id="output"></span></p>
                                     </div>
                                     <div class="col" style="text-align: right;">
                                         <p>+1 millon</p>
                                     </div>
                                 </div>
                                 
                            </div>

                            <script>
                                var values = [0,3000,5000,10000,15000,20000,25000, 30000, 50000, 100000, 300000, 500000, "+1M"];

                                var input = document.getElementById('input'),
                                   output = document.getElementById('output');

                                input.oninput = function(){
                                    output.innerHTML = values[this.value];
                                };
                                input.oninput();

                            </script>

                            <div class="accordion-item">
                                <h2 class="accordion-header sidebar-filter-text" style="margin-bottom: 8px;" id="headingThree">
                                    <button class="accordion-button sidebar-filter-text collapsed" style="font-weight: bold;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Idioma
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        
                                        <div id="languages" class="row mt-4 justify-content-left" ></div>

                                        <div style="padding-left: 15%; padding-right: 15%">
                                            <select id="langSelect" onchange="addLanguageSearch()" class="form-select select-sm-profile" aria-label="Default select example">
                                                <option selected disabled="">Selecciona un idioma</option>
                                                <option value="lang_1">Español</option>
                                                <option value="lang_2">Inglés</option>
                                                <option value="lang_3">Frances</option>
                                                <option value="lang_4">Aleman</option>
                                                <option value="lang_5">Ruso</option>
                                                <option value="lang_6">Chino</option>
                                                <option value="lang_7">Japones</option>
                                                <option value="lang_8">Portugues</option>
                                            </select>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header sidebar-filter-text" style="margin-bottom: 8px;" id="headingFour">
                                    <button class="accordion-button sidebar-filter-text collapsed" style="font-weight: bold;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    Negociación
                                    </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="select_custom_small user-decription-black">
                                            <span>Caje x producto</span>
                                            <input class="form-check-input img_remove_filter" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Dinero</span>
                                            <input class="form-check-input img_remove_filter" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Servicios</span>
                                            <input class="form-check-input img_remove_filter" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <span>Todos los anteriores</span>
                                            <input class="form-check-input img_remove_filter" type="checkbox" value="" id="flexCheckDefault">
                                        </div>
                                
                                    </div>
                                </div>
                            </div>


                            <div class="accordion-item">
                                <h2 class="accordion-header sidebar-filter-text" style="margin-bottom: 8px;" id="headingFive">
                                    <button class="accordion-button sidebar-filter-text collapsed" style="font-weight: bold;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    Ubicación
                                    </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="select_custom_small user-decription-black" style="margin-bottom: 8px;">
                                            <select class="form-select form-select-sm user-decription-black select_custom_small" style="width: 200px" aria-label=".form-select-sm example">
                                                    <option selected>Selecciona pais</option>
                                                    <option value="1">Colombia</option>
                                                    <option value="2">Venezuela</option>
                                            </select>
                                        </div>
                                        <div class="select_custom_small user-decription-black">
                                            <select class="form-select form-select-sm user-decription-black select_custom_small" style="width: 200px" aria-label=".form-select-sm example">
                                                    <option selected>Ciudad</option>
                                                    <option value="1">Bogota</option>
                                                    <option value="2">Cali</option>
                                            </select>
                                        </div>
                                
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="col">

            <?php $cont=4; $cerrar=false;
             foreach ($influencer as $key => $m) { 
                
                if($cont==4){?>
                  <div class="row mb-3">
                <?php 
                    $cont=0; 
                    $cerrar=true;  
                }
                $cont++;
                ?>
                <div class="col">
                    <div class="product-item position-relative d-flex flex-column text-center">
                        <img class="img-fluid mb-2" src="<?php echo base_url('uploads')."/".$m['foto_perfil'];?>" alt="">
                        <h6 class="user-decription-black"><?=$m['nombreinflu'] ?><br> <?=$m['alias'] ?> <br><?=$m['nombrecat']?> </h6>
                        <div class="container-fluid">
                            <a href="<?php echo base_url()."/perfil/".$m['idinfluencer'];?>"><button type="button" class="btn btn-ver-perfil btn-sm btn-on-white">Ver perfil</button></a>
                        </div>
                    </div>
                </div>
                
            <?php if($cerrar){?>
                </div>
            <?php
            $cerrar=false;
        } ?>
            
                
           <?php  } ?>
                
                


                


                <div class="text-center">
                    <div class="pagination">
                        <a href="#">&laquo;</a>
                        <a href="#">1</a>
                        <a class="active" href="#">2</a>
                        <a href="#">3</a>
                        <a href="#">4</a>
                        <a href="#">5</a>
                        <a href="#">6</a>
                        <a href="#">&raquo;</a>
                    </div>
                </div>


                <div class="my-5 d-flex justify-content-center text-center">
                    <div class="btn-register">
                        <button type="button" class="btn btn-login btn-lg btn-register-width user-decription-black" style="font-size: 20px; width: fit-content;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#confirmation-modal">VOLVER A BUSCAR</button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Content search result End -->

    
    <!-- ============================================================== -->
                            <!-- MODALES -->
    <!-- ============================================================== -->
    
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

