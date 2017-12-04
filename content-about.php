<?php
//Advanced Custom Fields
$about_me = get_field('about_me');
$about_img = get_field('about_img');
$about_title = get_field('about_title');
$about_sub = get_field('about_sub');

 ?>

 <!--About
 ==========================================-->
 <section id="about" >
   <div class="container">

     <div class="row" id="heading">
        <h2><?php echo $about_title?></h2>
        <h4><?php echo $about_sub; ?></h4>
     </div><!--row-->

     <div class="row">
       <div class="col-sm-3">
          <!-- if user uploads an image -->
         <?php
           if(!empty($about_img)) : ?>
             <img class="img-circle" src="<?php echo $about_img['url']; ?>" alt="<?php echo $about_img['alt']; ?>" />
         <?php endif;  ?>

       </div><!--col-->
       <div class="col-sm-8">

       <hr>
        <p class="lead">
        <?php  echo $about_me; ?>
        </p>

      </div><!--col-->
     </div><!--row-->
   </div><!--container-->
 </section><!--about-->
