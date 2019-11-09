<?php 
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Travelindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <!--
    =========================================================
    * ArchitectUI HTML Theme Dashboard - v1.0.0
    =========================================================
    * Product Page: https://dashboardpack.com
    * Copyright 2019 DashboardPack (https://dashboardpack.com)
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free/blob/master/LICENSE)
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->
<link href="main.css" rel="stylesheet">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/datatables.min.css" rel="stylesheet">
<link href="assets/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="assets/js/datatables.min.js"></script>
</head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- Header -->
        <?php if(isset(($_SESSION['nama']))):?>
         <?php  @require_once 'partials/_header.php' ?>
                <div class="app-main">
        <div class="app-sidebar sidebar-shadow">
                    <div class="app-header__logo">
                        <!-- Logo Kiri-->
                        <?php  include 'partials/_logo.php' ?>
                    </div>
                    <div class="app-header__mobile-menu">
                        <div>
                            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                    <div class="app-header__menu">
                        <!-- Sidebar -->
                        <?php  @require_once 'partials/_sidebar_menu.php' ?>
                    </div>
                </div>
                </div>
                <?php endif; ?>

                <?php if(!isset(($_SESSION['nama']))):?>
                    <?php  @require_once 'partials/_headerbefore.php' ?>
                <?php endif; ?>

                <div class="app-main__outer">
                    <div class="app-main__inner" style="min-height: 100vh;">
                        <!-- main content -->
                        <?php 
                        $link=@$_GET['travel'];
                        
                        if($link==''){
                            if(isset(($_SESSION['nama']))){
                            @require_once 'views/admin/dashboard.php';
                            }
                            else{
                                @require_once 'firstpage.php';
                            }
                        
                        }else if($link=='login'){
                            @require_once 'views/admin/login.php';
                        }else if($link=='logout'){
                            @require_once 'model/logout.php';
                        }else if($link=='regist'){
                            @require_once 'views/admin/registration.php';
                        }else if($link=='prosesregist'){
                            @require_once 'model/register.php';
                        }else if($link=='proseslogin'){
                            @require_once 'model/login.php';
                        }else if($link=='dashboard'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/dashboard.php';
                            }
                        }else if($link=='Travel'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/admin_listtravel.php';
                            }
                        }else if($link=='tambahTravel'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/admin_addtravel.php';
                            }
                        }else if($link=='provinsi'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/wilayah/provinsi/provinsi.php';
                            }
                        }else if($link=='kotakab'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/wilayah/kotakab/kotakab.php';
                            }
                        }else if($link=='kecamatan'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/wilayah/kecamatan/kecamatan.php';
                            }
                        }else if($link=='desa'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/wilayah/desa/desa.php';
                            }
                        }else if($link=='tambahProvinsi'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/wilayah/provinsi/addprovinsi.php';
                            }
                        }else if($link=='prosesprov'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'model/addprovinsi.php';
                            }
                        }else if($link=='editprov'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'views/admin/wilayah/provinsi/editprovinsi.php';
                            }
                        }else if($link=='prosesedtprov'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'model/editprovinsi.php';
                            }
                        }else if($link=='hapusprov'){
                            if(!isset($_SESSION['nama'])){
                                header('Location: ?travel=login');
                            }else{
                            @require_once 'model/function.php';
                            }
                        }
                         ?>
                    </div>
                <div class="app-wrapper-footer shadow-lg mt-3">
                <?php  @require_once 'partials/_footer.php' ?>
                    <!-- Footer -->
                </div>
                </div>
        </div>
</body>
<script type="text/javascript" src="main.js"></script>
</html>
