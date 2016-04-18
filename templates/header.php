<header class="banner">
  <nav class="navbar">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/brand.png" alt="<?php bloginfo('name'); ?>" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Event</a>
          <ul class="dropdown-menu">
            <li><a href="#">Event Details</a></li>
            <li><a href="#">Ports</a></li>
            <li><a href="#">Onboard Activities</a></li>
            <li><a href="#">Videos</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Line-Up</a>
          <ul class="dropdown-menu">
            <li><a href="#">dcTalk</a></li>
            <li><a href="#">TobyMac and Diverse City</a></li>
            <li><a href="#">Newsboys</a></li>
            <li><a href="#">More to come</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pricing</a>
          <ul class="dropdown-menu">
            <li><a href="#">Pricing and Availability</a></li>
            <li><a href="#">Payment Options</a></li>
            <li><a href="#">What's Included</a></li>
            <li><a href="#">How to Book</a></li>
            <li><a href="#">Travel Insurance</a></li>
            <li><a href="#">Roommate Finder</a></li>
            <li><a href="#">Book Now</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Ship</a>
          <ul class="dropdown-menu">
            <li><a href="#">Staterooms</a></li>
            <li><a href="#">Dining</a></li>
            <li><a href="#">Concert Venues</a></li>
            <li><a href="#">Public Areas</a></li>
            <li><a href="#">Deck Plans</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FAQ</a>
          <ul class="dropdown-menu">
            <li><a href="#">Top Questions</a></li>
            <li><a href="#">Before You Book</a></li>
            <li><a href="#">Pre-Cruise Details</a></li>
            <li><a href="#">Once On-Board</a></li>
            <li><a href="#">About Premier</a></li>
          </ul>
        </li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-date">January 14-18th 2017</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>
