<?php 

  include 'include/head.inc';

  $currentdir = 'traditional';

?>

</head>

<body>
	<div class="body_container">

		<?php include 'include/header.inc'; ?>

    <div class="content">

      <h1>traditional</h1>

      <div class="categories">
        <div class="section-container">

          <a class="section" id="all">all</a>
          <a class="section" id="paintings">paintings</a>
          <a class="section" id="sketches">sketches</a>
          <a class="section" id="misc">misc</a>

        </div>
      </div>
      
      <div role="main">

        <ul class="tiles-wrap animated gallery traditional" id="wookmark1">

          <?php

            include 'include/sort_list.inc';

          ?>

        </ul>
      </div>


    </div>

    <?php include 'include/footer.inc'; ?>

  </div>


  <?php include 'include/body_bottom.inc'; ?>

</body>
</html>