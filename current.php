<?php include "header.php" ?>
<link rel="stylesheet" href="carousel.css">

<div id="myCarousel" class="carousel slide race" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="current">
      <div class="container">
        <div class="carousel-caption">
          <h1>CURRENT MEMBERS</h1>
          <p>welcome back!</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background:#FFF;width:100%;height:150px;position:absolute;"></div>

<?php 
  $re = "/\#(current) (\d+)(.*?)#/s";
  $str = file_get_contents("events.txt");
  preg_match($re, $str, $matches);
?>
<div class="container" style="margin-bottom:100px;">
  <div class="row">
    <div class="newsletters col-md-4">
            <ul class="list-group">
              <a target="_blank" href="https://www.google.com/calendar/embed?src=mrunclub%40gmail.com&ctz=America/New_York">
                <li class="list-group-item title">
                  SOCIAL SCHEDULE <?php echo $matches[2]; ?>
                </li>
              </a>
              <?php 
                $events = $matches[3];
                $events = str_replace("/", "<li class='list-group-item'>" , $events);
                $events = str_replace("\\", "</li>" , $events);
                echo $events; 
              ?>
            </ul>
          </div>
          <div class="col-md-7" style="margin-top:20px;">
      <p>If you haven't already filled out your Maize Page waiver forms, then you cannot attend meets. So please do so at the link below.</p>
      <p>All checks for MRun should be made out to "University of Michigan" with "Running club" in the memo line. Talk to your swag chair to order swag, and talk to anyone at office hours to sign up and pay for meets.</p>
      <p>If you are already in MRun then you can join our Facebook group: MRun Fun! You should also check out our calendar of upcomming events, view race photos on NIRCA, and see potential routes on the MapMyRun app.</p>
    </div>
  </div>
</div>

    <div class="hidden-xs stripes" style="height:420px;"></div>
    <div class="hidden-sm hidden-md hidden-lg stripes" style="height:100px;"></div>
    <div class="container marketing" style="margin-top:-80px;">
      <!-- Three columns of text below the carousel -->
      <div class="row icons hidden-lg hidden-md hidden-sm">
        <a target="_blank" href="https://www.facebook.com/groups/571783862880286/">
          <div class="col-xs-3">
            <img class="img-circle" src="icons/facebook.png" alt="Facebook" width="50" height="50">
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="https://maizepages.umich.edu/organization/mrun">
          <div class="col-xs-3">
            <img class="img-circle" src="icons/maize.png" alt="Records" width="50" height="50">
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="http://www.mapmyrun.com/">
          <div class="col-xs-3">
            <img class="img-circle" src="icons/mapmyrun.png" alt="News" width="50" height="50">
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="http://www.clubrunning.org/">
          <div class="col-xs-3">
            <img class="img-circle" src="icons/nirca.png" alt="Donate" width="50" height="50">
          </div><!-- /.col-lg-4 -->
        </a>
      </div><!-- /.row -->
      <div class="row icons hidden-xs">
        <a target="_blank" href="https://www.facebook.com/groups/571783862880286/">
          <div class="col-sm-3 col-xs-6">
            <img class="img-circle" src="icons/facebook.png" alt="Facebook" width="140" height="140">
            <span class="hidden-xs">
              <h2>MRun Fun!</h2>
              <p>Join our Facebook group</p>
            <span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="https://maizepages.umich.edu/organization/mrun">
          <div class="col-sm-3 col-xs-6">
            <img class="img-circle" src="icons/maize.png" alt="Records" width="140" height="140">
            <span class="hidden-xs">
              <h2>Maize Pages</h2>
              <p>Make sure you fill these out</p>
            <span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="http://www.mapmyrun.com/">
          <div class="col-sm-3 col-xs-6">
            <img class="img-circle" src="icons/mapmyrun.png" alt="News" width="140" height="140">
            <span class="hidden-xs">
              <h2>Map My Run</h2>
              <p>Find all of our routes here</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
        <a target="_blank" href="http://www.clubrunning.org/">
          <div class="col-sm-3 col-xs-6">
            <img class="img-circle" src="icons/nirca.png" alt="Donate" width="140" height="140">
            <span class="hidden-xs">
              <h2>NIRCA</h2>
              <p>For more info about our conference</p>
            </span>
          </div><!-- /.col-lg-4 -->
        </a>
      </div><!-- /.row -->
    </div>

<?php include "footer.php" ?>