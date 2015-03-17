<div class="panel-display omega-grid aacc-profiles" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>> 
  <div class="panel-panel grid-8 suffix-1">
      <div class="panel-panel grid-3">
	      <div class="inside"><?php print $content['left_top_left']; ?></div>
      </div>
      <div class="panel-panel grid-5">
	      <div class="inside"><?php print $content['left_top_right']; ?></div>
      </div>
    <div class="panel-panel grid-8">
	    <div class="inside"><?php print $content['left_bottom']; ?></div>
    </div>
  </div>
  <div class="panel-panel grid-3">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
</div>
