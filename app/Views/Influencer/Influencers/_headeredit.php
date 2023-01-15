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
                Hola de nuevo! <?=$influencer['nombreinflu'];?>
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
                        <a href="<?php echo base_url('influencer')."/edit/".$influencer['idinfluencer']?>">EDITAR PERFIL</a>
                </div>
                <div class="user-decription-black filter_searched" style="border-bottom: 1px solid #000;">
                    <a href="<?php echo base_url("/perfil")."/".$influencer['idinfluencer']?>" >VER PERFIL</a>
                </div>

                <div class="user-decription-black filter_searched" style="border-bottom: 1px solid #000;">
                    <a href="<?php echo base_url("influencer")."/mensajes/".$influencer['idinfluencer']?>">MENSAJES</a>
                </div>
                    
                <div class="user-decription-black filter_searched" style="border-bottom: 1px solid #000;"><a href="#">CERRAR SESION</a>
                </div>
            </div>
            
        </div>