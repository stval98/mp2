<!-- start page.tpl.php template -->
<?php if($messages): ?>
  <div id="messages">
    <div class="section clearfix">
      <?php print $messages; ?>
    </div>
  </div>
  <?php endif; ?>

  <?php print render($page['content']); ?>

<div class="searchBlock">
  <?php
  $searchBlock = module_invoke('search', 'block_view', 'search');
  print render($searchBlock['content']);
  ?>
</div>

<div class="mpnBlock">
  <?php
  $mpnBlock = module_invoke('menu', 'block_view', 'menu-primary-navigation');
  print render($mpnBlock['content']);
  ?>
</div>

<div class="moduleForm">
  <?php print render($myModuleForm); ?>
</div>
<!-- end page.tpl.php template -->
