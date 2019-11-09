<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Web Programming 2</title>
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
<link href="assets/css/bootstrap.min.css" rel="stylesheet"></head>
<link href="assets/css/main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- Header -->
        <?php  @require_once 'partials/_headerbefore.php' ?>
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <!-- main content -->
                        <?php 
                        $link=$_GET['travel'];
                        if($link=='login'){
                            @require_once 'pages/login.php';
                        }else if($link=='regist'){
                            @require_once 'pages/registration.php';
                        }else if($link=='homepage'){
                            @require_once 'pages/homepage.php';
                        }else if($link=='listtour'){
                            @require_once 'pages/listtour.php';
                        }else if($link=='looktour'){
                            @require_once 'pages/looktour.php';
                        }else if($link=='ordertour'){
                            @require_once 'pages/ordertour.php';
                        }else if($link=='confirmpay'){
                            @require_once 'pages/confirmpay.php';
                        }else if($link=='admin_addtour'){
                            @require_once 'pages/admin_addtour.php';
                        }else if($link=='admin_edittour'){
                            @require_once 'pages/admin_edittour.php';
                        }else if($link=='admin_listtour'){
                            @require_once 'pages/admin_listtour.php';
                        }else if($link=='cslistorder'){
                            @require_once 'pages/cslistorder.php';
                        }else if($link=='report'){
                            @require_once 'pages/report.php';
                        }
                         ?>
                    </div>
                <div class="app-wrapper-footer position-fixed fixed-bottom">
                <?php  @require_once 'partials/_footer.php' ?>
                    <!-- Footer -->
                </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
    
<script type="text/javascript" src="assets/js/main.js"></script></body>
<script type="text/javascript" src="assets/js/jquery.min.js"></script></body>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script></body>
</html>
