<?php

/*
add_shortcode('warning', 'shortcode_warning');
function shortcode_warning($atts, $content) {
	ob_start();

	?>

	<div class="rate-sheet__member_notifer">
		<div class="rate-sheet__member_notifer-svg">
			<?php svg_inline( TEMPLATEPATH . '/images/svg/icon-notifer.svg' ) ?>
		</div>

		<div class="rate-sheet__member_notifer-descr">
			<?php echo wpautop( $content ) ?>
		</div>
	</div>
	
	<?php

	return ob_get_clean();
}

add_shortcode('phone_number', 'shortcode_phone_number');
function shortcode_phone_number($atts, $content) {
	ob_start();

	$phone_number = carbon_get_theme_option('phone_number');

	?>

	<div class="btn-wrapper">
		<a class="btn btn_default btn_white btn_tel btn_text-big" href="tel:<?php echo convert_phone_for_link( $phone_number ) ?>">
			<span aria-hidden="true" class="btn__mask"></span>

			<span class="btn__content">
				<span class="btn__text">
					<?php echo $phone_number ?>
				</span>

				<span aria-hidden="true" class="btn__icon">
					<?php svg_inline( TEMPLATEPATH . '/images/svg/icon-next.svg' ) ?>
				</span>
			</span>
		</a>
	</div>
	
	<?php

	return ob_get_clean();
}