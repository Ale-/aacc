<div class="panel-display omega-grid aacc-dashboards-simple" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel grid-3 suffix-1">
    <div class="inside"><?php print $content['left']; ?></div>
  </div>
  <div class="panel-panel grid-8">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
</div>
