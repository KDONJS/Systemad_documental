<?php 
    require 'db/funciones.php';
?>


<!DOCTYPE html>

<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

<head>

    <script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&amp;l=' + l : '';
        j.async = true;
        j.src = '../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-5FS8GGP');
    </script>

    <meta charset="utf-8" />
    <title>Keen | Dashboard</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />

    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle1036.css?v=2.1.1" rel="stylesheet"
        type="text/css" />
    <link href="assets/plugins/global/plugins.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle1036.css?v=2.1.1" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">

    <link rel="shortcut icon" href="https://preview.keenthemes.com/keen/assets/media/logos/favicon.ico" />
    <script>
    (function(h, o, t, j, a, r) {
        h.hj = h.hj || function() {
            (h.hj.q = h.hj.q || []).push(arguments)
        };
        h._hjSettings = {
            hjid: 1070954,
            hjsv: 6
        };
        a = o.getElementsByTagName('head')[0];
        r = o.createElement('script');
        r.async = 1;
        r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
        a.appendChild(r);
    })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
</head>

<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled page-loading">


    <?php 
        require 'template/items/menu.php';
        require 'template/items/categorias.php';


        
           
            if(isset($_GET['pages'])){
                if(
                    $_GET['pages'] == 'pdf'
                )
                {
                  require 'template/pages/pdfs.php';  
                }
    
                if(
                    $_GET['pages'] == 'categorias'
                )
                {
                    require 'template/pages/categorias.php';
        
                }
            }

            else{
                require 'template/cuerpo.php';
            }



        require 'template/items/footer.php';
        require 'template/items/panel.php';
        require 'template/items/scroll.php';

    ?>

    <!--end::Demo Panel-->
    <script>
    var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";
    </script>
    <script>
    var KTAppSettings = {
        "breakpoints": {
            "sm": 576,
            "md": 768,
            "lg": 992,
            "xl": 1200,
            "xxl": 1200
        },
        "colors": {
            "theme": {
                "base": {
                    "white": "#ffffff",
                    "primary": "#0BB783",
                    "secondary": "#E5EAEE",
                    "success": "#1BC5BD",
                    "info": "#8950FC",
                    "warning": "#FFA800",
                    "danger": "#F64E60",
                    "light": "#F3F6F9",
                    "dark": "#212121"
                },
                "light": {
                    "white": "#ffffff",
                    "primary": "#D7F9EF",
                    "secondary": "#ECF0F3",
                    "success": "#C9F7F5",
                    "info": "#EEE5FF",
                    "warning": "#FFF4DE",
                    "danger": "#FFE2E5",
                    "light": "#F3F6F9",
                    "dark": "#D6D6E0"
                },
                "inverse": {
                    "white": "#ffffff",
                    "primary": "#ffffff",
                    "secondary": "#212121",
                    "success": "#ffffff",
                    "info": "#ffffff",
                    "warning": "#ffffff",
                    "danger": "#ffffff",
                    "light": "#464E5F",
                    "dark": "#ffffff"
                }
            },
            "gray": {
                "gray-100": "#F3F6F9",
                "gray-200": "#ECF0F3",
                "gray-300": "#E5EAEE",
                "gray-400": "#D6D6E0",
                "gray-500": "#B5B5C3",
                "gray-600": "#80808F",
                "gray-700": "#464E5F",
                "gray-800": "#1B283F",
                "gray-900": "#212121"
            }
        },
        "font-family": "Poppins"
    };
    </script>
    <script src="assets/plugins/global/plugins.bundle1036.js?v=2.1.1"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle1036.js?v=2.1.1"></script>
    <script src="assets/js/scripts.bundle1036.js?v=2.1.1"></script>
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle1036.js?v=2.1.1"></script>
    <script src="assets/js/pages/widgets1036.js?v=2.1.1"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
</body>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                scrollX: true,
            });
        });
    </script>

</html>