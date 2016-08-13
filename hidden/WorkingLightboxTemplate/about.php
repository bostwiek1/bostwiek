
<?php include "includes/restInfo.php"; ?>
<?php include "includes/headInfo.php"; ?>

</head>

<body>
		<?php include "includes/header.php"; ?>
	<div class="body_wrapper">
		<div class="content">
			<div class="wrapper">
				<div class="page_title">About Us</div>
				<div class="column col-l">
					<div class="about_blurb column_box">Are you hungry in <?php echo $restCity; ?>? Welcome to <?php echo $restName; ?>, where you can find great <?php echo $restCuisine; ?> available for delivery or takeout. Check out our online menu and place an order from our site. Don’t want to order now? Visit us at <?php echo $restStreet; ?>.</div>
				</div>
				<div class="column col-r">
					<div class="contact_info column_box">
						<div class="section_title">Location</div>
						<?php echo $restStreet; ?><br />
						<?php echo "$restCity, $restState $restZip"; ?><br />
						<?php echo $restPhone; ?><br />
						<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?hl=en&q=<?php echo $restStreet; ?>, <?php echo $restCity; ?>&ie=UTF8&t=roadmap&z=15&iwloc=B&output=embed"><div><small><a href="http://embedgooglemaps.com">embedgooglemaps.com</a></small></div><div><small><a href="http://buyproxies.io/">shared proxies</a></small></div></iframe>
					</div>
					<div class="hours column_box">
						<div class="section_title">Hours</div>
						<div class="hours_day float-l">Mon:</div><div class="hours_time float-l"><?php echo $hoursMon; ?></div>
						<div class="clear"></div>
						<div class="hours_day float-l">Tue:</div><div class="hours_time float-l"><?php echo $hoursTue; ?></div>
						<div class="clear"></div>
						<div class="hours_day float-l">Wed:</div><div class="hours_time float-l"><?php echo $hoursWed; ?></div>
						<div class="clear"></div>
						<div class="hours_day float-l">Thu:</div><div class="hours_time float-l"><?php echo $hoursThu; ?></div>
						<div class="clear"></div>
						<div class="hours_day float-l">Fri:</div><div class="hours_time float-l"><?php echo $hoursFri; ?></div>
						<div class="clear"></div>
						<div class="hours_day float-l">Sat:</div><div class="hours_time float-l"><?php echo $hoursSat; ?></div>
						<div class="clear"></div>
						<div class="hours_day float-l">Sun</div><div class="hours_time float-l"><?php echo $hoursSun; ?></div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php include "includes/footer.php"; ?>
	</div>
</body>
</html>