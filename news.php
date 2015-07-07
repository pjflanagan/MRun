<?php include "header.php" ?>


<?php

$files = scandir("articles" , 1);

$fileIndex;
$fileRequested = $_GET["date"];


if($fileRequested == 0) $fileIndex = 0;
else $fileIndex = array_search( $fileRequested . ".html" , $files);

$numFiles = count($files)-2;

$next = ($fileIndex == 0 ? "#" : "news.php?date=" . substr($files[$fileIndex-1],0,10));
$prev = ($fileIndex == $numFiles-1 ? "#" : "news.php?date=" . substr($files[$fileIndex+1],0,10));
$curr = $files[$fileIndex];

$next_class = ($next=="#") ? "dead" : "";
$prev_class = ($prev=="#") ? "dead" : "";

$months = array("January","February","March","April","May","June","July","August","September","October","November","December");

$day = substr($curr,8,2);
$day = (substr($day,0,1)=="0") ? substr($day,1,1) : $day;
$month = $months[intval(substr($curr,5,2))-1];
$year = substr($curr,0,4);

$curr_name = $month . " " . $day . ", " . $year;

//SHOULD I USE AJAX HERE INSTEAD? PROBABLY.


$newsletters = scandir("newsletters" , 1);

?>


<div class="container">

  <div class="row">
    
    <div class="dropdown hidden-md hidden-lg">
      <!--NEWSLETTER DROPDOWN-->
      <button class="btn btn-default dropdown-toggle" type="button" id="newsletter-dropdown" data-toggle="dropdown" aria-expanded="true">
        NEWSLETTERS <span class="caret"></span>
      </button>
      <!--DROPDOWN EXPANDED-->
      <ul class="dropdown-menu newsletter" role="menu">

        <?php
        $current_year =  substr($newsletters[0],0,4);
        echo "<li class='disabled'><a>" . $current_year ."</a></li>";
        foreach($newsletters as $n){
          if($n=="..")break;
          if(substr($n,0,4)!=$current_year){
            $current_year =  substr($n,0,4);
            echo "<li class='disabled'><a>" . $current_year ."</a></li>";
          }
          $month = $months[intval(substr($n,5,2))-1];
          echo "<li><a href='newsletters/" . $n . "' role='menuitem' tabindex='-16'>" . $month . "</a></li>";
        }
        ?>
        
      </ul>
    </div>

    <!--NEWSLETTER SIDE BAR-->
    <div class="newsletters">
      <ul class="list-group col-md-4 hidden-sm hidden-xs">
        <li class="list-group-item title">NEWSLETTERS</li>
        <?php
        $current_year =  substr($newsletters[0],0,4);
        echo "<li class='list-group-item year'>" . $current_year ."</li>";
        foreach($newsletters as $n){
          if($n=="..")break;
          if(substr($n,0,4)!=$current_year){
            $current_year =  substr($n,0,4);
            echo "<li class='list-group-item year'>" . $current_year ."</li>";
          }
          $month = $months[intval(substr($n,5,2))-1];
          echo "<li class='list-group-item'><a href='newsletters/" . $n . "'>" . $month . "</a></li>";
        }
        ?>
      </ul>
    </div>

    <!--ARTICLES-->
    <div class="col-md-7" >
      <!--LINKS-->
      <table class="article-bar">
        <tr>
          <td><?php echo "<a href='" . $prev . "' class='" . $prev_class . "'>" ?><div class="link-prev link">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          </div></a></td>
          <td class="mid"><?php echo $curr_name; ?></td>
          <td><?php echo "<a href='" . $next . "' class='" . $next_class . "'>" ?><div class="link-next link">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          </div></a></td>
        </tr>
      </table>

      <!--ARTICLE-->
      <?php include "articles/" . $curr; ?>

    </div>
  </div>
</div>



<?php include "footer.php" ?>