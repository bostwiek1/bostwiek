<!doctype html>
<html>
<head>

  <!---



      CURRENT TO DO

      Enable Full Screen plugin as a radio button, or enable/disable option, and limit 'full screen' to browser window

      Browser-screen limited gallery - probably hand-code an absolute container with some jquizzle


  -->

	<title>dat new bostwiek gettin dat new website</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- wookmark plugin -->
  	<link rel="stylesheet" href="css/wookmark.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/fullscreenslides.js"></script>

</head>
<body>
	<div class="body_container">

		<header>
			<a href="#" class="logo">bostwiek.com</a>


			<nav>
				<ul>
					<li><a href="#" class="nav-item">Traditional</a>
						<ul class="dropdown">
							<li><a href="#">Paintings</a></li>
							<li><a href="#">Sketches</a></li>
							<li><a href="#">Misc</a></li>
						</ul>
					</li>
					<li><a href="#" class="nav-item">Digital</a>
						<ul class="dropdown">
							<li><a href="#">Paintings/Illustration</a></li>
							<li><a href="#">Sketches</a></li>
							<li><a href="#">Animation</a></li>
							<li><a href="#">Videos</a></li>
						</ul>
					</li>
					<li><a href="#" class="nav-item">Web Design</a>
						<ul class="dropdown">
							<li><a href="#">JS</a></li>
							<li><a href="#">Templates</a></li>
							<li><a href="#">Misc</a></li>
						</ul>
					</li>
				</ul>
				

			</nav>
		</header>




  <div class="">
    <div role="main">

      <ul class="tiles-wrap animated gallery" id="wookmark1">


        <!-- These are our grid blocks -->

        <!-- ADD rel="gallery" to a tags to get fullscreen working -->


        <li class="image">
          <!-- <a href="images/gallery/1.jpg"> -->
            <img src="images/gallery/1.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/2.jpg"> -->
            <img src="images/gallery/2.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/3.jpg"> -->
            <img src="images/gallery/3.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/4.jpg"> -->
            <img src="images/gallery/4.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/5.jpg"> -->
            <img src="images/gallery/5.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/6.jpg"> -->
            <img src="images/gallery/6.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/7.jpg"> -->
            <img src="images/gallery/7.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/8.jpg"> -->
            <img src="images/gallery/8.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/9.jpg"> -->
            <img src="images/gallery/9.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/10.jpg"> -->
            <img src="images/gallery/10.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/11.jpg"> -->
            <img src="images/gallery/11.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/12.jpg"> -->
            <img src="images/gallery/12.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/13.jpg"> -->
            <img src="images/gallery/13.jpg" width="250" />
          <!--</a>-->
        </li>

        <li class="image">
          <!-- <a href="images/gallery/14.jpg"> -->
            <img src="images/gallery/14.jpg" width="250" />
          <!--</a>-->
        </li>

      </ul>

    </div>
  </div>



		<footer>

			<ul>
				<li><a href="https://www.instagram.com/bostwiek/" class="social-icon">insta</a></li>
				<li><a href="http://bostwiek.tumblr.com/" class="social-icon">tumblr</a></li>
				<li><a href="http://twitch.tv/bostwiek" class="social-icon">twitch</a></li>
				<!-- 
					<li><a href="https://twitter.com/bostwiek" class="social-icon">twitter</a></li>
					<li><a href="#" class="social-icon">facebook</a></li>
				-->
			</ul>
			<p>&copy; 2016 XD</p>
		</footer>

	</div>


  <!--

    listen for onclick events for gallery items

      ongalleryclick

        open full screen 'gallery'

  -->

  <script src="js/fullscreengallery.js"></script>


  <!-- Include the plug-in -->
  <script src="js/wookmark.js"></script>

  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">

    window.onload = function () {
      var wookmark1 = new Wookmark('#wookmark1', {
          outerOffset: 0, // Optional, the distance to the containers border
          //itemWidth: // Optional, the width of a grid item
      });
    };

  </script>


</body>
</html>