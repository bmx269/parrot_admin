<?php
//kpr(get_defined_vars());
//kpr($theme_hook_suggestions);
//template naming
//page--[CONTENT TYPE].tpl.php
?>
<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
<!--page.tpl.php-->
<?php } ?>

<?php print $mothership_poorthemers_helper; ?>


<div id="header-wrapper" class="fullwidth">
  <div class="container">
    <header role="banner" class="row">
      <div class="siteinfo">
        <?php print $breadcrumb; ?>
        <?php print render($title_prefix); ?>
        <h1 class="page-title"><?php print $title; ?></h1>
        <?php print render($title_suffix); ?>
      </div>

      <?php if ($page['header']): ?>
        <div class="header-region">
          <?php print render($page['header']); ?>
        </div>
      <?php endif; ?>

    </header>
  </div><!--/.container-->
</div><!--/#header-wrapper-->

<div id="tab-wrapper" class="fullwidth">
  <div class="container">
    <nav class="tabs"><?php print render($primary_local_tasks); ?>
</nav>

  </div>
  </div><!--/.container-->
</div><!--/#tab-wrapper-->

  <div id="highlighted-wrapper" class="fullwidth">
    <div class="container">
      <?php if ($secondary_local_tasks): ?>
        <nav class="tabs-secondary clearfix"><?php print render($secondary_local_tasks); ?></nav>
      <?php endif; ?>
      <?php print render($page['highlighted']); ?>
      <div class="drupal-messages">
        <?php print $messages; ?>
      </div>
    </div><!--/.container-->
  </div><!--/#highlighted-wrapper-->

<div id="content-wrapper" class="fullwidth">
  <div class="container">
    <div class="page row">

      <div role="main" id="main-content">

        <?php if ($action_links): ?>
          <ul class="action-links"><?php print render($action_links); ?></ul>
        <?php endif; ?>

        <?php print render($page['content']); ?>


      </div><!--/main-->
    </div><!--/page-->
  </div><!--/.container-->
</div><!--/#content-wrapper-->

<?php if ($page['footer']): ?>
  <div id="footer-wrapper" class="fullwidth">
    <div class="container">
      <footer role="contentinfo" class="row">
        <?php print render($page['footer']); ?>
      </footer>
    </div><!--/.container-->
  </div><!--/#footer-wrapper-->
<?php endif; ?>
