<div class="panel-display omega-grid aacc-home" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel grid-3 sidebar">
    <div class="inside"><?php print $content['sidebar']; ?></div>
  </div>
  <div class="panel-panel grid-9 content">
    <div class="panel-panel grid-9 top">
      <div class="inside"><?php print $content['top']; ?></div>
    </div>
    <div class="panel-panel grid-5 left">
      <div class="inside"><?php print $content['left']; ?></div>
    </div>
    <div class="panel-panel grid-4 right">
      <div class="inside"><?php print $content['right']; ?></div>
    </div>
    <div class="panel-panel grid-9 bottom">
      <div class="inside"><?php print $content['bottom']; ?></div>
    </div>
  </div>
</div>
