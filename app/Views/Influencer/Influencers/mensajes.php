
<body>
<?php echo view("influencer/influencers/_headeredit"); ?>



        <div class="content">

            <div class="col-md-12">
                        <div class="card">

                            <!-- ============================================================== -->
                            <!-- Tab de lista de mensajes -->
                            <!-- ============================================================== -->
                            <div class="tab-content" id="myTabListMessage">
                                <div class="tab-pane fade active show" id="inbox" aria-labelledby="inbox-tab" role="tabpanel">
                                    <div>
                                        <div class="row p-4 no-gutters align-items-center">
                                            <div class="col-sm-12 col-md-6">
                                                <h3 class="mb-0 user-decription-black"><i class="ti-email mr-2"></i><?=count($correos) ?> MENSAJES</h3>
                                            </div>
                                            <div class="col-sm-12 col-md-6">
                                                <ul class="list-inline dl mb-0 float-left float-md-right">
                                                    
                                                    <li class="list-inline-item text-danger" style="float: right;">
                                                        <a href="#" onclick="removeEmail();">
                                                            <button class="btn btn-circle" style="color: #000;" href="javascript:void(0)">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                            <span class="ml-2 user-decription-black">Eliminar</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <script>function viewMessagee(fecha,nombre,empresa,correo,celular,cuerpo) {
    
                                            
                                            document.getElementById("myTabMessage").style.display = "block";
                                            document.getElementById("myTabListMessage").style.display = "none";
                                            document.getElementById("fechacorreo").innerText = "FEHCA Y HORA: "+fecha;
                                            document.getElementById("nombrecorreo").innerText ="NOMBRE: "+nombre;
                                            document.getElementById("empresacorreo").innerText ="EMPRESA: "+empresa;
                                            document.getElementById("contactocorreo").innerText = correo;
                                            document.getElementById("celularcorreo").innerText = celular;
                                            document.getElementById("cuerpocorreo").innerText = cuerpo;
                                        }</script>
                                        <!-- Mail list-->
                                        <div class="table-responsive user-decription-black">
                                            <table class="table email-table no-wrap table-hover v-middle mb-0 font-14">
                                                <tbody>
                                                    <?php foreach ($correos as $key => $m) {?>
                                                        
                                                    
                                                    <!-- row -->
                                                    <tr>
                                                        <!-- label -->
                                                        <td class="pl-3">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox" class="form-check-input" id="<?=$m['id']?>" />
                                                                <label class="custom-control-label" for="cst1">&nbsp;</label>
                                                            </div>
                                                        </td>
                                                        
                                                        <td>
                                                            <span class="mb-0 text-muted"><?=$m['nombre']?></span>
                                                        </td>
                                                        <!-- Message -->
                                                        <td>
                                                            <a class="link" style="cursor: pointer;" onclick="viewMessagee('<?=$m['created_at']?>','<?=$m['nombre']?>','<?=$m['empresa']?>','<?=$m['correoremitente']?>','<?=$m['celularremitente']?>','<?=$m['cuerpo']?>')">
                                                                
                                                                <span class="text-dark"><?=$m['empresa'];?></span>
                                                            </a>
                                                        </td>
                                                       
                                                        <!-- Time -->
                                                        <td class="text-muted"><?=$m['created_at']?></td>
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="sent" aria-labelledby="sent-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Lets check profile</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="spam" aria-labelledby="spam-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Come on you have a lot message</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="delete" aria-labelledby="delete-tab" role="tabpanel">
                                    <div class="row p-3 text-dark">
                                        <div class="col-md-6">
                                            <h3 class="font-light">Just do Settings</h3>
                                            <h4 class="font-light">you can use it with the small code</h4>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <p>Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>



                            <!-- ============================================================== -->
                            <!-- Tab detalle del mensaje seleccionado -->
                            <!-- ============================================================== -->
                            <div class="tab-content" id="myTabMessage" style="display: none;">
                                <div class="modal-header" style="justify-content: end;">
                                    <button type="button" class="btn btn-ver-perfil btn-sm btn-on-white" style="padding: 4px 30px !important;" onclick="backMessageList()">Volver a los mensajes</button>
                                </div>
                                <div class="modal-body message-data-contact">
                                    <div class="user-decription-black"><br>
                                        <label id="fechacorreo"></label><br>
                                        <label id="nombrecorreo"></label><br>
                                        <label id="empresacorreo"></label><br>
                                        <p>DATOS DE CONTACTO:</p>
                                    </div>
                                    <div class="col-lg-12">

                                        <div class="h-100 ">

                                            <div class="row mb-2">
                                                <div >
                                                    <img src="<?=base_url()."/img/contact-email.png"?>" style="padding-right: 10px;">
                                                    <span class="user-decription-black" style="font-size: 18px;" ><label id="contactocorreo"></label></span>
                                                </div>
                                                
                                            </div>

                                            <div class="row mb-4">
                                                <div >
                                                    <img src="<?=base_url()."/img/contact-ws.png"?>" >
                                                    <img src="<?=base_url()."/img/contact-number.png"?>" >
                                                    <span class="user-decription-black" style="font-size: 18px;" id="celularcorreo"></span>
                                                </div>
                                            </div>

                                            <div>
                                                <textarea class="input-redes" rows="6" id="cuerpocorreo"></textarea>
                                            </div>                    
                                        </div>
                                    </div>
                    
                                    <div class="text-center user-decription-black">
                                        <p>A partir de aquí puedes mantener el contacto con tu cliente con la información proporcionada por este.
                                        ¡Buena suerte!</p>
                                    </div>
                    
                                </div>
                            </div>


                        </div>
                    </div>


        </div>
        <!-- content -->


    </div>
    <!-- Content Mensajes End -->

    



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


