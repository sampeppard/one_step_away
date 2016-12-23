
<style>
  @import url("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");
  @import url('https://fonts.googleapis.com/css?family=Anton|Fjalla+One');
</style>
<header>
  <div class="user-menu">
    <?php if ($logged_in): ?>
      <?php print render($page['user_menu']); ?>
    <?php else: ?>
      <ul>
        <li class="menu"><a href="<?php base_path(); ?>user/login">LOG IN</a></li>
      </ul>
    <?php endif; ?>
  </div>
</header>


<div class="cover-image">
    <div class="container">
      <div class="row">
        <div class="header clearfix">
          <div class="logo-div col-xs-12 col-sm-3">
            <?php if ($logo): ?>
              <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
              </a>
            <?php endif; ?>
          </div>
          <div class="main-menu col-xs-12 col-sm-9">
            <?php print render($page['main_menu']); ?>
          </div>
        </div>
      </div>
    </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-xs-12 col-sm-9 content-container-div clearfix">
      <?php if ($messages): ?>
        <div id="messages">
          <div class="section clearfix">
            <?php print $messages; ?>
          </div>
        </div>
      <?php endif; ?>

      <?php if ($breadcrumb): ?>
        <div id="breadcrumb"><?php print $breadcrumb; ?></div>
      <?php endif; ?>

      <h1><?php print $title; ?></h1>

      <?php print render($page['content']); ?>

    </div>

    <?php if ($page['sidebar_first']): ?>
     <div id="sidebar" class="col-xs-12 col-sm-3">
       <?php print render($page['sidebar_first']); ?>
     </div>
   <?php endif; ?>
 </div>
</div>

<footer>
  <div class="footer-text">
    &copy; 2016 One Step Away.
  </div>
</footer>
