<!--begin::Subheader-->
<div class="subheader bg-white h-100px" id="kt_subheader">
    <div class="container flex-wrap flex-sm-nowrap">
        <!--begin::Logo-->
        <div class="d-none d-lg-flex align-items-center flex-wrap w-250px">
            <!--begin::Logo-->
            <a href="index.html">
                <img alt="Logo" src="https://preview.keenthemes.com/keen/theme/demo3/dist/assets/media/logos/logo-4.svg"
                    class="max-h-50px" />
            </a>
            <!--end::Logo-->
        </div>
        <!--end::Logo-->
        <!--begin::Nav-->
        <div class="subheader-nav nav flex-grow-1">
            <!--begin::Item-->


            <?php

            $stmt = $conn->prepare("SELECT * FROM sys_cursos ORDER BY RAND() LIMIT 7");
            $stmt->execute();
            $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
            foreach ($stmt->fetchAll() as $k => $v) {
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