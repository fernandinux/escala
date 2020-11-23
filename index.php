<?php get_header(); ?>
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light white">

  <div class="container"> 

    <a class="navbar-brand" href="#">
      <img src="https://mdbootstrap.com/img/logo/mdb-transparent.png" height="30" alt="mdb logo">
    </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
            aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Links -->
    <div class="collapse navbar-collapse" id="basicExampleNav">

      <!-- Left -->
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/jquery/" target="_blank">jQuery</a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/angular/" target="_blank">Angular</a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/react/" target="_blank">React</a>
        </li>
        <li class="nav-item">
          <a class="nav-link waves-effect" href="https://mdbootstrap.com/docs/vue/" target="_blank">Vue</a>
        </li>
      </ul>

      <!-- Right -->
      <ul class="navbar-nav nav-flex-icons">
        <li class="nav-item">
          <a href="https://www.facebook.com/mdbootstrap" class="nav-link waves-effect" target="_blank">
            <i class="fab fa-facebook-f"></i>
          </a>
        </li> 
        <li class="nav-item">
          <a href="https://twitter.com/MDBootstrap" class="nav-link waves-effect" target="_blank">
            <i class="fab fa-twitter"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="nav-link waves-effect"
             target="_blank">
            <i class="fab fa-github"></i>
          </a>
        </li>
        <li class="nav-item">
          <a href="https://mdbootstrap.com/docs/jquery/newsletter/"
             class="nav-link border border-light rounded waves-effect mr-2" target="_blank">
            <i class="fas fa-envelope mr-1"></i>Newsletter
          </a>
        </li>
      </ul>

    </div>

  </div>

</nav>
<!--/.Navbar-->
  <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center text-lg-left dark-grey-text">

      <!--Grid row-->
      <div class="row d-flex justify-content-center">

        <!--Grid column-->
        <div class="col-lg-8 text-center">

          <h3 class="font-weight-bold mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit.</h3>

          <!--Image-->
          <div class="view overlay z-depth-1-half">
            <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(2).jpg" class="img-fluid"
              alt="">
            <a href="">
              <div class="mask rgba-white-light"></div>
            </a>
          </div>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->

<?php get_footer(); ?>
