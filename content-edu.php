<?php
//Advanced Custom Fields
$edu_title = get_field('edu_title');
$edu_sub = get_field('edu_sub');



 ?>

 <!--About
 ==========================================-->
 <section id="education">
   <div class="container">
     <div class="row" id="heading">
        <h2><?php echo $edu_title;?></h2>
        <h4><?php echo $edu_sub;?></h4>
    </div>
     <hr>
         <?php $loop = new WP_Query(
                        array(
                          'post_type' => 'education',
                          'orderby' => 'post_id',
                          'order' => 'ASC'
                              ));
         ?>

         <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
           <?php
           $postid = get_the_ID();
           $edu_from_date= get_field('edu_from_date',$postid);
           $edu_to_date_= get_field('edu_to_date_',$postid);
           $institute= get_field('institute',$postid);
           $insitute_place= get_field('insitute_place',$postid);


           ?>

         <div class="row workDetails">
           <div class="col-sm-2 circles">
                <div class="workYear">
                  <span class="dates"><?php echo $edu_from_date; ?></span>
                  <br>
                  <span class="dates"><?php echo $edu_to_date_; ?></span>
                </div><!--work year-->

           </div><!--col-->

           <div class="col-sm-10 " >

             <div class="arrowpart">
             </div><!--arrow part-->

             <div class="well desc">
               <h4><?php the_title();     ?></h4>
               <h4><small><?php echo $institute;  ?></small></h4>
               <p><?php echo $insitute_place; ?></p>

             </div>


           </div><!--col-->

        </div><!--row workDetails-->
      <?php endwhile;wp_reset_query(); ?>


     </div><!--container-->
   </section><!--skills-->
