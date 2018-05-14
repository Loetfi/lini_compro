
<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Visi dan Misi</h1>
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

                                <?php foreach ($content as $con) { ?>
                                <div class="col-md-6">
                                    <h2 class="line-height-normal margin-bottom-10"><?php echo @$con->title; ?></h2>
                                    <div class="wprt-lines style-1 custom-3">
                                        <div class="line-1"></div>
                                        <div class="line-2"></div>
                                    </div>

                                    <div class="wprt-spacer" data-desktop="25" data-mobi="25" data-smobi="25"></div>

                                    <p class="margin-bottom-25"><?php echo @$con->content; ?></p>
                                    
                                </div><!-- /.col-md-6 -->

                                <?php } ?>
                                   

                                <div class="col-md-12">
                                    <div class="wprt-spacer" data-desktop="80" data-mobi="60" data-smobi="60"></div>
                                </div>
                            </div><!-- /.row -->
                        </div><!-- /.container -->
                    </section>


                </div>
            </div>
        </div>
    </div>
</div>
