<?php include 'include/head.inc'; ?>

</head>
<body>
	<div class="body_container">

		<?php include 'include/header.inc'; ?>

  <div class="content">
    <div role="main">

      <ul class="tiles-wrap animated gallery" id="wookmark1">

        <li class="image">
          <a href="images/gallery/1.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/1.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/2.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/2.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/3.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/3.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/4.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/4.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/5.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/5.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/6.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/6.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/7.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/7.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/8.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/8.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/9.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/9.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/10.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/10.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/11.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/11.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/12.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/12.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/13.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/13.jpg" width="250" />
          </a>
        </li>

        <li class="image">
          <a href="images/gallery/14.jpg" data-lightbox="image-1" title="test123">
            <img src="images/gallery/14.jpg" width="250" />
          </a>
        </li>

      </ul>

    </div>
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