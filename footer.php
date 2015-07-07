    <!--JQuery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!--Bootstrap-->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- Google Analytics-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-57198287-1', 'auto');
      ga('send', 'pageview');
    </script>

    <!--Script-->
    <script>
      $(function() {
        $(".dropdown").hover(
          function(){ $(this).addClass('open')},
          function(){ $(this).removeClass('open') }
        );
        $("nav ul li").hover(
          function(){ 
            $(this).addClass('active')
          },
          function(){ 
            if($(this).hasClass('current'))return;
            $(this).removeClass('active')
          }
        );

        {
          try {
            var file = document.location.href.match(/[^\/]+$/)[0];
            id = "#" + file;
            id = (id=="#tf" || id=="#xc") ? "#races" : (id=="#current"||id=="#prospective") ? "#members" : (file.substr(0,4)=="news") ? "#news" : id;
          }
          catch(e) {
            id = "#index";
          }
          $(id).addClass("active current");
        }

      });

      window.onload = function(){
        var images = new Array();
        var imagesNames = new Array();
        function preload() {
          for (i = 0; i < preload.arguments.length; i++) {
            images[i] = new Image()
            images[i].src = preload.arguments[i]
          }
        }
        for(var i=2; i<=3; i++) imagesNames.push("bg/bg-slide-"+i+".jpg");
        preload(imagesNames);
      }

      $("#scroll-more-info").click(function(){
        var loc = $("#more-info").offset().top;
        $("body,html").animate({scrollTop: loc},400);
      });

      var TOP = ($(".carousel").hasClass("race")) ? -200 : 5;
      document.addEventListener("scroll", function(){
        var top = $(document).scrollTop();
        $(".carousel").css({
          "top": TOP+(top/4)
        });
      })
    </script>
  </body>
</html>
