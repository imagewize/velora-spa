<?php
/**
 * Title: Overlapping Feature Columns
 * Slug: velora-spa/overlapping-feature-columns
 * Description: A two-column layout with image and overlapping text block.
 * Categories: moiraine/features
 * Keywords: columns, image, text, feature, fitness, overlap, spa
 * Viewport Width: 1200
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:columns {"align":"wide","className":"is-style-overlap-columns","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium"},"blockGap":{"top":"0","left":"0"}}}} -->
<div class="wp-block-columns alignwide is-style-overlap-columns" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium)">
  <!-- wp:column {"width":"60%"} -->
  <div class="wp-block-column" style="flex-basis:60%">
    <!-- wp:image {"sizeSlug":"large","className":"is-style-default"} -->
    <figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/yoga-pose.jpg' ) ); ?>" alt="Spa treatment"/></figure>
    <!-- /wp:image -->
  </div>
  <!-- /wp:column -->

  <!-- wp:column {"width":"50%","className":"overlap-column"} -->
  <div class="wp-block-column overlap-column" style="flex-basis:50%">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"base","className":"has-box-shadow"} -->
    <div class="wp-block-group has-box-shadow has-base-background-color has-background" style="padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)">
      <!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"500","textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"primary","fontSize":"small"} -->
      <p class="has-primary-color has-text-color has-small-font-size" style="font-style:normal;font-weight:500;letter-spacing:2px;text-transform:uppercase">Wellness</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"style":{"typography":{"fontFamily":"var:preset|font-family|cormorant-garamond"},"spacing":{"margin":{"top":"0.5rem","bottom":"1.5rem"}}}} -->
      <h2 class="wp-block-heading" style="margin-top:0.5rem;margin-bottom:1.5rem;font-family:var(--wp--preset--font-family--cormorant-garamond)">Discover Inner Peace Through Movement</h2>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph -->
      <p>Our holistic approach combines movement, mindfulness, and expert guidance to help you achieve balance in body and mind. Experience the transformation with our specialized programs.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph -->
      <p><a href="#">Learn more →</a></p>
      <!-- /wp:paragraph -->

      <!-- wp:spacer {"height":"50px"} -->
    <div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->
    </div>
    <!-- /wp:group -->
  </div>
  <!-- /wp:column -->
</div>
<!-- /wp:columns -->