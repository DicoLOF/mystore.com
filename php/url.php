<?php
set_include_path("php");

if (isset($_GET['pg'])) {
    if (substr_count($_GET['pg'], "/") > 0) {
        $pagina = explode("/", $_GET['pg']);
        if (!empty($pagina[1])) {
            if (is_file('./' . $pagina[1] . '.php')) {
                include $pagina[1] . '.php';
            } else {
                echo "<script>alert ('Essa não e uma pagina valida!') ; </script>";
                include "404.php";
            }
        } else {
            if (is_file('./' . $pagina[0] . '.php')) {
                include $pagina[0] . '.php';
            } else {
                echo "<script>alert ('Essa não e uma pagina valida!!') ; </script>";
                include "404.php";
            }
        }
    } else {
        if (is_file('./' . $_GET['pg'] . '.php')) {
            include $_GET['pg'] . '.php';
        } else {
            echo "<script>alert ('Essa não e uma pagina valida!!!') ; </script>";
            include "404.php";
        }
    }
} else {
    include "main.php";
}