<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/swiper.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<!-- PRELOADER -->
<div id="preloader">
  <div class="loader">
    <img src="img/logo.svg" alt="logo">
  </div>
</div>
<div class="bg-title">
  <!-- HOME-CAROUSEL PAGE -->
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="parallax-bg" style="background-image:url(img/Justice.jpg)" data-swiper-parallax="-23%"></div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">Christian Ramirez</div>
        <div class="subtitle" data-swiper-parallax="-200">Entry-Level Full Stack Developer</div>
        <div class="text" data-swiper-parallax="-100">
          <p> Hello, I'm Chris and I am a Full Stack Developer. On this page, you will find more than enough to figure out who I am, my motives behind Full Stack and why I am who I am. Enjoy! </p>
          <a class="button" href="#portfolio">View portfolio</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300" data-swiper-parallax-opacity="0">Creative</div>
        <div class="subtitle" data-swiper-parallax="-200">Consectetur adipisicing elit. Quos veniam recusandae incidunt maiores.</div>
        <div class="text" data-swiper-parallax="-100">
          <p>Quos veniam recusandae incidunt maiores fugit vel praesentium consectetur iusto.
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.Sed lectus est, sollicitudin at consectetur non, fringilla at dolor. In hac habitasse platea dictumst.Proin et euismod ipsum. In volutpat tempus velit sed laoreet.</p>
              <a class="button" href="#about">About</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="title" data-swiper-parallax="-300">Design</div>
        <div class="subtitle" data-swiper-parallax="-200">Consectetur adipisicing elit. Quos veniam recusandae incidunt maiores.</div>
        <div class="text" data-swiper-parallax="-100">
          <p>Sed lectus est, sollicitudin at consectetur non, fringilla at dolor. In hac habitasse platea dictumst.Proin et euismod ipsum. In volutpat tempus velit sed laoreet.In hac habitasse platea dictumst.Proin et euismod ipsum. In volutpat tempus velit sed laoreet.</p>
          <a class="button" href="#contact">Contact</a>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"><i class="ion-ios-arrow-thin-right"></i></div>
    <div class="swiper-button-prev"><i class="ion-ios-arrow-thin-left"></i></div>
  </div>
    <!-- Navigation -->
    <div class="col-lg-2 pd-left">
      <div class="mobile-nav">
        <i class="fa ion-navicon" aria-hidden="true"></i>
        <span>Menu</span>
      </div>
      <nav class="nav-menu">
        <div class="header-menu">
          <a class="menu-logo" href=""><img src="img/logo.svg" alt="logo"></a>
        </div>
        <ul class="menu-text clk">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <li><a href="#resume">Resume</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <ul class="social-links">
          <li><a href=""><i class="fa ion-social-twitter" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
          <li><a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
        </ul>
      </nav>
    </div><!-- /.col-lg-2 -->

