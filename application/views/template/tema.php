<!DOCTYPE html>
<!--[if IE 8 ]><html class="ie" xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-US" lang="en-US"><!--<![endif]-->
<head>
    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <title><?php echo $title ? $title.' - ' : ''; ?> PT. Lima Inti Sinergi</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Theme Style -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css?v9') ?>">

    <!-- Favicon and touch icons  -->
    <link rel="shortcut icon" href="<?php echo base_url('assets/lini-logo.png');?>">
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('assets/lini-logo.png');?>">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118273370-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118273370-1');
  </script>

  <style type="text/css">
      .putih{
            color: #c1c1c1;
      }
  </style>

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<!-- <body class="front-page no-sidebar site-layout-full-width header-style-1 menu-has-search"> -->

    <body class="<?php echo @$with_sidebar ? $with_sidebar : 'front-page no-sidebar site-layout-full-width'; ?>  header-style-1 menu-has-search header-sticky">


        <div id="wrapper" class="animsition">
            <div id="page" class="clearfix">

                <div id="site-header-wrap">
                    <!-- Top Bar -->
                    <div id="top-bar" class="style-2">
                        <div id="top-bar-inner" class="container">
                            <div class="top-bar-inner-wrap">

                                <div class="top-bar-socials">
                                    <div class="inner">
                                        <span class="icons">
                                            <a href="#" title="Twitter"><span class="fa fa-twitter" aria-hidden="true"></span></a>
                                            <a href="#" title="Facebook"><span class="fa fa-facebook" aria-hidden="true"></span></a>
                                            <a href="#" title="Google Plus"><span class="fa fa-google-plus" aria-hidden="true"></span></a> 
                                        </span>
                                    </div>
                                </div><!-- /.top-bar-socials -->

                                <div class="top-bar-content">
                                    <span id="top-bar-text">
                                        <i class="fa fa-phone-square"></i> +62 21 28541102 
                                        <i class="fa fa-envelope"></i><a href="mailto:marketing@limaintisinergi.com" class="__cf_email__">marketing@limaintisinergi.com</a>
                                        <i class="fa fa-clock-o"></i>Senin - Sabtu : 7:00 - 17:00
                                    </span><!-- /#top-bar-text -->
                                </div><!-- /.top-bar-content -->
                            </div>
                        </div>
                    </div><!-- /#top-bar -->

                    <!-- Header -->
                    <header id="site-header" class="header-front-page style-1">
                        <div id="site-header-inner" class="container">
                            <div class="wrap-inner">          
                                <div id="site-logo" class="clearfix">
                                    <div id="site-logo-inner">
                                        <a href="<?php echo site_url() ?>" title="Lima Inti Sinergi" rel="home" class="main-logo">
                                            <img src="<?php echo base_url('assets/lini-logo.png');?>" alt="Lima Inti Sinergi" data-retina="<?php echo base_url('assets/lini-logo.png');?>" width="70px">
                                        </a>
                                    </div>
                                </div><!-- /#site-logo -->

                                <div class="mobile-button"><span></span></div><!-- //mobile menu button -->

                                <!-- <?php echo $this->uri->segment(1); ?>  -->
                                
                                <nav id="main-nav" class="main-nav">        
                                    <ul class="menu">
                                        <li class="menu-item <?php if ($this->uri->segment(1)==='' or empty($this->uri->segment(1))) { echo 'current-menu-item'; } ?>">
                                            <a href="<?php echo site_url() ?>">Home</a></li>
                                        <li class="menu-item menu-item-has-children <?php if ($this->uri->segment(1)==='tentang-kami' or $this->uri->segment(1)==='visi-misi' or $this->uri->segment(1)==='legalitas') { echo 'current-menu-item'; } ?>"><a href="#">Profil</a>
                                            <ul class="sub-menu">   
                                                <li class="menu-item"><a href="<?php echo site_url('tentang-kami') ?>">Tentang Kami</a></li>
                                                <li class="menu-item"><a href="<?php echo site_url('visi-misi') ?>">Visi dan Misi</a></li>  
                                                <li class="menu-item"><a href="<?php echo site_url('legalitas') ?>">Legalitas</a></li>  
                                            </ul>
                                        </li> 
                                        <li class="menu-item <?php if ($this->uri->segment(1)==='layanan-kami') { echo 'current-menu-item'; } ?>"><a href="<?php echo site_url('layanan-kami') ?>">Layanan</a></li>
                                        <li class="menu-item <?php if ($this->uri->segment(1)==='portofolio') { echo 'current-menu-item'; } ?>"><a href="<?php echo site_url('portofolio') ?>">Portofolio</a></li>
                                        <li class="menu-item <?php if ($this->uri->segment(1)==='blog') { echo 'current-menu-item'; } ?>"><a href="<?php echo site_url('blog') ?>">Berita</a></li> 
                                        <li class="menu-item <?php if ($this->uri->segment(1)==='kontak-kami') { echo 'current-menu-item'; } ?>"><a href="<?php echo site_url('kontak-kami') ?>">Kontak Kami</a></li>
                                    </ul>
                                </nav><!-- /#main-nav --> 
                                <!-- /#header-search -->

                            </div>
                        </div><!-- /#site-header-inner -->
                    </header><!-- /#site-header -->
                </div><!-- /#site-header-wrap -->

                <?php echo $page ? $this->load->view($page) : ''; ?>

                <!-- Footer -->
                <?php $footer = $this->Home_model->getMenuDetail(29, 'ID' , 1); 
                $info = $this->Home_model->getMenuDetail(30, 'ID' , 1);?>

                <footer id="footer">
                    <div id="footer-widgets" class="container style-1">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="widget widget_text">
                                    <h2 class="widget-title"><span><?php echo $footer[0]->title; ?></span></h2>
                                    <div class="textwidget">
                                        <img src="<?php echo base_url('uploads/contents/'.$footer[0]->photo);?>" width="100" height="30" alt="image" class="margin-top-5 margin-bottom-25" />
                                         <?php echo $footer[0]->content; ?>

                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="widget widget_links">
                                    <h2 class="widget-title"><span>MENU</span></h2>
                                    <ul class="wprt-links clearfix col2">
                                        <li class="style-2"><a href="#">Beranda</a></li>
                                        <li class="style-2"><a href="#">Tentang Kami</a></li>
                                        <li class="style-2"><a href="#">Visi dan Misi</a></li>
                                        <li class="style-2"><a href="#">Legalitas</a></li>
                                        <li class="style-2"><a href="#">Layanan</a></li>
                                        <li class="style-2"><a href="#">Portofolio</a></li>
                                        <li class="style-2"><a href="#">Berita</a></li>
                                        <li class="style-2"><a href="#">Kontak Kami</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="widget widget_information">
                                    <h2 class="widget-title"><span><?php echo $info[0]->title; ?></span></h2>
                                    <ul class="style-2">
                                        <?php echo $info[0]->content; ?>
                                      <!--   <li class="address clearfix">
                                            <span class="hl">Head Office:</span>
                                            <span class="text">Epicentrum Walk South, 529A Jl. HR. Rasuna Said, Kuningan Jakarta</span>
                                        </li>
                                        <li class="address clearfix">
                                            <span class="hl">Operation:</span>
                                            <span class="text">Jl. Palbatu 5 No 8 RT 008 RW 004 Kel. Menteng Dalam Kec. Tebet Jakarta</span>
                                        </li>
                                        <li class="phone clearfix">
                                            <span class="hl">Phone:</span> 
                                            <span class="text">+62 21 28541102</span> 
                                            <span class="text">+62 21 5682703</span>
                                        </li>
                                        <li class="email clearfix">
                                            <span class="hl">E-mail:</span>
                                            <span class="text"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d0bdb1a2bbb5a4b9beb790bcb9bdb1b9bea4b9a3b9beb5a2b7b9feb3bfbd">[email&#160;protected]</a></span>
                                            <span class="text"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b3c0c6c3c3dcc1c7f3dfdaded2daddc7dac0daddd6c1d4da9dd0dcde">[email&#160;protected]</a></span>
                                            <span class="text"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="385b4b785451555951564c514b51565d4a5f51165b5755">[email&#160;protected]</a></span>
                                        </li> -->
                                    </ul>
                                </div>

                                <div class="widget widget_spacer">
                                    <div class="wprt-spacer clearfix" data-desktop="10" data-mobi="10" data-smobi="10"></div>
                                </div>

                                <div class="widget widget_socials">
                                    <div class="socials">
                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>

                <!-- Bottom -->
                <div id="bottom" class="clearfix style-1">
                    <div id="bottom-bar-inner" class="wprt-container">
                        <div class="bottom-bar-inner-wrap">

                            <div class="bottom-bar-content">
                                <div id="copyright">Developed by <a href="mailto:lutfi@awanesia.com">Lutfi</a>
                                </div><!-- /#copyright -->
                            </div><!-- /.bottom-bar-content -->

                        </div>
                    </div>
                </div>
            </div><!-- /#page -->
        </div><!-- /#wrapper -->

        <a id="scroll-top"></a>

        <!-- Javascript -->
        <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/animsition.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/plugins.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/countTo.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/fitText.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/flexslider.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/vegas.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/cube.portfolio.js');?>"></script>



        <!-- Revolution Slider -->
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/jquery.themepunch.tools.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/jquery.themepunch.revolution.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/rev-slider.js');?>"></script>
        <!-- Load Extensions only on Local File Systems ! The following part can be removed on Server for On Demand Loading -->  
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.actions.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.carousel.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.kenburn.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.layeranimation.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.migration.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.navigation.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.parallax.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.slideanims.min.js');?>"></script>
        <script type="text/javascript" src="<?php echo base_url('includes/rev-slider/js/extensions/revolution.extension.video.min.js');?>"></script>

<!-- luyfi ganteng -->

        <!-- Google Maps -->
        <?php if ($this->uri->segment('1')=='kontak-kami') { ?>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBswyJLpoKXqeHRPwvUFx_CtXJkK3DD9Js&callback"></script>
        <script type="text/javascript" src="<?php echo base_url('assets/js/gmap3.min.js'); ?>"></script>  
        <?php } ?>
        <script type="text/javascript" src="<?php echo base_url('assets/js/main.js?x');?>"></script>

    </body>
    </html>

