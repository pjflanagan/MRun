<?php include "header.php"; ?>
<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700' rel='stylesheet' type='text/css'><link rel="stylesheet" href="carousel.css">

<div class="carousel slide">
  <div class="carousel-inner">
    <div class="item active" id="error404">
      <div class="container">
        <div class="carousel-caption" style="margin-bottom:82px;">
          <h1>ERROR 404</h1>
          <p>what are you doing here? get out!</p>
        </div>
        <style>
          #big404 {
            -webkit-text-stroke: 8px #FFF;
            left:0;margin-top:-80px;width:100%;
            text-align:center;position:absolute;font-size:340px;
            font-family: 'Roboto Slab', serif;
            color:rgb(190,51,44);opacity:.7;
          }
        </style>
        <div id="big404" class="hidden-xs">
          4&nbsp;&nbsp;&nbsp;4
        </div>
      </div>
    </div>
  </div>
</div>

<div style="background:#FFF;width:100%;height:150px;position:absolute;"></div>


<div class="row profile contact" style="padding-top:20px;">
  
  <div class="col-sm-4 col-sm-offset-1">
    <p class="hidden-xs">Go back hoMe:</p>
    <a href="/"><div class="link"><span class="glyphicon glyphicon-home link-icon" aria-hidden="true"></span>HOME</div></a>
  </div>

  <div class="col-sm-4 col-sm-offset-2">
    <p class="hidden-xs">Let me know I messed up:</p>
    <a href="mailto:mrun-webmaster@umich.edu"><div class="link"><span class="glyphicon glyphicon-envelope link-icon" aria-hidden="true"></span>mrun-webmaster</div></a>
  </div>
</div>


<?php include "footer.php" ?>