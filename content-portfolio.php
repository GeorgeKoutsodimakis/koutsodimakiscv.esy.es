<?php
$portfolio_title = get_field('portfolio_title');
$portfolio_sub = get_field('portfolio_sub');



?>
<!--Skills
 ==========================================-->
 <section id="portfolio" data-type="background" data-speed="8" >
   <div class="container">
     <div class="row" id="heading">
        <h2><?php echo $portfolio_title;?></h2>
        <h4><?php echo $portfolio_sub;?></h4>
    </div>
     <hr>
         <?php $loop = new WP_Query(
                        array(
                          'post_type' => 'portfolio',
                          'orderby' => 'post_id',
                          'order' => 'ASC'
                              ));
         ?>
         <div class="container">
           <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
             <?php
             $postid = get_the_ID();
             $portfolio_thumb = get_field('portfolio_thumb',$post_id);
             $portfolio_link = get_field('portfolio_link',$post_id);
             $portfolio_desc = get_field('portfolio_desc',$post_id);
            ?>



            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
              <div class="hovereffect">
                <img class="img-responsive" src="<?php echo $portfolio_thumb['url']?>"  alt="">
                <div class="overlay">
                      <h2><?php echo  $portfolio_link; ?> </h2>
  				            <p> <?php echo $portfolio_desc ?></p>
              </div>
            </div>
          </div>









        <?php endwhile;wp_reset_query(); ?>

            </div>

     </div><!--container-->
   </section><!--skills-->
