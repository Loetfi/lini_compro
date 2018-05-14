<!-- Slider -->
<div class="rev_slider_wrapper fullwidthbanner-container">
    <div id="rev-slider2" class="rev_slider fullwidthabanner">
        <ul> 
            <!-- Slide -->
            <?php foreach ($slider as $slide) { ?>  
            <li data-transition="random"> 
                <!-- Main Image -->
                <img src="<?php echo base_url('uploads/contents/'.$slide->photo) ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-no-retina>
                <!-- Layers -->
                <div class="sfb tp-caption tp-resizeme text-white font-family-heading text-shadow text-center font-weight-200 letter-spacing-2px"
                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                data-y="['middle','middle','middle','middle']" data-voffset="['-90','-90','-90','-90']"
                data-fontsize="['50','50','50','50']"
                data-lineheight="['68','64','60','56']"
                data-width="none"
                data-height="none"
                data-whitespace="nowrap"
                data-transform_idle="o:1;" 
                data-transform_in="o:0" 
                data-transform_out="o:0" 
                data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
                data-mask_out="x:0;y:0;s:inherit;e:inherit;"
                data-start="1500"
                data-splitin="none"
                data-splitout="none"
                data-responsive_offset="on">
                <?php echo $slide->title; ?>
            </div>
            <div class="sfb tp-caption tp-resizeme text-white text-shadow text-center"
            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
            data-y="['middle','middle','middle','middle']" data-voffset="['-14','-14','-14','-14']"
            data-fontsize="['50','50','50','50']"
            data-lineheight="['68','64','60','56']"
            data-width="none"
            data-height="none"
            data-whitespace="nowrap"
            data-transform_idle="o:1;" 
            data-transform_in="o:0" 
            data-transform_out="o:0" 
            data-mask_in="x:0px;y:0px;s:inherit;e:inherit;"
            data-mask_out="x:0;y:0;s:inherit;e:inherit;"
            data-start="1800"
            data-splitin="none"
            data-splitout="none"
            data-responsive_offset="on"
            data-lasttriggerstate="reset">
            <?php echo $slide->content; ?>
        </div> 
    </li>
    <!-- End Slide -->
    <?php } ?>

</ul>
<div class="tp-bannertimer tp-bottom"></div>
</div>
</div>


