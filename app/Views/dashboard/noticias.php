
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title main-section-title">Noticias</h4>
                    </div>
                    <!--
                    <div class="col-7 align-self-center">
                        <div class="d-flex align-items-center justify-content-end">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    -->
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title"><?php ?></h4>
                        <div>
                            <p>
                                <a class="btn btn-white-normal btn-lg" href="<?= route_to('nuevanoticiadash') ?>" class="btn btn-info">Crear noticia</a>

                                
                            </p>
                        </div>

                        <div class="table-responsive user-decription-black">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Fecha</th>
                                        <th>Titulo</th>
                                        <th>Descripcion</th>
                                        <th>Foto</th>
                                        <th>Editar</th>
                                        <th>Borrar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $cont=0;
                                    foreach ($noticias as $key => $m) {
                                        $cont++;?>
                                        
                                   
                                    <tr>
                                        <td><?=$cont?></td>
                                        <td><?=$m['created_at']?></td>
                                        <td><?=$m['titulo']?></td>
                                        <td><?=$m['cuerpo']?></td>
                                        <td><?=$m['url_foto']?></td>
                                        <td><a href="<?php ?>" class="btn btn-success"><i class="mdi mdi-pencil menu-icon" ></i></a></td>
                                        
                                        <td><a href="#" data-href="<?php ?>"data-toggle="modal" data-target="#modal-confirma" data-placement="top" title="Eliminar registro" class="btn btn-danger"><i class="mdi mdi-window-close menu-icon" ></i></a></td>
                                    </tr>
                                    <?php } ?>
                                    
                      
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
  

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
   