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
        <li><a href="#">Home</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">The Event<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">The Experience</a></li>
            <li><a href="#">Itinerary</a></li>
            <li><a href="#">The Ship</a></li>
            <li><a href="#">Singles Ministry</a></li>
            <li><a href="#">Ports of Call</a></li>
            <li><a href="#">Teen/Children</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entertainment<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Steven Curtis Chapman</a></li>
            <li><a href="#">Crowder</a></li>
            <li><a href="#">For King &amp; Country</a></li>
            <li><a href="#">Newsboys</a></li>
            <li><a href="#">Jeremy Camp</a></li>
            <li><a href="#">Rend Collective</a></li>
            <li><a href="#">Big Daddy Weave</a></li>
            <li><a href="#">Building 429</a></li>
            <li><a href="#">Josh Wilson</a></li>
            <li><a href="#">Francesca Battistelli</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Before You Board<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">FAQ<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">The Experience</a></li>
            <li><a href="#">Itinerary</a></li>
            <li><a href="#">The Ship</a></li>
            <li><a href="#">Singles Ministry</a></li>
            <li><a href="#">Ports of Call</a></li>
            <li><a href="#">Teen/Children</a></li>
          </ul>
        </li>
        <li><a href="#">Roomate Finder</a></li>
        <li><a href="#">Pricing</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="nav-date">January 14-18th 2017</li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

</header>
