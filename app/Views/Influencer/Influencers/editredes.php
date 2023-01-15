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
           Mi perfil
        </div>
        <div class="user-decription-black welcome-user-text">
            Hola de nuevo! <?=$influencer['nombre'];?>
        </div>
        <hr class="header_black_line my-profile-header-black-line">
        <a style="display: contents;" href="index.html"><img class="logo-header-normal" src="<?php echo base_url("img/logo-blue.png")?>" > </a>
            
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




<!-- Content Mi Perfil Start -->

<div class="container-fluid my-profile-margin-x">

    <div class="sidebar">

        <div class="px-2 user-decription">
            
                
        <div class="user-decription-black filter_searched" style="border-bottom: 1px solid #000;">
                        <a href="<?php echo base_url("/influencer")."/".$influencer['idinfluencer']."/edit"?>">EDITAR PERFIL</a>
                </div>
                <div class="user-decription-black filter_searched" style="border-bottom: 1px solid #000;">
                        <a href="<?php echo base_url("/editredes")."/".$influencer['idinfluencer']?>">AGREGAR REDES SOCIALES</a>
                </div>
                <div class="user-decription-black filter_searched" style="border-bottom: 1px solid #000;">
                    <a href="<?php echo base_url("/perfil")."/".$influencer['idinfluencer']?>" >VER PERFIL</a>
                </div>

                <div class="user-decription-black filter_searched" style="border-bottom: 1px solid #000;">
                    <a href="mensajes.html">MENSAJES</a>
                </div>
                    
                <div class="user-decription-black filter_searched" style="border-bottom: 1px solid #000;"><a href="#">CERRAR SESION</a>
                </div>
        </div>
        
    </div>



    <div class="content">

        <div class="user-decription-black my-3" style="font-size: 25px;" >
            EDITAR PERFIL
        </div> 
        
                    
                    
                    
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
                            <div class="section-title">
                                Idioma en que creas tu contenido
                            </div>
                        </div>



                        <div id="languages" class="row mt-4 justify-content-center">

                        </div>


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

        </div>

</div>