<!-- Copyright -->
  <div class="copyright">
    <span>© Richard Roe 2018 All rights reserved.</span>
  </div>
 <!-- ABOUT-PAGE -->
  <div id="about" class="panel">
    <div class="about-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-2">
            <span class="about title-page">About</span>
            <div class="about-me">
              <img class="mobile-profile-img img-fluid rounded-circle" src="img/about/mobile-profile.jpg" alt="">
              <h4></h4>
              <p> I am a avid fan of Video Games, Anime, Films and your basic American Sports. Growing up I was parented fairly strict but my folks always let me have my space. I was always a isolated kid who enjoied his time to himself. Till this day, I thrive off being autonomous. As my life goes on, I have become and continue to be a better person and employee thanks to working with other people.  </p>
            </div><!-- /.about-me -->

            <div class="personal-info">
              <h4 class="title-section">Personal Information</h4>
              <ul>
                <li>
                  <p> <span> Name</span> - Christian Ramirez </p>
                </li>
                <li>
                  <p> <span> Brithday</span> - 25 October 1996 </p>
                </li>
                <li>
                  <p> <span> Nationality</span> - American </p>
                </li>
                <li>
                  <p> <span> Born </span> - McAllen, Texas </p>
                </li>
                <li>
                  <p> <span> Language</span> - English </p>
                </li>
              </ul>
            </div><!--  /.personal-info -->
            <!-- Skill-bar-section -->
            <div class='skill'>
              <h4 class="title-section">My Skills</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit illum dolores fugit ut ratione quidem rem eveniet id, sapiente facilis maxime suscipit nostrum. Alias, voluptatum ipsa unde nemo magni atque!</p>
              <!-- progress bar -->
              <div id="skills">
                <div class="skillbar-title"><span>Photography</span></div>
                <div class="skillbar clearfix " data-percent="55%">
                  <div class="skillbar-bar"></div>
                  <div class="skill-bar-percent">55%</div>
                </div>

                <div class="skillbar-title"><span>Wordpress</span></div>
                <div class="skillbar clearfix " data-percent="85%">
                  <div class="skillbar-bar"></div>
                  <div class="skill-bar-percent">85%</div>
                </div>

                <div class="skillbar-title"><span>Illustrator</span></div>
                <div class="skillbar clearfix" data-percent="75%">
                  <div class="skillbar-bar"></div>
                  <div class="skill-bar-percent">75%</div>
                </div>

                <div class="skillbar-title"><span>CSS</span></div>
                <div class="skillbar clearfix" data-percent="95%">
                  <div class="skillbar-bar"></div>
                  <div class="skill-bar-percent">95%</div>
                </div>

                <div class="skillbar-title"><span>PHP</span></div>
                <div class="skillbar clearfix" data-percent="55%">
                  <div class="skillbar-bar"></div>
                  <div class="skill-bar-percent">55%</div>
                </div>

            </div>   <!-- /#skill -->
          </div> <!-- /.skill  -->

          <!-- services-section -->
          <div class="services">
            <h4 class="title-section">My Services</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit illum dolores fugit ut ratione quidem rem eveniet id, sapiente facilis maxime suscipit nostrum.</p>
              <!-- card-1 -->
            <div class="card-deck align-middle">
              <div class="card">
                <i class="fa ion-earth" aria-hidden="true"></i>
                <div class="card-body">
                  <h5 class="card-title">Web Development</h5>
                  <p class="card-text">Nunc porta dui a neque hendrerit imperdiet. Cras suscipit arcu risus, nec ultrices arcu fringilla at. Praesent facilisis, erat id placerat finibus, ex leo vehicula ipsum, sed dictum dui.</p>
                </div>
              </div><!-- /.card -->
              <!-- card-2 -->
              <div class="card">
                <i class="fa ion-images" aria-hidden="true"></i>
                <div class="card-body">
                  <h5 class="card-title">Graphic Design</h5>
                  <p class="card-text">Duis vehicula nunc efficitur nibh pellentesque, ut dapibus purus posuere. Cras a placerat arcu. Nunc pretium tincidunt nisi, eget bibendum eros dignissim quis.</p>
                </div>
              </div><!-- /.card -->
              <!-- card-3 -->
              <div class="card">
                <i class="fa ion-bag" aria-hidden="true"></i>
                <div class="card-body">
                  <h5 class="card-title">Branding</h5>
                  <p class="card-text">Quisque sodales augue ac eros commodo pellentesque. Sed dapibus condimentum elementum. Sed accumsan fermentum ex vel blandit.</p>
                </div>
              </div><!-- /.card -->
            </div><!-- /.card-deck  -->
          </div><!-- /.services -->
          <!-- clients-section -->
          <div class="clients">
            <h4 class="title-section">Clients</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit illum dolores fugit ut ratione quidem rem eveniet id,</p>
            <!-- carousel-section -->
            <div class="owl-carousel clients-slide">
              <div><img src="img/clients/company.png" alt=""></div>
              <div><img src="img/clients/company-2.png" alt=""></div>
              <div><img src="img/clients/company-3.png" alt=""></div>
              <div><img src="img/clients/company-4.png" alt=""></div>
            </div>
          </div><!-- /.clients -->
          </div><!-- /.col-md-10 -->
        </div><!-- /.row  -->
      </div><!-- /.container-fluid -->
    </div><!-- /.about-content -->
  </div><!-- /#about -->
