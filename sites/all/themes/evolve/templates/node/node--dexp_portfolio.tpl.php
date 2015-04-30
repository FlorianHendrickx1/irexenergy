<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix row"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
// We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);    
    ?>
    <div class="portfolio-image col-md-5">
      <?php print render($content['field_portfolio_images']); ?>
    </div>
    <div class="portfolio-image col-md-7">
      <h3 class="headline"><?php print t('Client Profile');?></h3>
     
      <p><?php print render($content['body']); ?></p>
      <h3 class="headline"><?php print t('Business Challenge');?></h3>

      <p><?php print render($content['field_business_challenge']); ?></p>
	  <div class="clearfix"></div>
      <div align="right"><?php print render($content['field_portfolio_url']);?></div>

    </div>

  </div>
</div> 