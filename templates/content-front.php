<div class="front-image">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/NauticalDevice.png" alt="Nautical Device" class="img-responsive" />
  <video autoplay loop>
    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video.mp4" type="video/mp4">
    <source src="<?php echo get_template_directory_uri(); ?>/assets/images/video.webm" type="video/webm">
  </video>
</div>
<div class="row">
  <div class="col-sm-6 col-sm-offset-3 front-content">
    <?php the_content(); ?>
    <?php if (new DateTime() < new DateTime("2016-05-16 07:30:00")) : ?>
      <h3 class="text-center" style="margin-bottom: 25px">Booking Begins Monday @ 8:30am EST</h3>
      <p class="text-center"><a class="book-btn text-uppercase">Book Now</a></p>
    <?php else : ?>
      <p class="text-center"><a href="https://reservations.premier-experience.com/Booking/Reservation/Start?tripID=2988" class="book-btn text-uppercase">Book Now</a></p>
    <?php endif ?>
  </div>
</div>
