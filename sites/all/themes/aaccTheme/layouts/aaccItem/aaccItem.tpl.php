<div class="panel-display omega-grid aacc-item" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel grid-12">
    <div class="inside"><?php print $content['top']; ?></div>
  </div>
  <div class="panel-panel grid-9" id="recent-box">
    <div class="panel-panel grid-8 suffix-1">
	<div class="inside"><?php print $content['left_top']; ?></div>
    </div>
    <div class="panel-panel grid-5">
	<div class="inside"><?php print $content['left_bottom_left']; ?></div>
    </div>
    <div class="panel-panel grid-4">
	<div class="inside"><?php print $content['left_bottom_right']; ?></div>
    </div>
  </div>
  <div class="panel-panel grid-3">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
  <div class="panel-panel grid-12">
    <div class="inside"><?php print $content['bottom']; ?></div>
  </div>
</div>
