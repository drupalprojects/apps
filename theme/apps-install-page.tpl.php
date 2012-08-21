<?php if (isset($content['featured_app'])) { print drupal_render($content['featured_app']); } ?>
<?php if (isset($content['apps'])) : ?>
  <div id="apps-list" class="clearfix">
    <?php print drupal_render($content['apps']) ?>
  </div>
<?php else: ?>
  <div class="messages"><?php print t('No applications currently available.'); ?></div>
<?php endif; ?>

