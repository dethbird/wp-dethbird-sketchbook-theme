<?php
/**
 * Title: Site Header
 * Slug: wp-dethbird-sketchbook-theme/site-header
 * Categories: header
 */

$home_url  = home_url( '/' );
$image_url = get_theme_file_uri( 'assets/images/dethbird-home.webp' );
$width     = 560;
$height    = 262;
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}},"border":{"bottom":{"color":"var:preset|color|contrast","width":"1px"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40); padding-bottom:var(--wp--preset--spacing--40);">
  <!-- wp:group {"layout":{"type":"flex","justifyContent":"space-between","flexWrap":"wrap","verticalAlignment":"center"}} -->
  <div class="wp-block-group">
    <!-- wp:html -->
    <a class="site-home-link" href="<?php echo esc_url( $home_url ); ?>" aria-label="Dethbird.com - home"><img src="<?php echo esc_url( $image_url ); ?>" alt="Dethbird" width="<?php echo esc_attr( $width ); ?>" height="<?php echo esc_attr( $height ); ?>" loading="eager" decoding="async" /></a>
    <!-- /wp:html -->
    <!-- wp:navigation {"layout":{"type":"flex","justifyContent":"right"},"overlayMenu":"never"} -->
    <!-- /wp:navigation -->
  </div>
  <!-- /wp:group -->
</div>
<!-- /wp:group -->
