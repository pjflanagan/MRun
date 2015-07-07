<?php

$header[] = "http://mrun.clubrunning.org/images/slideshow/pic1.jpg";
$header[] = "http://mrun.clubrunning.org/images/slideshow/pic2.jpg";
$header[] = "http://mrun.clubrunning.org/images/slideshow/pic3.jpg";
$header[] = "http://mrun.clubrunning.org/images/slideshow/pic4.jpg";

srand ((double) microtime() * 1000000);
$randomheader = rand(0,count($header)-1);

echo " " . $header[$randomheader] . " ";

?> 