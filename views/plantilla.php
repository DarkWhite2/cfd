<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COFAD</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="views/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="views/css/adminlte.min.css">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini login-page">
    <?php
        if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
            echo '<div class="wrapper">';

            /*=============================================
            CABEZOTE
            =============================================*/
            include "inc/cabezote.php";

            /*=============================================
            MENU
            =============================================*/

            include "inc/menu.php";

            /*=============================================
            CONTENIDO
            =============================================*/

            if(isset($_GET["ruta"])){
                if($_GET["ruta"] == "inicio" ||
                    $_GET["ruta"] == "perfil" ||
                    $_GET["ruta"] == "salir"){
                    include "modules/".$_GET["ruta"].".php";
                }
                else{
                    include "modules/404.php";
                }
            }
            else{
                include "modules/inicio.php";
            }
            /*=============================================
            FOOTER
            =============================================*/
            include "inc/footer.php";

            echo '</div>';

        }
        else{
            include "modules/login.php";
        }
    ?>

    <!-- jQuery -->
    <script src="views/js/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="views/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="views/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="views/js/demo.js"></script>
</body>

</html>