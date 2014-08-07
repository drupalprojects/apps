<div class="app-teaser-wrapper clearfix">
  <?php if ($logo): ?>
    <div class="app-logo">
      <?php print $logo ?>
    </div>
  <?php endif; ?>
  <div class="app-teaser" class="clearfix">
    <h2><?php print $name ?></h2>
    <div class="app-status"><?php print $status ?></div>
    <?php print drupal_render($rating); ?>
    <?php if ($config): ?>
      <div class="app-action"><?php print $config; ?></div>
    <?php endif; ?>
    <div class="app-action"><?php print $action; ?></div>
  </div>
</div>
