<?php
/**
 * Title: Home Hero
 * Slug: wp-dethbird-sketchbook-theme/home-hero
 * Categories: featured
 */

$image_url = get_theme_file_uri( 'assets/images/dethbird-cassette.webp' );
$width     = 960;
$height    = 852;
?>
<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide home-hero-wrap" style="padding-top:var(--wp--preset--spacing--60); padding-bottom:var(--wp--preset--spacing--60);">
  <!-- wp:image {"url":"<?php echo esc_url( $image_url ); ?>","id":0,"alt":"A Dethbird resting against a cassette player.","width":<?php echo esc_attr( $width ); ?>,"height":<?php echo esc_attr( $height ); ?>,"sizeSlug":"full","linkDestination":"none","className":"home-hero-image"} -->
  <figure class="wp-block-image size-full home-hero-image"><img src="<?php echo esc_url( $image_url ); ?>" alt="A Dethbird resting against a cassette player." width="<?php echo esc_attr( $width ); ?>" height="<?php echo esc_attr( $height ); ?>" loading="eager" fetchpriority="high" /></figure>
  <!-- /wp:image -->
  <p class="home-hero-tagline">It’s my website, I’ll fix it</p>
</div>
<!-- /wp:group -->
