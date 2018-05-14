<!-- <?php print_r($news); ?>   -->

<!-- Featured Title -->
<div id="featured-title" class="clearfix featured-title-left">
    <div id="featured-title-inner" class="container clearfix">
        <div class="featured-title-inner-wrap">
            <div class="featured-title-heading-wrap">
                <h1 class="featured-title-heading">Berita</h1>
            </div> 
        </div>
    </div>
</div>

<!-- Main Content -->
<div id="main-content" class="site-main clearfix">
    <div id="content-wrap" class="container">
        <div id="site-content" class="site-content clearfix">
            <div id="inner-content" class="inner-content-wrap">

                <?php foreach ($news as $n) {  ?>

                <article class="hentry">
                    <div class="post-media clearfix">
                        <a href="<?php echo site_url('blog/detail/'.date('Y/m/',strtotime(@$n->datepost)).@$n->slug); ?>"><img src="<?php echo base_url('uploads/news/'.@$n->gambar); ?>" alt="image"></a>
                    </div><!-- /.post-media -->

                    <div class="post-content-wrap">
                        <h2 class="post-title"> 
                            <span class="post-title-inner">
                                <a href="<?php echo site_url('blog/detail/'.date('Y/m/',strtotime(@$n->datepost)).@$n->slug); ?>"><?php echo @$n->title; ?></a>
                            </span>
                        </h2><!-- /.post-title -->

                        <div class="post-content post-excerpt">
                             <?php echo substr(strip_tags(html_entity_decode(@$n->content)), 0,500).' ...'; ?>
                        </div><!-- /.post-excerpt -->

                        <div class="post-read-more">
                            <div class="post-link">
                                <a href="<?php echo site_url('blog/detail/'.date('Y/m/',strtotime(@$n->datepost)).@$n->slug); ?>">Lebih Lanjut</a>
                            </div> 
                        </div><!-- /.post-read-more -->
                    </div><!-- /.post-content-wrap -->
                </article>

                <?php } ?>


               <!--  <div class="wprt-pagination clearfix">
                    <ul class="page-numbers">
                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="next page-numbers" href="#"><span class="fa fa-angle-right"></span></a></li>
                    </ul>
                </div> -->
            </div><!-- /.inner-content-wrap -->
        </div><!-- /#site-content -->

        <div id="sidebar">
            <div id="inner-sidebar" class="inner-content-wrap"> 

                <div class="widget widget_search">
                    <form action="<?php echo site_url('search/') ?>" method="GET" role="search" class="search-form style-1">
                        <input type="text" class="  search-query form-control" placeholder="Pencarian" name="q" />
                        <button type="submit" class="search-submit" title="Search">Pencarian</button> 
                    </form>

                  <!--   <form role="search" method="get" action="#" class="search-form style-1">
                        <input type="search" class="search-field" placeholder="Search" value="" name="s" title="Search for:">
                        <button type="submit" class="search-submit" title="Search">Pencarian</button>
                    </form> -->
                </div>

                <div class="widget widget_categories">
                    <h2 class="widget-title"><span>Kategori</span></h2>
                    <ul>
                     <?php foreach ($category as $cat) { ?>
                     <li> <a href="<?php echo site_url('kategori/'.$cat->slugkategori);?>"><?php echo $cat->category_name; ?></a> </li>
                     <?php } ?> 
                 </ul>
             </div> 

             <div id="widget_news_post-3" class="widget widget_recent_news">
                <h2 class="widget-title"><span>Berita Terbaru</span></h2>
                <ul class="recent-news clearfix">

                    <?php foreach ($news as $n) { ?>

                    <li class="clearfix">
                        <div class="thumb">
                            <img width="150" height="150" src="<?php echo base_url('uploads/news/'.@$n->gambar); ?>" alt="image">
                        </div><!-- /.thumb -->

                        <div class="texts">
                            <h3><a href="<?php echo site_url('blog/detail/'.date('Y/m/',strtotime(@$n->datepost)).@$n->slug); ?>"><?php echo @$n->title; ?></a></h3>
                            <span class="post-date"><span class="entry-date"><?php echo date('d F Y' , strtotime(@$n->datepost));?></span></span>
                        </div><!-- /.texts -->
                    </li>

                    <?php } ?>

                     
                </ul>
            </div>

             <div class="widget widget_tag_cloud">
                    <h2 class="widget-title"><span>TAGS</span></h2>
                    <div class="tagcloud">
                        <?php foreach ($news as $tags) { ?>
                        <a href="<?php echo site_url('tags/') ?>"><?php echo $tags->tagberita;?></a>
                        <?php } ?>  
                    </div>
                </div>
            <!-- </div> -->
        </div><!-- /#inner-sidebar -->
    </div><!-- /#sidebar -->
</div><!-- /#content-wrap -->
</div><!-- /#main-content -->
