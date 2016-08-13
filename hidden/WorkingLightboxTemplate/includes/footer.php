<footer>
	<div class="wrapper">
		<div class="footer_address"><?php echo "$restStreet, $restCity, $restState $restZip"; ?> ▣ <span style="white-space: nowrap"><?php echo "$restPhone"; ?></span></div>
		<div class="social_btns">
			
			<?php

				if ($facebookLink != '') {
					echo '<a class="facebook" href="'.$facebookLink.'"></a>';
				}

				if ($yelpLink != '') {
					echo '<a class="yelp" href="'.$yelpLink.'"></a>';
				}

				if ($gplusLink != '') {
					echo '<a class="gplus" href="'.$gplusLink.'"></a>';
				}

				if ($twitterLink != '') {
					echo '<a class="twitter" href="'.$twitterLink.'"></a>';
				}				

				if ($instagramLink != '') {
					echo '<a class="instagram" href="'.$instagramLink.'"></a>';
				}			


			?>

		</div>
		<div class="social_likes">
			<script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
			<g:plusone href="<?php echo $restURL ?>"></g:plusone>
			<iframe src="http://www.facebook.com/plugins/like.php?app_id=120764404679157&amp;href=<?php echo $restURL ?>&amp;send=false&amp;layout=button_count&amp;width=80&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font=arial&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe>
		</div>
		<div class="clear"></div>
	</div>
</footer>