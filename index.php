<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>DASHBOARD</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- site icon -->
    <link rel="icon" href="assets/images/fevicon.png" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <!-- site css -->
    <link rel="stylesheet" href="assets/style.css" />
    <!-- responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- color css -->
    <link rel="stylesheet" href="assets/css/colors.css" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.css" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="assets/css/perfect-scrollbar.css" />
    <!-- custom css -->
    <link rel="stylesheet" href="assets/css/custom.css" />
    <!-- fancy box js -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
</head>

<body class="dashboard dashboard_1">
    <div class="full_container">
        <div class="inner_container">

            <?php include 'includes/templates/sidebar.php' ?>

            <!-- right content -->
            <div id="content">
                <!-- topbar -->
                <div class="topbar">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="full">
                            <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                            <div class="logo_section">
                                <a href="index.html"><img class="img-responsive" src="assets/images/logo/logo.png" alt="#" /></a>
                            </div>
                            <div class="right_topbar">
                                <div class="icon_info">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                        <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                        <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                                    </ul>
                                    <ul class="user_profile_dd">
                                        <li>
                                            <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="assets/images/layout_img/user_img.jpg" alt="#" /><span class="name_user">John David</span></a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="profile.html">My Profile</a>
                                                <a class="dropdown-item" href="settings.html">Settings</a>
                                                <a class="dropdown-item" href="help.html">Help</a>
                                                <a class="dropdown-item" href="#"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
                <!-- end topbar -->
                <!-- dashboard inner -->
                <div class="midde_cont">
                    <div class="container-fluid">
                        <div class="row column_title">
                            <div class="col-md-12">
                                <div class="page_title">
                                    <h2>Dashboard</h2>
                                </div>
                            </div>
                        </div>
                        <!-- Tarjetas dashboard -->
                        <div class="row justify-content-center">
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-user yellow_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">2500</p>
                                            <p class="head_couter">Clientes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-user green_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">500</p>
                                            <p class="head_couter">Activos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-user orange_color2"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">100</p>
                                            <p class="head_couter">Inactivos</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-user purple_color2"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">65</p>
                                            <p class="head_couter">Visitas</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-users blue1_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">3</p>
                                            <p class="head_couter">Entrenadores</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-dollar green_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">123.50</p>
                                            <p class="head_couter">Venta X día</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full counter_section margin_bottom_30">
                                    <div class="couter_icon">
                                        <div>
                                            <i class="fa fa-check-square-o green_color"></i>
                                        </div>
                                    </div>
                                    <div class="counter_no">
                                        <div>
                                            <p class="total_no">60</p>
                                            <p class="head_couter">Asistencias</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tarjeta de redes sociales -->
                        <!--  <div class="row column1 social_media_section">
                            <div class="col-md-6 col-lg-3">
                                <div class="full socile_icons fb margin_bottom_30">
                                    <div class="social_icon">
                                        <i class="fa fa-facebook"></i>
                                    </div>
                                    <div class="social_cont">
                                        <ul>
                                            <li>
                                                <span><strong>35k</strong></span>
                                                <span>Friends</span>
                                            </li>
                                            <li>
                                                <span><strong>128</strong></span>
                                                <span>Feeds</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full socile_icons tw margin_bottom_30">
                                    <div class="social_icon">
                                        <i class="fa fa-twitter"></i>
                                    </div>
                                    <div class="social_cont">
                                        <ul>
                                            <li>
                                                <span><strong>584k</strong></span>
                                                <span>Followers</span>
                                            </li>
                                            <li>
                                                <span><strong>978</strong></span>
                                                <span>Tweets</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full socile_icons linked margin_bottom_30">
                                    <div class="social_icon">
                                        <i class="fa fa-linkedin"></i>
                                    </div>
                                    <div class="social_cont">
                                        <ul>
                                            <li>
                                                <span><strong>758+</strong></span>
                                                <span>Contacts</span>
                                            </li>
                                            <li>
                                                <span><strong>365</strong></span>
                                                <span>Feeds</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-3">
                                <div class="full socile_icons google_p margin_bottom_30">
                                    <div class="social_icon">
                                        <i class="fa fa-google-plus"></i>
                                    </div>
                                    <div class="social_cont">
                                        <ul>
                                            <li>
                                                <span><strong>450</strong></span>
                                                <span>Followers</span>
                                            </li>
                                            <li>
                                                <span><strong>57</strong></span>
                                                <span>Circles</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div> -->

                        <!-- Tabla de administración -->
                        <div class="row">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Administración</h2>
                                    </div>
                                </div>
                                <div class="full inner_elements">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab_style2">
                                                <div class="tabbar padding_infor_info">
                                                    <nav>
                                                        <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                            <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#nav-home_s2" role="tab" aria-controls="nav-home_s2" aria-selected="true">Clientes</a>
                                                            <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#nav-profile_s2" role="tab" aria-controls="nav-profile_s2" aria-selected="false">Usuarios</a>
                                                            <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact_s2" role="tab" aria-controls="nav-contacts_s2" aria-selected="false">Productos</a>
                                                            <a class="nav-item nav-link" id="nav-ventas-tab2" data-toggle="tab" href="#nav-ventas-s2" role="tab" aria-controls="nav-ventas_s2" aria-selected="false">Ventas</a>
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content" id="nav-tabContent_2">
                                                        <div class="tab-pane fade show active" id="nav-home_s2" role="tabpanel" aria-labelledby="nav-home-tab">
                                                            <!-- Clientes -->
                                                            <div class="row column1">
                                                                <div class="col-md-12">
                                                                    <div class="white_shd full margin_bottom_30">
                                                                        <div class="full graph_head d-flex justify-content-between">
                                                                            <div class="heading1 margin_0">
                                                                                <h2>Registro de clientes</h2>
                                                                            </div>
                                                                            <form class="form-inline my-2 my-lg-0">
                                                                                <input class="form-control mr-sm-2" type="search" placeholder="Nombre de cliente" aria-label="Search">
                                                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="full price_table padding_infor_info">
                                                                            <div class="row" style="height: 700px;overflow-y:auto;">
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg1.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg2.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg3.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg4.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg5.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg1.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg2.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg3.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg4.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg5.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg1.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg2.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg3.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg4.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                                <!-- column contact -->
                                                                                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 profile_details margin_bottom_30">
                                                                                    <div class="contact_blog">
                                                                                        <h4 class="brief">Digital Strategist</h4>
                                                                                        <div class="contact_inner">
                                                                                            <div class="left">
                                                                                                <h3>John Smith</h3>
                                                                                                <p><strong>About: </strong>Frontend Developer</p>
                                                                                                <ul class="list-unstyled">
                                                                                                    <li><i class="fa fa-envelope-o"></i> : test@gmail.com</li>
                                                                                                    <li><i class="fa fa-phone"></i> : 987 654 3210</li>
                                                                                                </ul>
                                                                                            </div>
                                                                                            <div class="right">
                                                                                                <div class="profile_contacts">
                                                                                                    <img class="img-responsive" src="assets/images/layout_img/msg5.png" alt="#">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="bottom_list">
                                                                                                <div class="left_rating">
                                                                                                    <p class="ratings">
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star"></span></a>
                                                                                                        <a href="#"><span class="fa fa-star-o"></span></a>
                                                                                                    </p>
                                                                                                </div>
                                                                                                <div class="right_button">
                                                                                                    <button type="button" class="btn btn-success btn-xs"> <i class="fa fa-user">
                                                                                                        </i> <i class="fa fa-comments-o"></i>
                                                                                                    </button>
                                                                                                    <button type="button" class="btn btn-primary btn-xs">
                                                                                                        <i class="fa fa-user"> </i> View Profile
                                                                                                    </button>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- end column contact blog -->
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- end row -->
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-profile_s2" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                            <!-- Usuarios -->
                                                            <div class="row column1">
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="full white_shd margin_bottom_30">
                                                                        <div class="info_people">
                                                                            <div class="p_info_img">
                                                                                <img src="assets/images/layout_img/msg2.png" alt="#">
                                                                            </div>
                                                                            <div class="user_info_cont">
                                                                                <h4>Smith</h4>
                                                                                <p>developer@gmail.com</p>
                                                                                <p class="p_status">Developer</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="full white_shd margin_bottom_30">
                                                                        <div class="info_people">
                                                                            <div class="p_info_img">
                                                                                <img src="assets/images/layout_img/msg3.png" alt="#">
                                                                            </div>
                                                                            <div class="user_info_cont">
                                                                                <h4>David</h4>
                                                                                <p>developer@gmail.com</p>
                                                                                <p class="p_status">Developer</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 col-lg-4">
                                                                    <div class="full white_shd margin_bottom_30">
                                                                        <div class="info_people">
                                                                            <div class="p_info_img">
                                                                                <img src="assets/images/layout_img/msg4.png" alt="#">
                                                                            </div>
                                                                            <div class="user_info_cont">
                                                                                <h4>John</h4>
                                                                                <p>developer@gmail.com</p>
                                                                                <p class="p_status">Tester</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                            <!-- Productos -->
                                                            <div class="row column4 graph">
                                                                <!-- Gallery section -->
                                                                <div class="col-md-12">
                                                                    <div class="white_shd full margin_bottom_30">
                                                                        <div class="full graph_head d-flex justify-content-between">
                                                                            <div class="heading1 margin_0">
                                                                                <h2>Productos en stock</h2>
                                                                            </div>
                                                                            <form class="form-inline my-2 my-lg-0">
                                                                                <input class="form-control mr-sm-2" type="search" placeholder="Nombre de producto" aria-label="Search">
                                                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="full gallery_section_inner padding_infor_info" style="height: 700px;overflow-y:auto;">
                                                                            <div class="row">
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g1.jpg"><img class="img-responsive" src="assets/images/layout_img/g1.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g2.jpg"><img class="img-responsive" src="assets/images/layout_img/g2.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g3.jpg"><img class="img-responsive" src="assets/images/layout_img/g3.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g4.jpg"><img class="img-responsive" src="assets/images/layout_img/g4.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g5.jpg"><img class="img-responsive" src="assets/images/layout_img/g5.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g6.jpg"><img class="img-responsive" src="assets/images/layout_img/g6.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g7.jpg"><img class="img-responsive" src="assets/images/layout_img/g7.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g8.jpg"><img class="img-responsive" src="assets/images/layout_img/g8.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g9.jpg"><img class="img-responsive" src="assets/images/layout_img/g9.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g10.jpg"><img class="img-responsive" src="assets/images/layout_img/g10.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g11.jpg"><img class="img-responsive" src="assets/images/layout_img/g11.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g12.jpg"><img class="img-responsive" src="assets/images/layout_img/g12.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g13.jpg"><img class="img-responsive" src="assets/images/layout_img/g13.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g14.jpg"><img class="img-responsive" src="assets/images/layout_img/g14.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g15.jpg"><img class="img-responsive" src="assets/images/layout_img/g15.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g16.jpg"><img class="img-responsive" src="assets/images/layout_img/g16.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g1.jpg"><img class="img-responsive" src="assets/images/layout_img/g1.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g2.jpg"><img class="img-responsive" src="assets/images/layout_img/g2.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g3.jpg"><img class="img-responsive" src="assets/images/layout_img/g3.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g4.jpg"><img class="img-responsive" src="assets/images/layout_img/g4.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g5.jpg"><img class="img-responsive" src="assets/images/layout_img/g5.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g6.jpg"><img class="img-responsive" src="assets/images/layout_img/g6.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g7.jpg"><img class="img-responsive" src="assets/images/layout_img/g7.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g8.jpg"><img class="img-responsive" src="assets/images/layout_img/g8.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="nav-ventas-s2" role="tabpanel" aria-labelledby="nav-ventas-s2">
                                                            <!-- Reporte de ventas -->
                                                            <div class="col-md-12">
                                                                <div class="white_shd full margin_bottom_30">
                                                                    <div class="full graph_head">
                                                                        <div class="heading1 margin_0">
                                                                            <h2>Reporte de ventas</h2>
                                                                        </div>
                                                                    </div>
                                                                    <div class="table_section padding_infor_info">
                                                                        <div class="table-responsive-sm">
                                                                            <table class="table">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>#</th>
                                                                                        <th>Firstname</th>
                                                                                        <th>Lastname</th>
                                                                                        <th>Age</th>
                                                                                        <th>City</th>
                                                                                        <th>Country</th>
                                                                                        <th>Sex</th>
                                                                                        <th>Example</th>
                                                                                        <th>Example</th>
                                                                                        <th>Example</th>
                                                                                        <th>Example</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td>1</td>
                                                                                        <td>Anna</td>
                                                                                        <td>Pitt</td>
                                                                                        <td>35</td>
                                                                                        <td>New York</td>
                                                                                        <td>USA</td>
                                                                                        <td>Female</td>
                                                                                        <td>Yes</td>
                                                                                        <td>Yes</td>
                                                                                        <td>Yes</td>
                                                                                        <td>Yes</td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tabla de venta -->
                        <div class="row">
                            <div class="white_shd full margin_bottom_30">
                                <div class="full graph_head">
                                    <div class="heading1 margin_0">
                                        <h2>Punto de venta</h2>
                                    </div>
                                </div>
                                <div class="full inner_elements">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="tab_style2">
                                                <div class="tabbar padding_infor_info">
                                                    <nav>
                                                        <div class="nav nav-tabs" id="nav-tab1" role="tablist">
                                                            <a class="nav-item nav-link active" id="nav-home-tab2" data-toggle="tab" href="#productos" role="tab" aria-controls="productos" aria-selected="true">Productos</a>
                                                            <a class="nav-item nav-link" id="nav-profile-tab2" data-toggle="tab" href="#Membresías" role="tab" aria-controls="Membresías" aria-selected="false">Membresías</a>
                                                            <!-- <a class="nav-item nav-link" id="nav-contact-tab2" data-toggle="tab" href="#nav-contact_s2" role="tab" aria-controls="nav-contacts_s2" aria-selected="false">Productos</a> -->
                                                        </div>
                                                    </nav>
                                                    <div class="tab-content" id="nav-tabContent_3">
                                                        <div class="tab-pane fade show active" id="productos" role="tabpanel" aria-labelledby="nav-home-tab">
                                                            <!-- Productos -->
                                                            <div class="row column4 graph">
                                                                <!-- Gallery section -->
                                                                <div class="col-md-12">
                                                                    <div class="white_shd full margin_bottom_30">
                                                                        <div class="full graph_head d-flex justify-content-between">
                                                                            <div class="heading1 margin_0">
                                                                                <h2>Elige los productos</h2>
                                                                            </div>
                                                                            <form class="form-inline my-2 my-lg-0">
                                                                                <input class="form-control mr-sm-2" type="search" placeholder="Nombre de producto" aria-label="Search">
                                                                                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                                                                            </form>
                                                                        </div>
                                                                        <div class="full gallery_section_inner padding_infor_info" style="height: 700px;overflow-y:auto;">
                                                                            <div class="row">
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g1.jpg"><img class="img-responsive" src="assets/images/layout_img/g1.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g2.jpg"><img class="img-responsive" src="assets/images/layout_img/g2.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g3.jpg"><img class="img-responsive" src="assets/images/layout_img/g3.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g4.jpg"><img class="img-responsive" src="assets/images/layout_img/g4.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g5.jpg"><img class="img-responsive" src="assets/images/layout_img/g5.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g6.jpg"><img class="img-responsive" src="assets/images/layout_img/g6.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g7.jpg"><img class="img-responsive" src="assets/images/layout_img/g7.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g8.jpg"><img class="img-responsive" src="assets/images/layout_img/g8.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g9.jpg"><img class="img-responsive" src="assets/images/layout_img/g9.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g10.jpg"><img class="img-responsive" src="assets/images/layout_img/g10.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g11.jpg"><img class="img-responsive" src="assets/images/layout_img/g11.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g12.jpg"><img class="img-responsive" src="assets/images/layout_img/g12.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g13.jpg"><img class="img-responsive" src="assets/images/layout_img/g13.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g14.jpg"><img class="img-responsive" src="assets/images/layout_img/g14.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g15.jpg"><img class="img-responsive" src="assets/images/layout_img/g15.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g16.jpg"><img class="img-responsive" src="assets/images/layout_img/g16.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g1.jpg"><img class="img-responsive" src="assets/images/layout_img/g1.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g2.jpg"><img class="img-responsive" src="assets/images/layout_img/g2.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g3.jpg"><img class="img-responsive" src="assets/images/layout_img/g3.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g4.jpg"><img class="img-responsive" src="assets/images/layout_img/g4.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g5.jpg"><img class="img-responsive" src="assets/images/layout_img/g5.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g6.jpg"><img class="img-responsive" src="assets/images/layout_img/g6.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g7.jpg"><img class="img-responsive" src="assets/images/layout_img/g7.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-sm-4 col-md-3 margin_bottom_30">
                                                                                    <div class="column">
                                                                                        <a data-fancybox="gallery" href="assets/images/layout_img/g8.jpg"><img class="img-responsive" src="assets/images/layout_img/g8.jpg" alt="#"></a>
                                                                                    </div>
                                                                                    <div class="heading_section d-flex justify-content-between align-items-center px-2">
                                                                                        <h4>Sed ut perspiciatis</h4>
                                                                                        <i class="fa fa-plus-circle fa-3x yellow_color"></i>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="Membresías" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                            <!-- Membresías -->
                                                            <form class="w-50 mx-auto">
                                                                <div class="form-group row">
                                                                    <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="nombre">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="apellido" class="col-sm-2 col-form-label">Apellido</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="text" class="form-control" id="apellido">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="email" class="col-sm-2 col-form-label">Correo</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="email" class="form-control" id="email">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="telefono" class="col-sm-2 col-form-label">Teléfono</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="tel" class="form-control" id="telefono">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="telefono" class="col-sm-2 col-form-label">Membresía</label>
                                                                    <div class="col-sm-10">
                                                                        <select class="custom-select">
                                                                            <option selected>Tipo de membresía</option>
                                                                            <option value="1">Visita</option>
                                                                            <option value="2">Mensualidad</option>
                                                                            <option value="3">Mensualidad y Caminadora</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <label for="descuento" class="col-sm-2 col-form-label">Descuento</label>
                                                                    <div class="col-sm-10">
                                                                        <input type="number" class="form-control" id="descuento" min="1" max="100" placeholder="Ejemplo: 5, 10, 15">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group row">
                                                                    <div class="col-sm-10">
                                                                        <button type="submit" class="btn btn-primary">Registrar</button>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <!-- <div class="tab-pane fade" id="nav-contact_s2" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et
                                                                quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos
                                                                qui ratione voluptatem sequi nesciunt.
                                                            </p>
                                                        </div> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- graph -->
                        <div class="row column2 graph margin_bottom_30">
                            <div class="col-md-l2 col-lg-12">
                                <div class="white_shd full">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Ventas del año</h2>
                                        </div>
                                    </div>
                                    <div class="full graph_revenue">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="content">
                                                    <div class="area_chart">
                                                        <canvas height="120" id="canvas"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end graph -->
                        <div class="row column3">
                            <!-- testimonial -->
                            <div class="col-md-6">
                                <div class="dark_bg full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Testimonial</h2>
                                        </div>
                                    </div>
                                    <div class="full graph_revenue">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="content testimonial">
                                                    <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
                                                        <!-- Wrapper for carousel items -->
                                                        <div class="carousel-inner">
                                                            <div class="item carousel-item active">
                                                                <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                                <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                                <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                                            </div>
                                                            <div class="item carousel-item">
                                                                <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                                <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                                <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                                            </div>
                                                            <div class="item carousel-item">
                                                                <div class="img-box"><img src="images/layout_img/user_img.jpg" alt=""></div>
                                                                <p class="testimonial">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae..</p>
                                                                <p class="overview"><b>Michael Stuart</b>Seo Founder</p>
                                                            </div>
                                                        </div>
                                                        <!-- Carousel controls -->
                                                        <a class="carousel-control left carousel-control-prev" href="#testimonial_slider" data-slide="prev">
                                                            <i class="fa fa-angle-left"></i>
                                                        </a>
                                                        <a class="carousel-control right carousel-control-next" href="#testimonial_slider" data-slide="next">
                                                            <i class="fa fa-angle-right"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end testimonial -->
                            <!-- progress bar -->
                            <div class="col-md-6">
                                <div class="white_shd full margin_bottom_30">
                                    <div class="full graph_head">
                                        <div class="heading1 margin_0">
                                            <h2>Progress Bar</h2>
                                        </div>
                                    </div>
                                    <div class="full progress_bar_inner">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="progress_bar">
                                                    <!-- Skill Bars -->
                                                    <span class="skill" style="width:73%;">Facebook <span class="info_valume">73%</span></span>
                                                    <div class="progress skill-bar ">
                                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%;">
                                                        </div>
                                                    </div>
                                                    <span class="skill" style="width:62%;">Twitter <span class="info_valume">62%</span></span>
                                                    <div class="progress skill-bar">
                                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="62" aria-valuemin="0" aria-valuemax="100" style="width: 62%;">
                                                        </div>
                                                    </div>
                                                    <span class="skill" style="width:54%;">Instagram <span class="info_valume">54%</span></span>
                                                    <div class="progress skill-bar">
                                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                                        </div>
                                                    </div>
                                                    <span class="skill" style="width:82%;">Google plus <span class="info_valume">82%</span></span>
                                                    <div class="progress skill-bar">
                                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100" style="width: 82%;">
                                                        </div>
                                                    </div>
                                                    <span class="skill" style="width:48%;">Other <span class="info_valume">48%</span></span>
                                                    <div class="progress skill-bar">
                                                        <div class="progress-bar progress-bar-animated progress-bar-striped" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end progress bar -->
                        </div>
                        <div class="row column4 graph">
                            <div class="col-md-6 margin_bottom_30">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner">
                                        <div class="dash_head">
                                            <h3><span><i class="fa fa-calendar"></i> 6 July 2018</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                                        </div>
                                        <div class="list_cont">
                                            <p>Today Tasks for Ronney Jack</p>
                                        </div>
                                        <div class="task_list_main">
                                            <ul class="task_list">
                                                <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>10:00 AM</strong></li>
                                                <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                                <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>11:00 AM</strong></li>
                                                <li><a href="#">Create new task for Dashboard</a><br><strong>10:00 AM</strong></li>
                                                <li><a href="#">Meeting about plan for Admin Template 2018</a><br><strong>02:00 PM</strong></li>
                                            </ul>
                                        </div>
                                        <div class="read_more">
                                            <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="dash_blog">
                                    <div class="dash_blog_inner">
                                        <div class="dash_head">
                                            <h3><span><i class="fa fa-comments-o"></i> Updates</span><span class="plus_green_bt"><a href="#">+</a></span></h3>
                                        </div>
                                        <div class="list_cont">
                                            <p>User confirmation</p>
                                        </div>
                                        <div class="msg_list_main">
                                            <ul class="msg_list">
                                                <li>
                                                    <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                                                    <span>
                                                        <span class="name_user">Herman Beck</span>
                                                        <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                        <span class="time_ago">12 min ago</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                                                    <span>
                                                        <span class="name_user">John Smith</span>
                                                        <span class="msg_user">On the other hand, we denounce.</span>
                                                        <span class="time_ago">12 min ago</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span><img src="images/layout_img/msg2.png" class="img-responsive" alt="#" /></span>
                                                    <span>
                                                        <span class="name_user">John Smith</span>
                                                        <span class="msg_user">Sed ut perspiciatis unde omnis.</span>
                                                        <span class="time_ago">12 min ago</span>
                                                    </span>
                                                </li>
                                                <li>
                                                    <span><img src="images/layout_img/msg3.png" class="img-responsive" alt="#" /></span>
                                                    <span>
                                                        <span class="name_user">John Smith</span>
                                                        <span class="msg_user">On the other hand, we denounce.</span>
                                                        <span class="time_ago">12 min ago</span>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="read_more">
                                            <div class="center"><a class="main_bt read_bt" href="#">Read More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- footer -->
                    <div class="container-fluid">
                        <div class="footer">
                            <p>Copyright © 2018 Designed by html.design. All rights reserved.<br><br>
                                Distributed By: <a href="https://themewagon.com/">ThemeWagon</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- end dashboard inner -->
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery.fancybox.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- wow animation -->
    <script src="assets/js/animate.js"></script>
    <!-- select country -->
    <script src="assets/js/bootstrap-select.js"></script>
    <!-- owl carousel -->
    <script src="assets/js/owl.carousel.js"></script>
    <!-- chart js -->
    <script src="assets/js/Chart.min.js"></script>
    <script src="assets/js/Chart.bundle.min.js"></script>
    <script src="assets/js/utils.js"></script>
    <script src="assets/js/analyser.js"></script>
    <!-- nice scrollbar -->
    <script src="assets/js/perfect-scrollbar.min.js"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/chart_custom_style1.js"></script>
</body>

</html>