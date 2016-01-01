<!DOCTYPE HTML>
<html class="no-js">
<head>
  <meta charset="<?php $this->options->charset(); ?>" />
	<meta name="viewport" content="width=device-width,user-scalable=no">
  <?php if ($this->is('index')): ?><title></title>
	<?php else: ?>
	<title><?php $this->archiveTitle('.', '', ' - '); ?>SwimInSky</title>
	<?php endif; ?>
	<!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('javascript/html5shiv.js'); ?>">
  <![endif]-->
  <link rel="stylesheet" href="<?php $this->options->adminUrl('css/normalize.css'); ?>">
  <link rel="stylesheet" href="<?php $this->options->themeUrl('style.min.css'); ?>">
  <?php $this->header('keywords=&description=&generator=&template=&pingback=&xmlrpc=&wlw=&rss1=&rss2&atom='); ?>
</head>
<body>
<div id="particles-js">
  <div class="body404">
    <div class="info404">
      <header id="header404" class="clearfix">
        <div class="site-name404">
          <i>404</i>
        </div>
      </header>
      <section>
        <div class="title404"><p>抱歉，这个页面找不到了</p></div>
        <a class="index404" rel="nofollow" href="<?php $this->options->siteUrl(); ?>">回首页看看</a>
      </section>
      <footer id="footer404">
        &copy; <?php echo date('Y'); ?> <?php $this->options->title(); ?></span>
      </footer>
    </div>
  </div>
</div>
<script src="<?php $this->options->themeUrl('javascript/particles.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('javascript/app.js'); ?>"></script>
</body>
</html>