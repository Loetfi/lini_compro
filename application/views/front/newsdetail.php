<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="" class="site-content clearfix col-sm-8">
            <div id="inner-content" class="inner-content-wrap">
                <div class="post-content-single-wrap">
                    <article class="hentry">
                        <div class="post-media clearfix">
                            <a href="#"><img src="<?php echo base_url('uploads/news/'.$news->gambar); ?>"></a>
                        </div><!-- /.post-media -->

                        <h2 class="post-title">
                            <span class="post-title-inner">
                                <a href="#"><?php echo $news->title; ?></a>
                            </span>
                        </h2><!-- /.post-title -->

                        <div class="post-meta style-2">
                            <div class="post-meta-content">
                                <div class="post-meta-content-inner"> 
                                    <span class="post-date item">
                                        <span class="inner"><span class="entry-date"><?php echo date('d F Y', strtotime($news->datepost)); ?></span></span>
                                    </span>
                                    
                                </div>
                            </div>
                        </div><!-- /.post-meta -->

                        <div class="post-content">
                            <?php echo $news->content; ?>
                        </div><!-- /.post-excerpt -->

                        
                        
                    </article>
                </div><!-- /.post-content-single-wrap -->
            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->

        <div class="col-sm-4">
            <div id="">
                <div id="" class="inner-content-wrap"> 

                    <div class="widget widget_search">
                        <form action="<?php echo site_url('search/') ?>" method="GET" role="search" class="search-form style-1">
                            <input type="text" class="  search-query form-control" placeholder="Pencarian" name="q" />
                            <button type="submit" class="search-submit" title="Search">Pencarian</button> 
                        </form>
                        
                    </div>

                    <div class="widget widget_categories">
                        <h2 class="widget-title"><span>Kategori</span></h2>
                        <ul>
                           <?php foreach ($category as $cat) { ?>
                               <li> <a href="<?php echo site_url('kategori/'.$cat->slugkategori);?>"><?php echo $cat->category_name; ?></a> </li>
                           <?php } ?> 
                       </ul>
                   </div>  
                   <!-- </div> -->
               </div><!-- /#inner-sidebar -->
           </div><!-- /#sidebar -->
           
       </div>
       
   </div><!-- /#content-wrap -->
</div><!-- /#main-content -->


<!-- Main Content Section --> 
<!-- Main Content Section -->
