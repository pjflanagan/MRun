<?php include "header.php" ?>
<link rel="stylesheet" href="carousel.css">

<div id="myCarousel" class="carousel slide race" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="item active" id="tf">
      <div class="container">
        <div class="carousel-caption">
          <h1 class="hidden-xs">TRACK &amp; FIELD</h1>
          <h1 class="visible-xs">T&amp;F</h1>
          <p>run fast, turn left</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div style="background:#FFF;width:100%;height:150px;position:absolute;"></div>

<?php 
  $re = "/\#(tf) (\d+)(.*?)#/s";
  $str = file_get_contents("events.txt");
  preg_match($re, $str, $matches);
?>
  <div class="container">
    <div class="row">
      <div class="newsletters col-md-4">
        <ul class="list-group">
          <a target="_blank" href="https://www.google.com/calendar/embed?src=mrunclub%40gmail.com&ctz=America/New_York">
            <li class="list-group-item title">
              SCHEDULE <?php echo $matches[2]; ?>
            </li>
          </a>
          <?php 
            $events = $matches[3];
            $events = str_replace("/", "<li class='list-group-item'>" , $events);
            $events = str_replace("\\", "</li>" , $events);
            echo $events; 
          ?>
        </ul>
        <div>
          <a data-toggle="modal" data-target="#results" href="popup/results_xc.html"><div class="link"><span class="glyphicon glyphicon-list-alt link-icon" aria-hidden="true"></span>RESULTS</div></a>
          <a target="_blank" href="https://docs.google.com/spreadsheets/d/1QD2G4O96Aer_HkpGbJFw7GlzDlsqz-XvsVSf0P5fWQE/edit?usp=sharing"><div class="link"><span class="glyphicon glyphicon-link link-icon" aria-hidden="true"></span>RECORDS</div></a>
          <a href="mailto:tjkristo@med.umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope link-icon" aria-hidden="true"></span>tjkristo@med.umich.edu</div></a>
        </div>
      </div>
      <div class="col-md-7" style="margin-top:20px;">
        <p>MRun has several different training groups to prepare for the races, with the training plans being included in the weekly training e-mails sent out by the training chair. There are separate training plans for sprints (100-400, hurdles), mid-distance (800-Mile), and distance (3k steeplechase-10k, half marathon), as well as training opportunities for field events (shotput, discus, long jump, high jump, triple jump).</p>
        <p>Sprint Training Plan: Sprint practices in the fall will consist of doing short runs with the distance team at 4:15 at the CCRB, and Tuesday/Thursday track workouts at 8:30pm at the Varsity Outdoor Track. More focused sprint training will begin when we return from winter break.</p>
        <p>Distance/Mid-Distance Training Plan: Workouts will start in January on Tuesday and Thursday nights at 8:30 on the varsity indoor track.</p>
        <p>Field Event Training Plan: Questions should be directed to the sprint training chair.</p>
        </div>
    </div>
  </div>


<div class="modal fade" id="results" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Results</h4>
      </div>
      <div class="modal-body">
        <?php 
          $re_2 = "/<\!--TF-->(.+)<\!--TF-->/s";
          $str_2 = file_get_contents("results.html");
          preg_match($re_2, $str_2, $matches_2);
          echo $matches_2[1];
        ?>
      </div>
    </div>
  </div>
</div>

<?php include "footer.php" ?>