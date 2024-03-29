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
<link href="assets/css/main.css" rel="stylesheet"></head>
<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <!-- Header -->
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
                <div class="app-main__outer">
                    <div class="app-main__inner">
                        <!-- main content -->
                        <?php 
                            @require_once 'pages/login.php';
                         ?>
                    </div>
                <div class="app-wrapper-footer">
                <?php  @require_once 'partials/_footer.php' ?>
                    <!-- Footer -->
                </div>
                </div>
                <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
        </div>
<script type="text/javascript" src="assets/js/main.js"></script></body>
</html>
