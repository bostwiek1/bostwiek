<header>
	<div class="body_wrapper">
		<a class="logo" href="index.php"></a>
		<!--<a class="rest_name" href="index.php"><?php echo $restName; ?></a>-->
	</div>
</header>
<nav>
	<div class="body_wrapper">
		<ul class="navig">
			<li class="main_nav">
				<a class="primary_nav" href="index.php" title="Home">Home</a>
			</li>
			<li class="main_nav">
				<a class="primary_nav" href="menu.php" title="Menu">Menu</a>
			</li>
			<li class="main_nav">
				<a class="primary_nav" href="http://eat24hrs.com/restaurants/order2/index.php?id=<?php echo $restID; ?>" title="Order Online">Order Online</a>
			</li>
			<li class="main_nav">
				<a class="primary_nav" href="gallery.php" title="Gallery">Gallery</a>
			</li>
			<li class="main_nav">
				<a class="primary_nav" href="about.php" title="About">About</a>
				<!-- DROPDOWN MENU IF NEEDED
				<ul class="sub_nav_box">
					<li class="sub_nav">
						<a class="secondary_nav" href="" title="">Link</a>
						<a class="secondary_nav" href="" title="">Link</a>
					</li>
				</ul>
				-->
			</li>
			<div class="clear"></div>
		</ul>
		<select ONCHANGE="location = window.location.href=this.value;">
			<option value="" selected="selected">CHOOSE A LINK</option>
			<option value="index.php">Home</option>
			<option value="menu.php">Menu</option>
			<option value="http://eat24hrs.com/restaurants/order2/index.php?id=<?php echo $restID; ?>">Order Online</option>
			<option value="gallery.php">Gallery</option>
			<option value="about.php">About</option>
		</select>
	</div>
</nav>

<script type="text/javascript">

	// turn window.location.href into last directory
	var windowLocation = window.location.href;
	
	var navItem = document.getElementsByClassName('primary_nav');
	for (i=0; i<navItem.length; i++) {
		if (windowLocation == navItem[i].href) {
		navItem[i].className = navItem[i].className + ' active';
		}
	}
	
	// if no items = active, make Home active (or navItem[0])
	var activeNav = document.getElementsByClassName('active');
	if(activeNav[0] == undefined) {
		navItem[0].className = navItem[0].className + ' active';
	}

</script>