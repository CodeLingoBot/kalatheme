<?php
/**
 * @file
 * Template for Panopoly Burr Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display burr-flipped clearfix <?php !empty($class) ? print $class : ''; ?>" <?php !empty($css_id) ? print "id=\"$css_id\"" : ''; ?>>

  <section class='section'>
    <div class='container'>
      <div class="burr-flipped-container burr-flipped-content-container clearfix row">
        <div class="burr-flipped-content burr-flipped-content-region panel-panel col-md-7">
          <div class="burr-flipped-content-inner burr-flipped-content-region-inner panel-panel-inner">
            <?php print $content['contentmain']; ?>
          </div>
        </div>
        <div class="burr-flipped-sidebar burr-flipped-content-region panel-panel col-md-5">
          <div class="burr-flipped-sidebar-inner burr-flipped-content-region-inner panel-panel-inner">
            <?php print $content['sidebar']; ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</div><!-- /.burr-flipped -->
