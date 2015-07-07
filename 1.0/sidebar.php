<div>

    <?php 
    $folder = dirname($_SERVER['SCRIPT_NAME']);


    if($folder == '/news') {
        echo "<ul class=\"sidebarLinks\">
        <li><a href=\"/news\">Blog</a></li>
        <li><a href=\"/news/newsletter.php\">Newsletter</a></li>
        </ul>";
    }

    if($folder == '/races') {
        echo "<ul class=\"sidebarLinks\">
        <li><a href=\"/races\">Races &amp; Training Home</a></li>
        <li><a href=\"/races/schedule.php\">Schedule &amp; Results</a></li>
        <li><a href=\"/races/oldresults.php\">Old Results</a></li>
        <li><a href=\"/races/records.php\">Records</a></li>
        <li><a href=\"/races/routes.php\">Running Routes</a></li>
        </ul>";
    }

    if($folder == '/about') {
        echo "<ul class=\"sidebarLinks\">
        <li><a href=\"/about\">About Us</a></li>
        <li><a href=\"/about/faq.php\">FAQ</a></li>
        <li><a href=\"/about/contact.php\">Contact Us</a></li>
        <li><a href=\"/about/officers.php\">Officers</a></li>
        </ul>";
    }
    ?>

    <!--
    <p>
        Click below to make a donation to the club (this is NOT for <a href="ram">RAM</a> donations)<br />
        <a href="https://leadersandbest.umich.edu/find/#/give/basket/fund/312096" style="border: none;">
            <img border="0" src="http://mrun.clubrunning.org/images/Donate_Now1.png" alt="Donate Here" style="width: 75%;">
        </a>
    </p>

    -->

</div>

<div>
    <center>
    <h2>Follow us<h2>
        
    <p>
     <a class="follow" href="https://twitter.com/#!/MRun" target="_blank"><img border="0"src="http://mrun.clubrunning.org/images/Twitter.png" alt="Twitter" width="32" height="32" /></a>&nbsp;

     <a class="follow" href="http://www.facebook.com/pages/Michigan-Running-Club/93539428647" target="_blank">
        <img border="0" src="http://mrun.clubrunning.org/images/Facebook.png" alt="Facebook" width="32" height="32" /></a>&nbsp;

        <a class="follow" href="http://www.recsports.umich.edu/clubs/running" target="_blank">
            <img border="0" src="http://mrun.clubrunning.org/images/BlockM.png" alt="Rec Sports" width="45" height="32" /></a>
        </p>

        <p>
         <a class="follow" href="http://clubrunning.org" target="_blank"><img border="0" src="http://mrun.clubrunning.org/images/nirca.png" alt="NIRCA" /></a>
     </p>
    </center>
 </div>