<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">
                <div class="page-content">

                    <!-- Promotion -->
                    <section class="promotion">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="wprt-spacer" data-desktop="8" data-mobi="8" data-smobi="8"></div>
                                    <h2 class="text-white text-center-mobile font-size-20 margin-bottom-0"><?php echo $tagline[0]->title; ?></h2>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="20" data-smobi="20"></div>
                                </div><!-- /.col-md-8 -->

                                <div class="col-md-4">
                                    <div class="text-right text-center-mobile"><a href="#" class="wprt-button white rounded-3px"><p><?php echo $tagline[0]->content; ?></p></a></div>
                                    <div class="wprt-spacer" data-desktop="0" data-mobi="15" data-smobi="15"></div>
                                </div><!-- /.col-md-4 -->

                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

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

                                <?php foreach ($layanan as $layan) { ?>
                                <div class="col-md-4">
                                    <div class="wprt-icon-box accent-background rounded icon-effect-2 icon-left">
                                        <div class="icon-wrap">
                                            <span class="dd-icon icon-users"></span>
                                        </div> 
                                        <div class="content-wrap">
                                            <h3 class="dd-title font-size-18"><a href="#"><?php echo $layan->title; ?></a></h3>
                                            <?php echo $layan->content; ?> 
                                        </div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="40" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-4 -->
                                <?php } ?>

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->

                            </div><!-- /.container -->
                        </section>

                        <!-- WORKS -->
                        <section class="wprt-section works parallax">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                        <h2 class="text-left text-white">Dokumentasi Pekerjaan</h2>
                                        <div class="wprt-lines custom-2">
                                            <div class="line-1"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <div class="wprt-project arrow-style-2 has-arrows arrow60 arrow-dark" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                            <div id="projects" class="cbp">

                                                <?php foreach ($dokumentasi as $doku) { ?>
                                                <div class="cbp-item">
                                                    <div class="project-item">
                                                        <div class="inner">
                                                            <div class="grid">
                                                                <figure class="effect-honey">
                                                                    <img src="<?php echo base_url('uploads/contents/'.@$doku->photo); ?>" alt="image" width="300px" />
                                                                    <figcaption>
                                                                        <div>
                                                                            <h2><a target="_blank" href="page-project-detail#"><?php echo @$doku->title; ?></a></h2>
                                                                            <?php echo @$doku->content; ?>
                                                                        </div>
                                                                    </figcaption>           
                                                                </figure>
                                                            </div>

                                                            <a class="project-zoom cbp-lightbox" href="<?php echo base_url('uploads/contents/'.@$doku->photo); ?>" data-title="<?php echo @$doku->title; ?>">
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

                        <!-- WHY CHOOSE US -->
                        <section class="wprt-section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                        <h2>Mengapa memilih kami ?</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                        <?php foreach ($mengapa as $why) { ?>

                                        <div class="wprt-toggle style-1">
                                            <h3 class="toggle-title"><?php echo $why->title; ?></h3> 
                                            <div class="toggle-content"><?php echo $why->content; ?></div>
                                        </div>
                                        <?php } ?>

                                    </div><!-- /.col-md-6 -->

                                    <div class="col-md-6">
                                        <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                        <h2>ABOUT US</h2>
                                        <div class="wprt-lines style-1 custom-3">
                                            <div class="line-1"></div>
                                            <div class="line-2"></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>

                                        <div class="wprt-galleries galleries w-570px" data-width="135" data-margin="10">

                                            <div id="wprt-slider" class="flexslider"> 
                                                <ul class="slides">
                                                    <?php foreach ($tentang as $ten) { ?>

                                                    <li class="flex-active-slide"> 
                                                        <a class="zoom" href="<?php echo base_url('uploads/contents/'.$ten->photo); ?>"><i class="fa fa-arrows-alt"></i></a>
                                                        <img src="<?php echo base_url('uploads/contents/'.$ten->photo); ?>" alt="image" />
                                                    </li> 

                                                    <?php } ?> 
                                                </ul>
                                            </div>

                                            <div id="wprt-carousel" class="flexslider">
                                                <ul class="slides">
                                                   <?php foreach ($tentang as $ten) { ?>

                                                   <li><img src="<?php echo base_url('uploads/contents/'.$ten->photo); ?>" alt="image"></li> 

                                                   <?php } ?> 

                                               </ul>
                                           </div>
                                       </div>
                                   </div><!-- /.col-md-6 -->

                                   <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                </div><!-- /.col-md-12 -->
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>

                    <!-- OFFER -->
                    <section class="wprt-section offer">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="70" data-mobi="60" data-smobi="60"></div>
                                    <h2>Berita Terkini</h2>
                                    <div class="wprt-lines style-1 custom-5">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>
                                    <div class="wprt-spacer" data-desktop="50" data-mobi="40" data-smobi="40"></div>
                                </div><!-- /.col-md-12 -->

                                <div class="col-md-12">
                                    <div class="wprt-service arrow-style-2 has-arrows arrow60 arrow-light" data-layout="slider" data-column="3" data-column2="3" data-column3="2" data-column4="1" data-gaph="30" data-gapv="30">
                                        <div id="service-wrap" class="cbp">

                                            <?php foreach ($news as $n) { ?>
                                            <div class="cbp-item">
                                                <div class="service-item clearfix">
                                                    <div class="thumb"><img src="<?php echo base_url('uploads/news/'.@$n->gambar); ?>" alt="image" /></div>
                                                    <div class="service-item-wrap">
                                                        <h3 class="title font-size-18"><a href="<?php echo site_url(''); ?>">
                                                            <?php echo strlen(@$n->title) > 30 ?  @substr($n->title, 0,30).'...' : $n->title; ?></a></h3>
                                                            <p>
                                                                <?php echo strlen(@$n->content) > 100 ?  substr(strip_tags(html_entity_decode($n->content)), 0,100).'...' : @substr(strip_tags(html_entity_decode($n->content)), 0,100); //echo html_entity_decode(@$n->content); ?> 
                                                            </p>

                                                            <a href="#" class="wprt-button small rounded-3px">Baca Lanjut</a>
                                                        </div>
                                                    </div>
                                                </div><!-- /.cbp-item --> 
                                                <?php } ?>
                                            </div><!-- /#service-wrap -->
                                        </div><!-- /.wprt-service -->
                                    </div><!-- /.col-md-12 -->

                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>

                        <!-- FACTS -->
                        <?php if (count($fakta) > 0) { ?>
                        
                        <section class="wprt-section facts parallax" style="background-image: url(<?php echo base_url('slider1.jpg');?>); background-repeat: space;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4">
                                    </div><!-- /.col-md-4 -->
                                    <div class="col-md-8">
                                        <div class="wprt-spacer" data-desktop="120" data-mobi="80" data-smobi="60"></div>
                                        <h2 class="text-right text-center-mobile text-white font-family-extend font-size-25 margin-bottom-0 line-height-normal letter-spacing-1px"><?php echo $fakta[0]->title; ?></h2>
                                        <h3 class="text-right text-center-mobile text-white font-family-heading font-size-40 line-height-normal margin-bottom-20 letter-spacing-1px"><strong><?php echo $fakta[1]->title; ?></strong></h3>
                                    </div><!-- /.col-md-8 -->
                                    <div class="col-md-6">
                                    </div><!-- /.col-md-6 -->
                                    <div class="col-md-2">
                                        <div class="wprt-counter text-center white-type has-plus">
                                            <div class="number" data-speed="5000" data-to="13691" data-in-viewport="yes">13691</div>
                                            <div class="text"><?php echo $fakta[2]->title; ?></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="0" data-mobi="25" data-smobi="25"></div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-2">
                                        <div class="wprt-counter text-center white-type has-plus">
                                            <div class="number" data-speed="5000" data-to="1725" data-in-viewport="yes">1725</div>
                                            <div class="text"><?php echo $fakta[3]->title; ?></div>
                                        </div>
                                        <div class="wprt-spacer" data-desktop="0" data-mobi="25" data-smobi="25"></div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-2">
                                        <div class="wprt-counter text-center white-type has-plus">
                                            <div class="number" data-speed="5000" data-to="984" data-in-viewport="yes">984</div>
                                            <div class="text"><?php echo $fakta[4]->title; ?></div>
                                        </div>
                                    </div><!-- /.col-md-2 -->
                                    <div class="col-md-12">
                                        <div class="wprt-spacer" data-desktop="130" data-mobi="80" data-smobi="60"></div>
                                    </div><!-- /.col-md-12 -->
                                </div><!-- /.row -->
                            </div><!-- /.container -->
                        </section>
                        <?php } ?>

                        
                    </div><!-- /.page-content -->
                </div>
            </div>
        </div>
    </div>
