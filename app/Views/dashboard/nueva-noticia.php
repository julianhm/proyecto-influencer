
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
                        <h4 class="page-title main-section-title">Crear noticia</h4>
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

                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h5 class="card-title user-decription-black text-center" style="font-weight: bold;">DATOS PARA LA PÁGINA PRINCIPAL</h5>
                            <form action="/dashboard/crearnoticia" method="POST" class="form-horizontal"  enctype="multipart/form-data">
                    
                            

                                <div class="mb-3">
                                    <label class="user-decription-black">Titulo</label>
                                    <input type="text" class="form-control" value="" id="newnoticia" name="newnoticia">
                                </div>

                                <div class="mb-3">
                                    <label class="user-decription-black">Descripción</label>
                                    <textarea class="form-control" rows="5" id="newcuerpo" name="newcuerpo"></textarea>
                                </div>

                                <div class="mb-3">
                                    <label for="formFile" class="form-label user-decription-black">Subir imagen</label>
                                    <input class="form-control" type="file" id="fotonoticia" name="fotonoticia">
                                </div>


                                <div class="card-body border-top" style="text-align: center;">
                                    <button type="submit" class="btn btn-ver-perfil btn-sm btn-on-white" style="font-size: 18px; padding: 4px 30px !important;">Crear noticia</button>
                                </div>

                      
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Fix dropdown arrow issues with bootstrap -->
                <style type="text/css">
                    .dropdown-toggle:after {
                        all: unset;
                    }
                </style>




                <div class="row">
                    <div class="col-sm-12">
                        <div class="card card-body">
                            <h5 class="card-title user-decription-black text-center" style="font-weight: bold;">DETALLE DE NOTICIA</h5>

                            <div id="summernote"></div>
                            <div class="card-body border-top" style="text-align: center;">
                                    <button type="button" class="btn btn-ver-perfil btn-sm btn-on-white" style="font-size: 18px; padding: 4px 30px !important;">Crear detalle noticia</button>
                                </div>
                        </div>
                    </div>
                </div> 
  

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
