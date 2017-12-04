<?php
$title = get_field('exp_title');
$subtitle = get_field('exp_sub');


?>
<!--Skills
 ==========================================-->
 <section id="experience">
   <div class="container">
     <div class="row" id="heading">
        <h2><?php echo $title;?></h2>
        <h4><?php echo $subtitle;?></h4>
    </div>
     <hr>
         <?php $loop = new WP_Query(
                        array(
                          'post_type' => 'experience',
                          'orderby' => 'post_id',
                          'order' => 'ASC'
                              ));
         ?>

         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <?php
           $postid = get_the_ID();
           $exp_from_date= get_field('exp_from_date',$postid);
           $exp_to_date= get_field('exp_to_date',$postid);
           $work_place= get_field('work_place',$postid);
           $work_desc= get_field('work_desc',$postid);
           $employer= get_field('employer',$postid);

           ?>

         <div class="row workDetails">
           <div class="col-sm-2 circles">
                <div class="workYear">
                  <span class="dates"><?php echo $exp_from_date; ?></span>
                  <br>
                  <span class="dates"><?php echo $exp_to_date; ?></span>
                </div><!--work year-->

           </div><!--col-->

           <div class="col-sm-10 " >

             <div class="arrowpart">
             </div><!--arrow part-->

             <div class="well desc">
               <h4><?php the_title();     ?></h4>
               <h4><small><?php echo $employer;  ?></small></h4>
               <p><?php echo $work_desc; ?></p>
               <p><?php echo $work_place;?></p>

             </div>


           </div><!--col-->

        </div><!--row workDetails-->
      <?php endwhile;wp_reset_query(); ?>


     </div><!--container-->
   </section><!--skills-->
