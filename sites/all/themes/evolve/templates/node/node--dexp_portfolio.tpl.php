<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix row"<?php print $attributes; ?>>
  <div class="content"<?php print $content_attributes; ?>>
    <?php
// We hide the comments and links now so that we can render them later.
    hide($content['comments']);
    hide($content['links']);    
    ?>
    <div class="portfolio-image col-md-7">
      <?php print render($content['field_portfolio_images']); ?>
    </div>
    <div class="portfolio-image col-md-5">
      <h3 class="headline"><?php print t('Client Profile');?></h3>
       <span class="brd-headling"></span>
 <div class="clearfix"></div>
      <p><?php print render($content['body']); ?></p>
      <h3 class="headline"><?php print t('Business Challenge');?></h3>
  <span class="brd-headling"></span>
	 <div class="clearfix"></div>
      <p><?php print render($content['field_business_challenge']); ?></p>
	  <div class="clearfix"></div>
     
<div class="clearfix"></div>
    </div>
	<div class="col-md-4">
	<div align = "left">
	<h3 class="headline"><?php print t('Results');?></h3>
      <span class="brd-headling"></span>
	  <div class="clearfix"></div></div>
	  <?php print render($content['field_results']); ?>
    </div>
	<div class="col-md-4">
	<div align = "left">
	<h3 class="headline"><?php print t('Deliverables');?></h3>
     <span class="brd-headling"></span>
	 <div class="clearfix"></div></div>
	 <?php print render($content['field_deliverables']); ?>
    </div>
	<div class="col-md-4">
	<div align = "left">
	<h3 class="headline"><?php print t('irex Value');?></h3>
<span class="brd-headling"></span> 
<div class="clearfix"></div>    </div>
	 <?php print render($content['field_irex_value']); ?>
	   <div align="right"><?php print render($content['field_portfolio_url']);?></div>

    </div>
	
  </div>
</div> 