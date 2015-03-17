<!-- Plantilla para noticias -->

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
  <div class=textured-image>
    <div class=texture></div>
    <?php print render($content['field_noticia_foto']); ?>
    <div class=titlebox>
      <div class=title><h2><?php print $title; ?></h2></div>
      <div class=metainfo>
        <?php if ($display_submitted): ?>
        <div class="submitted"> <?php print $custom_submitted; ?> </div>
        <?php print $share; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="content"<?php print $content_attributes; ?>>
      <?php print render($content['body']); ?>
      <?php print render($content['field_event_date']); ?>
      <?php print render($content['links']); ?>
  </div>
</div>
