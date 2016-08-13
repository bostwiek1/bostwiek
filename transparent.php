<?php include 'include/head.inc'; ?>

  <style type="text/css">

    ul {list-style-type: none;}
    ul li {display: inline;}
    ul li img {display: inline-block; width: 200px;}

  </style>

</head>
<body>
  <div class="body_container">

    <?php include 'include/header.inc'; ?>

  <div class="content">

    <ul>
      <li><img src="images/transparent/aliem.png"></li>
      <li><img src="images/transparent/booterfly.png"></li>
      <li><img src="images/transparent/breastrub.png"></li>
      <li><img src="images/transparent/carrotbug.png"></li>
      <li><img src="images/transparent/cheshire.png"></li>
      <li><img src="images/transparent/crawfish.png"></li>
      <li><img src="images/transparent/donaldtrunk.png"></li>
      <li><img src="images/transparent/drworm.png"></li>
      <li><img src="images/transparent/ellyfonts.png"></li>
      <li><img src="images/transparent/flyguy.png"></li>
      <li><img src="images/transparent/frampt.png"></li>
      <li><img src="images/transparent/gooba.png"></li>
      <li><img src="images/transparent/hitchcock.png"></li>
      <li><img src="images/transparent/hornet.png"></li>
      <li><img src="images/transparent/kaathe.png"></li>
      <li><img src="images/transparent/larry.png"></li>
      <li><img src="images/transparent/overlord.png"></li>
      <li><img src="images/transparent/skoll.png"></li>
      <li><img src="images/transparent/sleepy.png"></li>
      <li><img src="images/transparent/wasp.png"></li>


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