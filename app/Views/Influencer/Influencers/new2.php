
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

            
            
            <form action="../guardarRedesSociales" method="POST" class="register-form pt-2" enctype="multipart/form-data">
                <?= csrf_field() ?>    
                
                <input type="hidden" id="influencerid3" name="influencerid3" value="<?=$influencer['idinfluencer']?>">
                
            <div class="d-flex justify-content-center mb-4">
                    <div class="section-title" >
                       ¿Dónde te siguen?
                    </div>
                </div>

                <div style="padding-left: 20%; padding-right: 20%;">
                    <p class="user-decription-black">Marca la(s) red(es) sociales donde tienes cuenta y escribe tu nombre de usuario</p>
                </div>
                
                <div>
                    <div class="row mb-2">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm1" onclick="smInputState('checkbox_sm1', 'behance')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/behance.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="behance" id="behance" placeholder="Behance" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm2" onclick="smInputState('checkbox_sm2', 'ello')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/ello.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="ello" id="ello" placeholder="Ello" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm3" onclick="smInputState('checkbox_sm3', 'facebook')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/facebook.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="facebook" id="facebook" placeholder="Facebook" disabled>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check ">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm4" onclick="smInputState('checkbox_sm4', 'instagram')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/instagram.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="instagram" id="instagram" placeholder="Instagram" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm5" onclick="smInputState('checkbox_sm5', 'linkedin')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/linkedin.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="linkedin" id="linkedin" placeholder="Linkedin" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm6" onclick="smInputState('checkbox_sm6', 'onlyfans')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/onlyfans.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="onlyfans" id="onlyfans" placeholder="OnlyFans" disabled>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm7" onclick="smInputState('checkbox_sm7', 'pinterest')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/pinterest.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="pinterest" id="pinterest" placeholder="Pinterest" disabled>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm8" onclick="smInputState('checkbox_sm8', 'qq')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/qq.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="qq" id="qq" placeholder="QQ" disabled>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm9" onclick="smInputState('checkbox_sm9', 'qzone')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/qzone.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="qzone" id="qzone" placeholder="Qzone" disabled>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm10" onclick="smInputState('checkbox_sm10', 'reddit')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/reddit.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="reddit" id="reddit" placeholder="Reddit" disabled>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm11" onclick="smInputState('checkbox_sm11', 'snapchat')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/snapchat.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="snapchat" id="snapchat" placeholder="Snapchat" disabled>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm12" onclick="smInputState('checkbox_sm12', 'telegram')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/telegram.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="telegram" id="telegram" placeholder="Telegram" disabled>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm13" onclick="smInputState('checkbox_sm13', 'tiktok')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/tiktok.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="tiktok" id="tiktok" placeholder="TikTok" disabled>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm14" onclick="smInputState('checkbox_sm14', 'tumblr')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/tumblr.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="tumblr" id="tumblr" placeholder="Tumblr" disabled>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm15" onclick="smInputState('checkbox_sm15', 'twitter')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/twitter.png')?>>
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="twitter" id="twitter" placeholder="Twitter" disabled>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row mb-2">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm16" onclick="smInputState('checkbox_sm16', 'twitch')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/twitch.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="twitch" id="twitch" placeholder="Twitch" disabled>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm17" onclick="smInputState('checkbox_sm17', 'vimeo')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/vimeo.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="vimeo" id="vimeo" placeholder="Vimeo" disabled>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm18" onclick="smInputState('checkbox_sm18', 'wechat')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/wechat.png')?>>
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="wechat" id="wechat" placeholder="Wechat" disabled>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm19" onclick="smInputState('checkbox_sm19', 'weibo')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/weibo.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="Weibo" id="Weibo" placeholder="Weibo" disabled>
                                </div>
                                
                            </div>
                            
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm20" onclick="smInputState('checkbox_sm20', 'youtube')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/youtube.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="youtube" id="youtube" placeholder="Youtube" disabled>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-md-auto check-align">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="checkbox_sm21" onclick="smInputState('checkbox_sm21', 'blog')">
                                    </div>
                                </div>
                                <div class="col-md-auto logo-sm-align">
                                    <img src=<?php echo base_url('img/iconos/blog.png')?> >
                                </div>
                                <div class="col input-sm-align">
                                    <input class="input-redes disable-sm-input" type="text" name="blog" id="blog" placeholder="¿Tienes un Blog?" disabled>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>

                
                <div class="d-flex justify-content-center mb-4">
                    <div class="btn-register">
                        <input type="submit" name="submit" id="submit"class="btn btn-login btn-lg btn-register-width user-decription-black" style="font-size: 20px;" value= "AGREGAR REDES SOCIALES" />
                       <!-- data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#confirmation-modal"-->
                    </div>
                </div>
    </form>


    <!-- Modal Confirmación Registro Start -->
    <div class="modal fade" id="confirmation-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content" style="border-radius: 0rem; border: 2px solid #000;">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body ">
                    <img class="img-hecho mb-3" style="width: 25%;" src=<?php echo base_url('img/stars.png')?> >
                    <div class="text-center user-decription-black" style="font-weight: bold; font-size: 35px">
                        
                        <p>¡LISTO!</p>
                    </div>
                    <div class="text-center user-decription-black" style="font-weight: bold; font-size: 15px">
                        <p>Ahora por favor revisa tu bandeja de
                            entrada para confirmar tu correo.
                            A partir de entonces comenzaremos a crear
                            tu perfil y te avisaremos cuando puedas
                            ingresar y editarlo a tu gusto.</p>
                    </div>
                    
                </div>
                <div class="modal-footer"></div>
            </div>
        </div>
    </div>
    <!-- Modal Confirmación Registro End -->

   

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

