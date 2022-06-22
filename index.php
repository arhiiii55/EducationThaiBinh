        <!-- header php  -->
        <?php
        require_once './mvc/admin/core/db.php';
        // require_once "./mvc/db.php";
        $db = new DB;
        session_start();
        require_once "./system/bridge.php";
        // include_once("./mvc/admin/views/header.php");
        $app = new app();
        // $appwebsite  = new appsite();
        // $appwebsite = new appwebsite() ;
        // include("./mvc/admin/views/sliderbar.php");

        //
        $db->closeDatabase();
        ?>