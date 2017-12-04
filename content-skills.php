<?php
$title = get_field('skill_section_title');
$subtitle = get_field('skill_section_subtitle');?>



<!--Skills
 ==========================================-->
 <section id="skills">
   <div class="container">
     <div class="row" id="heading">
        <h2><?php echo $title;?></h2>
        <h4><?php echo $subtitle;?></h4>
    </div>
     <hr>
         <?php $loop = new WP_Query(
                        array(
                          'post_type' => 'skills',
                          'orderby' => 'post_id',
                          'order' => 'ASC'
                              ));
         ?>


         <div class="resource-row clearfix">
           <?php while ( $loop->have_posts() ) : $loop->the_post();
             $title = get_the_title($skill->ID) ;
             $queried_post = get_post($skill->ID);
             $content = $queried_post->post_content ;?>

               <div class="col-sm-4">
                 <div class="well">
                    <h4><?php echo $title; ?></h4>
                    <div class="progress">
                      <div class="progress-bar progress-bar-custom"
                      style="width:<?php  echo $content; ?>">
                       <?php  the_content(); ?>
</div>
</div>
                </div><!--well-->
          </div><!--col-->



                   <?php endwhile;wp_reset_query(); ?>
        </div><!--resource-row-->


     </div><!--container-->
   </section><!--skills-->
