<?php
/**
 * Title: Two Column Review
 * Slug: velora-spa/two-column-review
 * Description: A two-column layout with text on the left and image on the right, designed for testimonials or reviews
 * Categories: moiraine/cards, moiraine/features
 * Keywords: review, testimonial, text, image, columns, spa
 * Viewport Width: 1200
 * Block Types: core/columns
 * Inserter: true
 */
?>

<!-- wp:group {"metadata":{"categories":["moiraine/features"],"patternName":"velora-spa/two-column-review","name":"Two Column Review"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}},"backgroundColor":"background-alt","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-alt-background-color has-background" style="padding-top:var(--wp--preset--spacing--large);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--medium)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"55%","className":"is-style-shadow-light","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","right":"var:preset|spacing|medium","bottom":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}},"border":{"width":"1px"}},"backgroundColor":"base"} -->
<div class="wp-block-column is-style-shadow-light has-base-background-color has-background" style="border-width:1px;padding-top:var(--wp--preset--spacing--medium);padding-right:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium);flex-basis:55%"><!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic"}},"fontSize":"medium"} -->
<p class="has-medium-font-size" style="font-style:italic">"The treatment I received at this spa exceeded all my expectations. The staff was professional and attentive, making me feel valued throughout my visit."</p>
<!-- /wp:paragraph -->

<!-- wp:separator {"className":"is-style-wide","backgroundColor":"border-light"} -->
<hr class="wp-block-separator has-text-color has-border-light-color has-alpha-channel-opacity has-border-light-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|small"}},"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"center"}} -->
<div class="wp-block-group"><!-- wp:image {"scale":"cover","sizeSlug":"thumbnail","linkDestination":"none","className":"is-style-rounded-full"} -->
<figure class="wp-block-image size-thumbnail is-style-rounded-full"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/review-profile.jpg' ) ); ?>" alt="Emma Johnson" style="object-fit:cover"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"blockGap":"0px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"style":{"typography":{"fontWeight":"600","fontStyle":"normal"}}} -->
<p style="font-style:normal;font-weight:600">Emma Johnson</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"small"} -->
<p class="has-small-font-size">Regular Client</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"left":"0"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-left:0;flex-basis:50%"><!-- wp:image {"sizeSlug":"large","align":"right","className":"is-style-shadow-light","style":{"border":{"width":"5px"}},"borderColor":"base"} -->
<figure class="wp-block-image alignright size-large has-custom-border is-style-shadow-light"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/spa-treatment-zoomed.jpg' ) ); ?>" alt="Spa Treatment" class="has-border-color has-base-border-color" style="border-width:5px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
