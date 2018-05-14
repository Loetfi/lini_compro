<!-- <?php print_r($konten); ?>  -->
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading"><?php echo $konten[0]->title; ?></h1>
            </div> 
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- GALLERY -->
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-6">
                                    <h2 class="line-height-normal margin-bottom-10"><?php echo $konten[0]->title; ?></h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div> 

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class="margin-bottom-25"><?php echo $konten[0]->content; ?></p>
                                    <!-- <div class="row">
                                        <div class="col-md-4"> 
                                            <div class="wprt-counter text-center has-plus">
                                                <div class="number" data-speed="5000" data-to="13691" data-in-viewport="yes">13691</div>
                                                <div class="text">PROJECT COMPLETED</div>
                                            </div>

                                            <div class="wprt-spacer" data-desktop="0" data-mobi="35" data-smobi="35"></div>
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="wprt-counter text-center has-plus">
                                                <div class="number" data-speed="5000" data-to="1725" data-in-viewport="yes">1725</div>
                                                <div class="text">SATISFIED CLIENTS</div>
                                            </div>

                                            <div class="wprt-spacer" data-desktop="0" data-mobi="35" data-smobi="35"></div>
                                        </div> 
                                        <div class="col-md-4">
                                            <div class="wprt-counter text-center has-plus">
                                                <div class="number" data-speed="5000" data-to="984" data-in-viewport="yes">984</div>
                                                <div class="text">WORKERS EMPLOYED</div>
                                            </div>

                                            <div class="wprt-spacer" data-desktop="0" data-mobi="35" data-smobi="35"></div>
                                        </div> 
                                    </div> -->
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-6">
                                    <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">
                                        <div id="wprt-slider" class="flexslider">
                                            <ul class="slides">
                                                <?php foreach ($tentang_slide as $slide) { ?>
                                                <li class="flex-active-slide">
                                                    <a class="zoom" href="<?php echo base_url('uploads/contents/'.$slide->photo); ?>"><i class="fa fa-arrows-alt"></i></a>
                                                    <img src="<?php echo base_url('uploads/contents/'.$slide->photo); ?>" alt="image" />
                                                </li>
                                                <?php } ?> 
                                            </ul>
                                        </div>

                                        <div id="wprt-carousel" class="flexslider">
                                            <ul class="slides">
                                                <?php foreach ($tentang_slide as $slide) { ?>
                                                <li><img src="<?php echo base_url('uploads/contents/'.$slide->photo); ?>" alt="image"></li> 
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div><!-- /.col-md-6 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- PROMOTION 2 -->
                    <section class="wprt-section promotion parallax" style="background-image: url(<?php echo base_url('uploads/contents/'.$tagline[0]->photo); ?>);">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="120" data-mobi="80" data-smobi="60"></div>
                                    <h3 class="text-center text-white font-family-heading font-size-30 margin-bottom-20"> <?php echo @$tagline[0]->title; ?></h3>
                                    <div class="text-center margin-top-30">
                                        <a href="mailto:marketing@limaintisinergi.com" class="wprt-button white rounded-3px">Dapatkan Penawaran</a>
                                    </div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="120" data-mobi="80" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- TEAM -->
                    <section class="wprt-section team">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="40" data-smobi="40"></div>

                                    <h2 class="margin-bottom-10">Bertemu Tim Kami</h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                    <div class="wprt-team arrow-style-2 has-arrows arrow60 arrow-light" data-layout="slider" data-column="4" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="team-wrap" class="cbp">

                                            <?php foreach ($team as $tim) { ?>

                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="<?php echo base_url('uploads/contents/'.@$tim->photo); ?>" alt="image" />
                                                            </div> 
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name"><?php echo @$tim->title; ?></h4>
                                                            <div class="position"><?php echo @$tim->subtitle; ?></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <?php } ?>

                                            <!-- <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/2.jpg" alt="image" />
                                                            </div>
                                                            <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">Sarah Spence</h4>
                                                            <div class="position">Construction Assistant</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/3.jpg" alt="image" />
                                                            </div>
                                                            <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">John Halpern</h4>
                                                            <div class="position">Construction Manager</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member">
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/4.jpg" alt="image" />
                                                            </div>
                                                            <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                                <li class="linkedin"><a target="_blank" href="#"><i class="fa fa-linkedin"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">Tommy Atkins</h4>
                                                            <div class="position">Electricians</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="cbp-item">
                                                <div class="member"> 
                                                    <div class="inner">
                                                        <div class="image">
                                                            <div class="inner">
                                                                <img src="assets/img/team/5.jpg" alt="image" />
                                                            </div>
                                                            <ul class="socials clearfix">
                                                                <li class="facebook"><a target="_blank" href="#"><i class="fa fa-facebook"></i></a></li>
                                                                <li class="twitter"><a target="_blank" href="#"><i class="fa fa-twitter"></i></a></li>
                                                                <li class="google-plus"><a target="_blank" href="#"><i class="fa fa-google-plus"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="texts">
                                                            <h4 class="name">John Joe</h4>
                                                            <div class="position">Junior Architect</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div><!-- /#team-wrap -->
                                    </div><!-- /.wprt-team -->
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
