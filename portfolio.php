<?php include 'include/head.inc'; ?>

</head>
<body>
	<div class="body_container">

		<?php include 'include/header.inc'; ?>

    <div class="content">

      <h1>portfolio</h1>

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

</body>
</html>