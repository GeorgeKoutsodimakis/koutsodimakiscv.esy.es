<?php
$name =get_field('name');
$title= get_field('title');
$welcome_msg= get_field('welcome_msg');
$background=get_field('background');

?>

<!--Welcome
==========================================-->
<section id="home" data-type="background" data-speed="2" style="background: url(<?php echo $background['url']; ?>);
background-color: #494e6b;
background-blend-mode:soft-light;
background-repeat:no-repeat;
background-position: center center;
background-size:cover;
background-attachment:fixed;">

      <div class="container clearfix">
        <div class="row ">
          <div class="col-sm-7 hero-text">
            <p class="lead">
              <h1><?php echo $name; ?></h1>
              <h3><?php echo $title; ?></h3>
              <h3>I love
  <span
     class="txt-rotate"
     data-period="2000"
     data-rotate='[ "to design.", "to code.", "to create."]'>
</span>
</h3>
               <?php echo $welcome_msg; ?>
            </p>
          </div><!--col-->
        </div><!--row-->

      </div><!--container-->

</section><!--hero-->
