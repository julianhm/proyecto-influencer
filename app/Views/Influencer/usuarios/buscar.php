
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
               Buscar
            </div>
            <hr class="header_black_line">
            <a style="display: contents;" href="index.html"><img class="logo-header-normal" src="<?=base_url('img')."/logo-blue.png"?>" > </a>

                
        </div>

    </div>
    <!-- Header End -->

    <form action="busqueda/resultado" method="POST" class="buscar-form pt-2" id="buscar" name="buscar" enctype="multipart/form-data">
                <?= csrf_field() ?>    
                
   
     <!-- Content search Start -->
    <div class="container">
        <div class="row">
            <div class="text-center signup-form" >
                <div>
                    <form class="register-form pt-2">
                        <div class="mb-3 user-decription-black" style="padding-left: 20%; padding-right: 20%;">
                            <p style="font-weight: bold;">Selecciona el influencer que buscas de acuerdo al tema que se especialice</p>
                        
                            <select class="form-select select_custom" aria-label="Default select example" id="categoriaselect" name="categoriaselect">
                                <option value="0" selected>Selecciona un tema</option>
                               <?php foreach ($categorias as $key => $m) {?>
                                <option value="<?=$m['idcategoria']?>"><?=$m['nombrecat']?></option>
                               <?php } ?>
                                
                                
                            </select>
                            
                        </div>

                        <div class="mb-3 user-decription-black" style="padding-left: 20%; padding-right: 20%;">
                            <p style="font-weight: bold;">Selecciona la red social de tu interés</p>
                        
                            <select class="form-select select_custom" aria-label="Default select example" id="redsocialselect" name="redsocialselect">
                                <option value="0" selected>Selecciona la red social</option>
                                
                               <?php foreach ($redes as $key => $m) {?>
                                <option value="<?=$m['idredes']?>"><?=$m['nombre']?></option>
                               <?php } ?>

                               
                            </select>
                            
                        </div>

                        <div class="mb-3 user-decription-black" style="padding-left: 20%; padding-right: 20%;">
                            <p style="font-weight: bold;">Selecciona el rango de seguidores que tenga según la red social seleccionada</p>
                        </div>

                        <div class="mt-4 user-decription-black followers-width" >
                            <div class="row">
                                <div>
                                
                                 <input type="range" min="0" value="6" max="12" step="1" class="slider" id="input">
                                 <div class="row" style="font-size: 10px;">
                                     <div class="col" style="text-align: left;">
                                         <p>0</p>
                                     </div>
                                     <div class="col" style="text-align: center;">
                                         <p><span id="output"></span></p>
                                         <input type="hidden" id="seguidores" name="seguidores" >
                
                                     </div>
                                     <div class="col" style="text-align: right;">
                                         <p>+1 millon</p>
                                     </div>
                                 </div>
                                 
                            </div>
                            </div>

                            <script>
                                var values = [0,3000,5000,10000,15000,20000,25000, 30000, 50000, 100000, 300000, 500000, 1000000];

                                var input = document.getElementById('input'),
                                   output = document.getElementById('output');

                                input.oninput = function(){
                                    output.innerHTML = values[this.value];
                                    document.getElementById('seguidores').value=values[this.value];
                                };
                                input.oninput();
                                

                            </script>

                        </div>
                                
                         
                        

                        <div class="mb-3 user-decription-black" style="padding-left: 20%; padding-right: 20%;">
                            <p style="font-weight: bold;">Idioma en que crea su contenido</p>

                            <div id="languages" class="row mt-4 justify-content-center" ></div>

                            <div style="padding-left: 15%; padding-right: 15%">
                                <select id="idiomaSelect" name="idiomaSelect"  class="form-select select-sm-profile" aria-label="Default select example">
                                    <option selected disabled="">Selecciona un idioma</option>
                                    <?php foreach ($idiomas as $key => $m) {?>
                                        <option value="<?=$m['ididioma']?>"><?=$m['nombre']?></option>
                                    <?php } ?>
                                    
                                    <option value="lang_8">Portugues</option>
                                </select>
                            </div>
                            
                        </div>

                        <div class="mb-3 user-decription-black" style="padding-left: 20%; padding-right: 20%;">
                            <p style="font-weight: bold;">Modalidad de pago </p>
                            <p>Selecciona la o las alternativas de negociación</p>

                            <div class="row mb-3 user-decription-black">
                                <?php foreach ($pagos as $key => $m) {?>
                                        
                                        <div class="col">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="<?=$m['idpago']?>" id="<?=$m['idpago']?>" name="<?=$m['idpago']?>">
                                                <label class="form-check-label alignlabel" for="flexCheckDefault">
                                                    <?=$m['nombre']?>
                                                </label>
                                        </div>
                                </div>
                                <?php } ?>
                                
                            </div>
                        </div>


                         <div class="mb-3 user-decription-black" style="padding-left: 20%; padding-right: 20%;">
                            <p style="font-weight: bold;">Ubicación del influencer</p>

                            <div class="row mb-3 user-decription-black">
                                <div class="row" style="padding-left: 15%; padding-right: 15%;">
                                    <div class="col">
                                        <select class="form-select select_custom" aria-label="Default select example" name="pais2" id="pais2" onchange='cambia_ciudades2();'>
                                            <option value="0" selected>Selecciona país</option>
                                            <?php foreach ($paises as $key => $m) {?>
                                                <option value="<?=$m['idpais']?>"><?=$m['nombre']?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <script>
                                    function cambia_ciudades2(){
                                        //tomamos el valor del select paises elegido
                                        var idpais
                                    
                                        idpais = document.getElementById('pais2').value	
                                        
                                        // verificamos si el Pais está definido
                                
                                        if (idpais!=0) { 
                                            //si estaba definido, entonces coloco las opciones del pais correspondiente. 
                                            //selecciono el array del departamento adecuado 
                                            //alert("LLEGUE");
                                            document.getElementById('ciudades2').disabled=false;
                                            mis_ciudades=eval("pais_"+idpais) 
                                            mis_ciudades_id=eval("pais_"+idpais+"_id") 
                                            //alert(mis_ciudades); 
                                            //calculo el numero de municipios 
                                            num_ciudades = mis_ciudades.length +1
                                            //marco el número de municipios en el select 
                                            document.buscar.ciudades2.length = num_ciudades 
                                            //para cada pais del array, lo introduzco en el select 
                                                
                                            for(i=0;i<num_ciudades+1;i++){ 
                                                document.buscar.ciudades2.options[i+1].value=mis_ciudades_id[i]
                                                document.buscar.ciudades2.options[i+1].text=mis_ciudades[i] 
                                            }	
                                            }else{ 
                                            //si no había pais seleccionado, elimino los municipios del select 
                                            document.buscar.ciudades2.length = 1 
                                            //coloco un guión en la única opción que he dejado 
                                            document.buscar.ciudades2.options[0].value = "0" 
                                            document.buscar.ciudades2.options[0].text = "SELECCIONE UN DEPARTAMENTO" 
                                            } 
                                        }// FIN DE FUNCIONcambia_departamento
                                    </script>
                                    <div class="col">
                                        <select class="form-select select_custom" aria-label="Default select example" name="ciudades2" id="ciudades2" disabled>
                                                <option value="0" selected>Elije tu región</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 
                            $ciudadesarray=[];
                            $ciudadesarrayid=[];
                            for ($i=0; $i < count($ciudades[1]) ; $i++) { 
                                array_push($ciudadesarray,$ciudades[1][$i]['nombre']);
                                array_push($ciudadesarrayid,$ciudades[1][$i]['idciudad']);
                            }

                            $ciudadesarray2=[];
                            $ciudadesarrayid2=[];
                            for ($i=0; $i < count($ciudades[2]) ; $i++) { 
                                array_push($ciudadesarray2,$ciudades[2][$i]['nombre']);
                                array_push($ciudadesarrayid2,$ciudades[2][$i]['idciudad']);
                            }

                            $ciudadesarray3=[];
                            $ciudadesarrayid3=[];
                            for ($i=0; $i < count($ciudades[3]) ; $i++) { 
                                array_push($ciudadesarray3,$ciudades[3][$i]['nombre']);
                                array_push($ciudadesarrayid3,$ciudades[3][$i]['idciudad']);
                            }

                            $ciudadesarray4=[];
                            $ciudadesarrayid4=[];
                            for ($i=0; $i < count($ciudades[4]) ; $i++) { 
                                array_push($ciudadesarray4,$ciudades[4][$i]['nombre']);
                                array_push($ciudadesarrayid4,$ciudades[4][$i]['idciudad']);
                            }

                            $ciudadesarray5=[];
                            $ciudadesarrayid5=[];
                            for ($i=0; $i < count($ciudades[5]) ; $i++) { 
                                array_push($ciudadesarray5,$ciudades[5][$i]['nombre']);
                                array_push($ciudadesarrayid5,$ciudades[5][$i]['idciudad']);
                            }
                        
                        ?>
                        <script type="text/javascript">
                            //creamos variableas array para cada departamento
                            
                                var pais_1 = <?php echo json_encode($ciudadesarray);?>;
                               var pais_1_id = <?php echo json_encode($ciudadesarrayid);?>;
                               var pais_2 = <?php echo json_encode($ciudadesarray2);?>;
                               var pais_2_id = <?php echo json_encode($ciudadesarrayid2);?>; 
                               var pais_3 = <?php echo json_encode($ciudadesarray3);?>;
                               var pais_3_id = <?php echo json_encode($ciudadesarrayid3);?>;
                               var pais_4 = <?php echo json_encode($ciudadesarray4);?>;
                               var pais_4_id = <?php echo json_encode($ciudadesarrayid4);?>;
                               var pais_5 = <?php echo json_encode($ciudadesarray5);?>;
                               var pais_5_id = <?php echo json_encode($ciudadesarrayid5);?>;

                        </script>


                        <div class="d-flex justify-content-center my-5">
                            <div class="btn-register">
                                <button type="submit" class="btn btn-login btn-lg btn-register-width user-decription-black" style="font-size: 20px; width: fit-content; padding-left: 40px; padding-right: 40px;" data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#confirmation-modal">BUSCAR</button>
                            </div>
                        </div>



                    </form>
                </div>
            </div>
        </div>
    </div>
                        </form>
    <!-- Content search End -->


      
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


