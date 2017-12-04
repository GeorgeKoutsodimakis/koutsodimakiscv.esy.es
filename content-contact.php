<?php
$contact_tel = get_field('contact_tel');
$contact_address	 = get_field('contact_address');
$city_country		 = get_field('city_country');
$contact_form = get_field('contact_form');
$email	 = get_field('email');
$github   = get_field('github');
$behance=get_field('behance');
$linkedin =get_field('linkedin')
?>


<!-- CONTACT
================================ -->
<section id="contact">


<div class="container" >
  <div class="row" id="heading">
     <h2>Contact</h2>
     <h4>Shoot a message!</h4>
 </div>
 <hr>
<div class="row contact-row"  >
  <div class="col-sm-8" >

    <?php while (have_posts() ): the_post(); ?>

      <?php echo $contact_form ?>

    <?php endwhile; //endof loop ?>
  </div><!--col-->

  <div class="col-sm-4">
      <ul class="contact-info">
        <li><h4>Details</h4></li>
        <li><i class="fa fa-mobile" ></i><?php echo $contact_tel; ?> </li>
        <li><i class="fa fa-map-marker" ></i><?php echo $contact_address; ?></li>
        <li><i class="fa fa-globe" ></i><?php echo $city_country; ?></li>
        <li><i class="fa fa-envelope" ></i><?php echo $email; ?>
        <li></li>
      </ul>
        <ul class="social-network">
            <li><h4>Social</h4></li>
               <li><a href="<?php echo $github  ; ?>" title="Github"><i class="fa fa-github fa-2x"></i></a></li>
               <li><a href="<?php echo $behance; ?>" title="Behance"><i class="fa fa-behance fa-2x"></i></a></li>
                <li><a href="<?php echo $linkedin; ?>" title="Linkedin"><i class="fa fa-linkedin fa-2x"></i></a></li>
              </ul>
    </div><!--col-->



</div><!--row--><!--content-->

</div><!--container-->

</section>
			