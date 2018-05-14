<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
  

                    <!-- SERVICES -->
                    <section id="services-section" class="wprt-section services">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center margin-bottom-10">Layanan Kami</h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <?php foreach ($content as $con) { ?>

                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap">
                                            <span class="dd-icon icon-users"></span>
                                        </div>
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#"><?php echo $con->title; ?></a></h3>
                                            <?php echo $con->content; ?>
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="50" data-mobi="30" data-smobi="30"></div> 
                                </div><!-- /.col-md-4 --> 

                                <?php } ?>

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>
