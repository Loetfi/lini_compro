<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">
                    <!-- WORKS -->
                    <section class="wprt-section">
                        <div class="container">
                            <div class="row"> 
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2 class="text-center font-size-28 margin-bottom-10"><?php echo @$title; ?></h2>
                                    <div class="wprt-lines style-2 custom-1">
                                        <div class="line-1"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>
                                  <!--   <p class="wprt-subtitle">Cras id justo eget sapien scelerisque lacinia non a eros. In a volutpat magna. Vivamus pretium urna at condimentum porta. Phasellus mollis mauris dolor, a tincidunt mauris fringilla.</p>
                                    <div class="wprt-spacer" data-desktop="43" data-mobi="30" data-smobi="30"></div> -->
                                </div><!-- /.col-md-12 -->
                                         
                                <div class="col-md-12">
                                    <div class="wprt-project has-bullets bullet-style-2" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="projects" class="cbp">
                                            <!-- <?php print_r($portofolio); ?> -->
                                            <?php foreach($portofolio as $port){ ?>
                                            <div class="cbp-item">
                                                <div class="project-item">
                                                    <div class="inner">
                                                        <div class="grid">
                                                        <figure class="effect-zoe">
                                                            <img src="<?php echo base_url('uploads/contents/'.$port->photo); ?>" alt="image" />
                                                            <figcaption>
                                                                <div>
                                                                    <h2><a target="" href="#"><?php echo $port->title;?></a></h2>
                                                                    <p><?php echo $port->content; ?></p>
                                                                </div>
                                                            </figcaption>           
                                                        </figure>
                                                        </div>

                                                        <a class="project-zoom cbp-lightbox" href="<?php echo base_url('uploads/contents/'.$port->photo); ?>" data-title="LUXURY BUILDINGS">
                                                            <i class="fa fa-arrows-alt"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div><!--/.cbp-item -->
                                            <?php } ?>
 
                                        </div><!-- /#projects -->
                                    </div><!--/.wprt-project -->
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
