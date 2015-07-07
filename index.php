<?php include "header.php"; ?>
<link rel="stylesheet" href="carousel.css">


   <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <div class="carousel-inner" role="listbox">
        <div class="item active" id="slide-1">
          <iframe id="splash" class="hidden-xs" src="splash.html"></iframe>
          <div class="container visible-xs">
            <div class="carousel-caption">
              <h1 class="main">University of Michigan Running Club</h1>
            </div>
          </div>
        </div>
        <div class="item" id="slide-2">
          <div class="container">
            <div class="carousel-caption">
              <h1>Who are we?</h1>
              <p>We are Michigan's premier running club.</p>
              <p><a class="btn btn-lg btn-primary" id="scroll-more-info" role="button">Learn more</a></p>
            </div>
          </div>
        </div>
        <div class="item" id="slide-3">
          <div class="container">
            <div class="carousel-caption">
              <h1>What do we do?</h1>
              <p>We run. We throw. We jump.</p>
              <p><a class="btn btn-lg btn-primary top" href="xc.php" role="button">View XC</a> <a class="btn btn-lg btn-primary" href="tf.php" role="button">View T&amp;F</a></p>
            </div>
          </div>
        </div>
        <div class="item" id="slide-4">
          <div class="container">
            <div class="carousel-caption">
              <h1>How do I join?</h1>
              <p>Just show up at any one of our practices and ask!</p>
              <p><a class="btn btn-lg btn-primary top" href="prospective.php" role="button">Learn More</a> <a class="btn btn-lg btn-primary" href="contact.php" role="button">Contact Us</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><!-- /.carousel -->
        <!--<iframe class="hidden-xs" src="splash.html"></iframe>-->


   <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
    <div class="hidden-sm hidden-md hidden-xs stripes" style="height:420px;"></div>
    <div class="hidden-lg hidden-xs stripes" style="height:880px;"></div>
    <div class="hidden-sm hidden-md hidden-lg stripes" style="height:620px;"></div>
    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <a href="https://www.facebook.com/MichiganRunningClub">
          <div class="col-lg-2 col-xs-6">
            <img class="img-circle" src="icons/facebook.png" alt="Facebook" width="140" height="140">
            <span class="hidden-xs">
              <h2>Facebook</h2>
              <p>Like us!</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a href="https://twitter.com/mrun">
          <div class="col-lg-2 col-xs-6">
            <img class="img-circle" src="icons/twitter.png" alt="Twitter" width="140" height="140">
            <span class="hidden-xs">
              <h2>Twitter</h2>
              <p>#MRun</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="https://docs.google.com/spreadsheets/d/1QD2G4O96Aer_HkpGbJFw7GlzDlsqz-XvsVSf0P5fWQE/edit?usp=sharing">
          <div class="col-lg-2 col-xs-6">
            <img class="img-circle" src="icons/records.png" alt="Records" width="140" height="140">
            <span class="hidden-xs">
              <h2>Records</h2>
              <p>An archive of MRun's best performances</p>
            <span class="hidden-xs">
          </div><!-- /.col-lg-4 -->
        </a>
        <?php 
          $re = "/href=\"(.+)\"(?=.+<\!--MOST RECENT-->)/i";
          $str = file_get_contents("results.html");
          preg_match($re, $str, $matches);
          $href = $matches[1];
          echo "<a target='_blank' href='" . $href . "'>\n"; 
        ?>
          <div class="col-lg-2 col-xs-6">
            <img class="img-circle" src="icons/results.png" alt="Results" width="140" height="140">
            <span class="hidden-xs">
              <h2>Results</h2>
              <p>Link to our most recent event</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a href="news.php?date=0">
          <div class="col-lg-2 col-xs-6">
            <img class="img-circle" src="icons/news.png" alt="News" width="140" height="140">
            <span class="hidden-xs">
              <h2>News</h2>
              <p>Our blog and newsletter updates</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="https://leadersandbest.umich.edu/find/#/give/basket/fund/312096">
          <div class="col-lg-2 col-xs-6">
            <img class="img-circle" src="icons/donate.png" alt="Donate" width="140" height="140">
            <span class="hidden-xs">
              <h2>Donate</h2>
              <p>We appreciate your generosity!</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
      </div><!-- /.row -->
    </div>


<!-- START THE FEATURETTES -->
  <div class="container" id="more-info">
      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-8 col-md-offset-2">
          <h2 class="featurette-heading">So Who Are We?</h2>
          <p class="lead">aside from the leaders and best...</p>
          <p>...MRun is the running club at the University of Michigan. One of the founding clubs in the club running scene, MRun has since been a dominant force. Since its inception in 2004, the club has grown to a membership of over 200 dues-paying undergraduate and graduate students. This makes MRun not only the biggest, most popular, and fastest growing club on campus, but also the largest collegiate running club in the nation. Racing in varsity and club Cross Country and Track and Field meets across the Midwest, MRun is very competitive within collegiate running. The MRun men were national champions at the 2010 NIRCA Cross Country Championships meet, while the women completed the same feat in 2008. In 2014 MRun celebrated two victories as the men's team won silver, and the women's team won gold. The MRun men and women have had top-five finishes within the NCTFA National Track and Field meet. Members of the club win races at the 5k, 10k, and marathon distances. MRun also caters to track and field athletes and has year-round training for sprinters and field competitors. Because MRun competes in indoor and outdoor track, distance, sprint, and field event track athletes are able to travel around the country and compete in a long winter and spring season against club and varsity athletes.</p>
          <p>Although MRun is very competitive, it accomodates all types of runners, and thus all ability levels are welcome. There are no cuts, try-outs, or time trials to join the club. Whether you wish to compete against colleges nationwide, run in actual varsity races, or just show up a few times a week and run with friends, MRun is the right club for you. MRun provides more than just an outlet for running; it is also a large charitable organization, deeply involved within the community. This year alone the club as a whole raised over $11,000 for various local and national charities, including: Special Olympics, The American Cancer Society, and myTeam Triumph. MRun also provides a very social atmosphere which is inviting to newcomers.</p>
        </div>
      </div>
    </div>


<?php include "footer.php" ?>