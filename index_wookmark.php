<html>
<head>

	<title>dat new bostwiek gettin dat new website</title>

	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- wookmark plugin -->
  	<link rel="stylesheet" href="css/wookmark.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>


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
        <li><img src="images/test/1.png" width="250" /></li>
        <li><img src="images/test/2.png" width="250" /></li>
        <li><img src="images/test/3.png" width="250" /></li>
        <li><img src="images/test/4.png" width="250" /></li>
        <li><img src="images/test/5.png" width="250" /></li>
        <li><img src="images/test/6.png" width="250" /></li>
        <li><img src="images/test/7.png" width="250" /></li>
        <li><img src="images/test/8.png" width="250" /></li>
        <li><img src="images/test/9.png" width="250" /></li>
        <li><img src="images/test/10.png" width="250" /></li>
        <li><img src="images/test/1.png" width="250" /></li>
        <li><img src="images/test/2.png" width="250" /></li>
        <li><img src="images/test/3.png" width="250" /></li>
        <li><img src="images/test/4.png" width="250" /></li>
        <li><img src="images/test/5.png" width="250" /></li>
      </ul>

      <hr>

      <ul class="tiles-wrap animated" id="wookmark2">
        <li><img src="images/test/6.png" width="250" /></li>
        <li><img src="images/test/7.png" width="250" /></li>
        <li><img src="images/test/8.png" width="250" /></li>
        <li><img src="images/test/9.png" width="250" /></li>
        <li><img src="images/test/10.png" width="250" /></li>
        <li><img src="images/test/1.png" width="250" /></li>
        <li><img src="images/test/2.png" width="250" /></li>
        <li><img src="images/test/3.png" width="250" /></li>
        <li><img src="images/test/4.png" width="250" /></li>
        <li><img src="images/test/5.png" width="250" /></li>
        <li><img src="images/test/6.png" width="250" /></li>
        <li><img src="images/test/7.png" width="250" /></li>
        <li><img src="images/test/8.png" width="250" /></li>
        <li><img src="images/test/9.png" width="250" /></li>
        <li><img src="images/test/10.png" width="250" /></li>
        <!-- End of grid blocks -->
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



  <!-- Include the plug-in -->
  <script src="js/wookmark.js"></script>

  <!-- Once the page is loaded, initalize the plug-in. -->
  <script type="text/javascript">
    window.onload = function () {
      var wookmark1 = new Wookmark('#wookmark1', {
          outerOffset: 0, // Optional, the distance to the containers border
          //itemWidth: // Optional, the width of a grid item
      });

      var wookmark2 = new Wookmark('#wookmark2', {
          outerOffset: 10, // Optional, the distance to the containers border
          itemWidth: 210 // Optional, the width of a grid item
      });
    };
  </script>


</body>
</html>