<!-- PROFILE-IMAGE -->
  <div class="panel-2">
    <div class="profile-img"></div>
  </div>

<!-- PORTFOLIO-PAGE -->
  <div id="portfolio" class="panel">
    <div class="portfolio-content">
      <div class="container-fluid">
        <span class="portfolio title-page">Portfolio</span>
        <p>Quisque volutpat eleifend ex, id tincidunt sapien molestie ac. Duis sed enim eget augue semper efficitur. Suspendisse vulputate pellentesque semper.</p>
        <!-- menu-portfolio -->
        <ul id="filter">
          <li>
            <a class="active-filter" href="#" data-group="all">All</a>
          </li>
          <li>
            <a href="#" data-group="ui">UI / UX Design</a>
          </li>
          <li>
            <a href="#" data-group="photography">Photography</a>
          </li>
          <li>
            <a href="#" data-group="graphic-design">Graphic Design</a>
          </li>
          <li>
            <a href="#" data-group="web-design">Web Design</a>
          </li>
        </ul><!-- /.filter -->
          <!-- Grid portfolio -->
          <div id="grid" class="row no-gutters">
              <div class="item col-lg-4"  data-groups='["ui"]'>
                <a href="../Static_image/img/portfolio/big-img/project-big-1.jpg" class="with-caption image-link" title="Project Title">
                  <figure class="effect-sadie">
                    <img class="responsive-img" src="img/portfolio/project-1.jpg" alt="">
                    <figcaption>
                      <i class="fa ion-ios-plus-outline" aria-hidden="true"></i>
                      <p>Praesent convallis, turpis et ultrices tincidunt, orci nisi mollis dolor,<br>non congue erat elit ut purus.</p>
                    </figcaption>
                  </figure>
                </a>
              </div>

              <div class="item col-lg-4" data-groups='["photography"]'>
                <a href="../Static_image/img/portfolio/big-img/project-big-2.jpg" class="with-caption image-link" title="Project Title">
                  <figure class="effect-sadie">
                    <img class="responsive-img" src="img/portfolio/project-2.jpg" alt="">
                    <figcaption>
                      <i class="fa ion-ios-plus-outline" aria-hidden="true"></i>
                      <p>Praesent convallis, turpis et ultrices tincidunt, orci nisi mollis dolor,<br> non congue erat elit ut purus.</p>
                    </figcaption>
                  </figure>
                </a>
              </div>

              <div class="item col-lg-4"  data-groups='["photography"]'>
                <a href="../Static_image/img/portfolio/big-img/project-big-3.jpg" class="with-caption image-link" title="Project Title">
                  <figure class="effect-sadie">
                   <img class="responsive-img" src="img/portfolio/project-3.jpg" alt="">
                    <figcaption>
                      <i class="fa ion-ios-plus-outline" aria-hidden="true"></i>
                      <p>Praesent convallis, turpis et ultrices tincidunt, orci nisi mollis dolor,<br>non congue erat elit ut purus.</p>
                    </figcaption>
                  </figure>
                </a>
              </div>

              <div class="item col-lg-4"   data-groups='["graphic-design"]'>
                <a href="../Static_image/img/portfolio/big-img/project-big-4.jpg" class="with-caption image-link" title="Project Title">
                  <figure class="effect-sadie">
                    <img class="responsive-img" src="img/portfolio/project-4.jpg" alt="">
                    <figcaption>
                      <i class="fa ion-ios-plus-outline" aria-hidden="true"></i>
                      <p>Praesent convallis, turpis et ultrices tincidunt, orci nisi mollis dolor,<br>non congue erat elit ut purus.</p>
                    </figcaption>
                  </figure>
                </a>
              </div>

              <div class="item col-lg-4"   data-groups='["graphic-design"]'>
                <a href="../Static_image/img/portfolio/big-img/project-big-5.jpg" class="with-caption image-link" title="Project Title">
                  <figure class="effect-sadie">
                    <img class="responsive-img" src="img/portfolio/project-5.jpg" alt="">
                    <figcaption>
                      <i class="fa ion-ios-plus-outline" aria-hidden="true"></i>
                      <p>Praesent convallis, turpis et ultrices tincidunt, orci nisi mollis dolor,<br>non congue erat elit ut purus.</p>
                    </figcaption>
                  </figure>
                </a>
              </div>

              <div class="item col-lg-4"   data-groups='["web-design"]'>
                <a href="../Static_image/img/portfolio/big-img/project-big-6.jpg" class="with-caption image-link" title="Project Title">
                  <figure class="effect-sadie">
                    <img class="responsive-img" src="img/portfolio/project-6.jpg" alt="">
                    <figcaption>
                      <i class="fa ion-ios-plus-outline" aria-hidden="true"></i>
                      <p>Praesent convallis, turpis et ultrices tincidunt,orci nisi mollis dolor,<br>non congue erat elit ut purus.</p>
                    </figcaption>
                  </figure>
                </a>
              </div>
        </div><!-- /#grid -->
      </div> <!-- / .container-fluid -->
    </div><!-- /.portfolio-content -->
  </div><!-- /#portfolio -->

        <!-- RESUME-PAGE -->
  <div id="resume" class="panel">
    <div class="resume-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <span class="resume title-page">Resume</span>
          </div>
        </div>

        <div class="education">
          <div class="row">
            <div class="col-lg-4 col-md-2">
              <h4>Education</h4>
            </div>
            <div class="col-lg-8 col-md-10">

              <div class="resume-inner">
                 <div class="resume-row">
                  <span class="resume-date">2003-2007</span>
                  <h4 class="resume-study">College of Computing Technology</h4>
                  <p class="resume-text">Nunc euismod odio nec turpis aliquet dapibus. Nulla maximus diam leo, a feugiat neque laoreet ut. Aenean bibendum tellus id eros hendrerit, a rhoncus augue eleifend. </p>
                </div>
                <div class="resume-row">
                  <span class="resume-date">2007-2008</span>
                  <h4 class="resume-study">Computer Training School</h4>
                  <p class="resume-text">Curabitur tempus ultricies nulla id consequat. Proin risus eros, pellentesque ut condimentum at, egestas ut augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="resume-row">
                  <span class="resume-date">2008-2013</span>
                  <h4 class="resume-study">Institute of Technology</h4>
                  <p class="resume-text">Praesent ac massa orci. Vestibulum semper, arcu quis pharetra feugiat, urna mauris rutrum metus, at posuere mi sem ut mauris. In sit amet nulla at urna vehicula.</p>
                </div>

              </div><!-- /.resume-inner -->
            </div><!-- /.col-lg-8 .col-md-10 -->
          </div><!-- /.row -->
      </div><!-- /.education -->

 <!-- experience -->
      <div class="education">
        <div class="row">
          <div class="col-lg-4 col-md-2">
            <h4>Experience</h4>
          </div>
          <div class="col-lg-8 col-md-10">

            <div class="resume-inner">
              <div class="resume-row">
                <span class="resume-date">2013-2014</span>
                <h4 class="resume-study">Junior Web Designer</h4>
                <p class="resume-text">Nunc euismod odio nec turpis aliquet dapibus. Nulla maximus diam leo, a feugiat neque laoreet ut. Aenean bibendum tellus id eros hendrerit, a rhoncus augue eleifend. </p>
              </div>
              <div class="resume-row">
                <span class="resume-date">2014-2015</span>
                <h4 class="resume-study">User Experience (UX) Designer</h4>
                <p class="resume-text">Curabitur tempus ultricies nulla id consequat. Proin risus eros, pellentesque ut condimentum at, egestas ut augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
              <div class="resume-row">
                <span class="resume-date">2015-2017</span>
                <h4 class="resume-study">Web Developer</h4>
                <p class="resume-text">Praesent ac massa orci. Vestibulum semper, arcu quis pharetra feugiat, urna mauris rutrum metus, at posuere mi sem ut mauris. In sit amet nulla at urna vehicula.</p>
              </div>
            </div><!-- /.resume-inner -->

          </div><!-- /.col-lg-8 col-md-10 -->
        </div><!-- /.row -->
      </div><!-- /.education (experience)-->
      </div><!-- /.container-fluid -->
    </div><!-- /.resume-content -->
  </div><!-- /#resume  -->


        <!-- CONTACT-PAGE -->
  <div id="contact" class="panel">
    <div class="contact-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-10 offset-md-2">
            <span class="contact title-page">Contact</span>
              <div class="contact-text">
                <p>It is a paradisematic country, in which roasted parts of sentences fly into your mouth.Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life.</p>
              </div><!-- /.contact-text -->

              <div class="personal-info">
                <h4 class="title-section">Get In Touch</h4>
                 <ul>
                    <li>
                      <p> <span> Address</span> - Street, City, Country</p>
                    </li>
                    <li>
                      <p> <span> Phone</span> - (123) 456 789</p>
                    </li>
                    <li>
                      <p> <span> E-mail</span> - your-email@mail.com </p>
                    </li>
                </ul>
              </div><!-- /.personal-info -->

              <div class="row"><!-- block form -->
                  <div class="col-md-12 col-lg-12">
                    <div class="well">
                      <form id="contactForm" data-toggle="validator" class="shake">

                      <div class="form-group"><!-- ENTER MANE -->
                        <input type="text" class="form-control" id="name" placeholder="Enter name" required data-error="Please enter your name">
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group"><!-- ENTER EMAIL -->
                        <input type="email" class="form-control" id="email" placeholder="Enter email" required data-error="Please enter your email address">
                        <div class="help-block with-errors"></div>
                      </div>

                      <div class="form-group"><!-- ENTER MESSAGE -->
                        <textarea id="message" class="form-control" rows="5" placeholder="Enter your message" required data-error="Please enter your message"></textarea>
                        <div class="help-block with-errors"></div>
                      </div>

                        <!-- button form submit -->
                        <div class="submit">
                         <div class="content-button">
                           <button id="form-submit" class="button">SUBMIT</button>
                         </div>
                         <div id="msgSubmit" class="h5 h5 text-danger hidden"></div>
                       </div>
                     </form>
                      <!-- GOOGLE-MAP-2 (For Mobile Devices)-->
                     <div class="mobile-panel-cart">
                      <div id="map_canvas2" class="karta"></div>
                    </div>

                    <div class="copyright-contact">
                        <span>© Richard Roe 2018 All rights reserved.</span>
                     </div>
                   </div>
                 </div>
              </div><!--  /.row form -->

          </div><!-- /.col-md-10 -->
        </div><!-- /.row  -->
      </div><!-- /.container-fluid -->
    </div><!-- /.contact-content -->
  </div><!-- /#contact -->

<!-- GOOGLE_MAP-1 -->
  <div class="panel-cart">
    <div id="map_canvas" class="karta"></div>
  </div>

</div> <!-- /.bg-title  -->

  <script src="js/googlemap.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCDa77CMiGw5QRvFTl8oeV1qBet4XQe6fs&callback=initMap"></script>
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src='js/jquery.shuffle.min.js'></script>
  <script src='js/bootstrap.bundle.min.js'></script>
  <script src='js/owl.carousel.min.js'></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/validator.min.js"></script>
  <script src="js/form-scripts.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
