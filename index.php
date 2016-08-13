<?php include 'include/head.inc'; ?>

</head>
<body>
  <div class="body_container">

    <?php include 'include/header.inc'; ?>

  <div class="content">

    <h1>[currently under construction]</h1>

    <p>social links:</p>

    <p>The portfolio galleries need a bit of time to load before everything is sorted.  I'm working on a preload, but for the meantime, please grit your teeth and bare with the delay.</p>

    <ul>

      <li><a href="http://twitch.tv/bostwiek" target="_new">twitch</a></li>
      <li><a href="http://instagram.com/bostwiek" target="_new">instagram</a></li>
      <li><a href="http://twitter.com/bostwiek" target="_new">twitter</a></li>
      <li><a href="http://bostwiek.tumblr.com/" target="_new">tumblr</a></li>
      <li><a href="https://www.youtube.com/channel/UCnIaUX5nTVgF0vJV09xpxoQ" target="_new">youtube</a></li>

    </ul>

  </div>


  <?php include 'include/footer.inc'; ?>

  </div>



  <!--<script src="js/fullscreenGallery.js"></script>-->
  <script src="js/lightbox-2.6.min.js"></script>
  <script src="js/wookmark.js"></script>

  <script type="text/javascript">

    window.onload = function () {
      var wookmark1 = new Wookmark('#wookmark1', {
          //outerOffset: 0, // Optional, the distance to the containers border
          //itemWidth: 0// Optional, the width of a grid item
      });
    };

  </script>



<!-- scraps 
  

      CURRENT TO DO

      Enable Full Screen plugin as a checkbox, or enable/disable option, and limit 'full screen' to browser window



          full screen syntax:
                            <li class="image">
                              <a rel="gallery" href="images/gallery/1.jpg">
                                <img src="images/gallery/1.jpg" width="250" />
                              </a>
                            </li>

          lightbox syntax
                            <div class="gallery">
                              <a href="images/gallery/b/1.png" data-lightbox="image-1" title=""><img src="images/gallery/s/1.png" /></a>
                            </div>

-->


</body>
</html>