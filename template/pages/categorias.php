<?php $id_categoria = $_GET['pages']; ?>
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="d-flex flex-column-fluid">
        <div class="container">

            <div class="card card-custom gutter-b">
                <div class="card-body">
                    <!--begin::Top-->
                    <div class="d-flex">
                        <!--begin::Pic-->
                        <div class="flex-shrink-0 mr-7">

                        <?php 
                            
                             $stmt = $conn->prepare("SELECT * FROM sys_categorias WHERE idSys_Categorias = $id_categoria");
                             $stmt->execute();
                             //echo $stmt->rowCount();
                             $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                 foreach($stmt->fetchAll() as $k=>$v){
                                    echo "
                                    <div class='symbol symbol-50 symbol-lg-120'>
                                    <img alt='Pic' src='".$v['Sys_categoriasLink']."'>
                                </div>
                            </div>
                            <!--end::Pic-->
                            <!--begin: Info-->
                            <div class='flex-grow-1'>
                                <!--begin::Title-->
                                <div class='d-flex align-items-center justify-content-between flex-wrap mt-2'>
                                    <!--begin::User-->
                                    <div class='mr-3'>
                                        <!--begin::Name-->
                                        <a href='#'
                                            class='d-flex align-items-center text-dark text-hover-primary font-size-h5 font-weight-bold mr-3'>".$v['Sys_Categorias']."</a>
                                        <!--end::Name-->
                                       
                                    </div>
                                    
                                    ";
                                 }
                        ?>

                                <!--begin::User-->
                                <!--begin::Actions-->
                                <div class="my-lg-0 my-1">
                                    <a href="mailto:ejemplo@gmail.com" class="btn btn-sm btn-light-primary font-weight-bolder mr-2">Enviame una sugerencia</a>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Title-->
                            <!--begin::Content-->
                            <div class="d-flex align-items-center flex-wrap justify-content-between">
                                <!--begin::Description-->
                                <div class="flex-grow-1 font-weight-bold text-dark-50 py-2 py-lg-2 mr-5">
                                    En esta categoria podras encontrar todo lo que necesitas para el desarrollo de las ciencia.
                                </div>
                                <!--end::Description-->
                                <!--begin::Progress-->
                                <div class="d-flex mt-4 mt-sm-0">
                                    <span class="font-weight-bold mr-4">Progreso</span>
                                    <div class="progress progress-xs mt-2 mb-2 flex-shrink-0 w-150px w-xl-250px">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 50%;"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <span class="font-weight-bolder text-dark ml-4">78%</span>
                                </div>
                                <!--end::Progress-->
                            </div>
                            <!--end::Content-->
                        </div>
                        <!--end::Info-->
                    </div>
                    <!--end::Top-->
                    <!--begin::Separator-->
                    <div class="separator separator-solid my-7"></div>
                    <!--end::Separator-->
                    <!--begin::Bottom-->
                    <div class="d-flex align-items-center flex-wrap">
                       
                        
                    
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            <span class="mr-4">
                                <span class="svg-icon svg-icon-2x">
                                    <!--begin::Svg Icon | path:/keen/theme/demo3/dist/assets/media/svg/icons/Shopping/Chart-bar1.svg-->
                                    <i class=" fa fa-book-reader"></i>
                                    <!--end::Svg Icon-->
                                </span>
                            </span>
                            <div class="d-flex flex-column text-dark-75">
                                <span class="font-weight-bolder font-size-sm">Cursos</span>
                                <span class="font-weight-bolder font-size-h5">
                                    <?php 
                                    $stmt = $conn->prepare("SELECT * FROM sys_cursos WHERE idSys_Categorias = $id_categoria");
                                    $stmt->execute();
                                    $cursos = $stmt->rowCount();
                                        echo "<span class='text-dark-50 font-weight-bold'>+</span>".$cursos."</span>"
                                    
                                    ?>
                            </div>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            <span class="mr-4">
                                <span class="svg-icon svg-icon-2x">
                                   <i class="fa fa-map"></i>
                                </span>
                            </span>
                            <div class="d-flex flex-column flex-lg-fill">
                                <span class="text-dark-75 font-weight-bolder font-size-sm">Modulos</span>
                                 <?php 
                                     $stmt = $conn->prepare("SELECT * FROM sys_modulos WHERE Sys_idcategorias = $id_categoria");
                                     $stmt->execute(); 
                                     $modulos = $stmt->rowCount(); 
                                        echo "<a class='text-primary font-weight-bolder'>+<span>".$modulos."</span></a>";
                                 ?>
                            </div>
                        </div>
                        <!--end: Item-->
                        <!--begin: Item-->
                        <div class="d-flex align-items-center flex-lg-fill mr-5 my-1">
                            <span class="mr-4">
                                <span class="svg-icon svg-icon-2x">
                                    <i class="fa fa-space-shuttle"></i>
                                </span>
                            </span>
                            <div class="d-flex flex-column">
                                <span class="text-dark-75 font-weight-bolder font-size-sm">Secciones</span>
                                <?php 

                                    $stmt = $conn->prepare("SELECT * FROM sys_secciones WHERE idSys_Categorias = $id_categoria");
                                    $stmt->execute();
                                    $secciones = $stmt->rowCount();
                                    echo "<a class='text-primary font-weight-bolder'>+<span>".$secciones."</span></a>"
                                ?>
                            </div>
                        </div>
                        <!--end: Item-->
                        
                    </div>
                    <!--end::Bottom-->
                </div>
            </div>



        </div>
    </div>
</div>