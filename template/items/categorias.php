<!--begin::Subheader-->
<div class="subheader bg-white h-100px" id="kt_subheader">
    <div class="container flex-wrap flex-sm-nowrap">
        <!--begin::Logo-->
        <div class="d-none d-lg-flex align-items-center flex-wrap w-250px">
            <!--begin::Logo-->
            <a href="?inicio=index">
                <img alt="Logo" width="250px" src="assets/media/demos/Homey-Color.svg"
                    class="max-h-50px" type="img/svg" />
            </a>
            <!--end::Logo-->
        </div>
        <!--end::Logo-->
        <!--begin::Nav-->
        <div class="subheader-nav nav flex-grow-1">
            <!--begin::Item-->
            <?php
            foreach (mostrar_categoria($conn) as $k => $v) {
                echo "
                <a href='?cursos=".$v['idSys_Cursos']."' class='nav-item'>
                    <span class='nav-label px-10'>
                        <span class='nav-title text-dark-75 font-weight-bold font-size-h4'>".$v['Sys_Cursos']."</span>
                    </span>
                </a>
                ";
            }

            ?>
        </div>
        <!--end::Nav-->
    </div>
</div>