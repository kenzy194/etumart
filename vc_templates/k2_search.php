<?php

extract(shortcode_atts(array(
    'placeholder' => '',
), $atts));
?>

<div class="k2-search-form hidden-xs hidden-sm hidden-md">
	<div class="row">
		<div class="left-side">

			<a href="#" class="tu-van">

				<i class="fa fa-phone-square" aria-hidden="true"></i> TƯ VẤN NGAY
			</a>
		</div>

		<div class="right-side">

			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
		        <input type="text" name="s" id="s" placeholder="<?=(!empty($placeholder))?$placeholder:''?>">
		        <input type="submit" id="searchsubmit" value="Search" />
		    </form>
		</div>
	</div>
</div>