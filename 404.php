<!DOCTYPE HTML>
<html class="no-js" lang="zh-CN">
<head>
  <meta charset="<?php $this->options->charset(); ?>" />
  <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
  <?php if ($this->is('index')): ?><title></title>
	<?php else: ?>
	<title><?php $this->archiveTitle('.', '', ' - '); ?>SwimInSky</title>
	<?php endif; ?>
	<!--[if lt IE 9]>
    <link rel="stylesheet" href="<?php $this->options->themeUrl('javascript/html5shiv.js'); ?>">
  <![endif]-->
  <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.min.css'); ?>">
  <?php $this->header('keywords=&description=&generator=&template=&pingback=&xmlrpc=&wlw=&rss1=&rss2&atom='); ?>
</head>
<body>
<div id="particles-js">
  <div class="body404">
    <div class="info404">
      <header>404</header>
      <section>
        <div class="text404">抱歉，这个页面找不到了</div>
        <a class="back404" rel="nofollow" href="<?php $this->options->siteUrl(); ?>">回首页看看</a>
      </section>
    </div>
      <footer id="footer404">
        &copy; <?php echo date('Y'); ?> <a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a><br>  
        Themed by <a rel="nofollow" href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title(); ?></a> . Powered by <a rel="nofollow" href="http://typecho.org/">Typecho</a>
      </footer>
  </div>
</div>
<script src="<?php $this->options->themeUrl('javascript/particles.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('javascript/app.js'); ?>"></script>
</body>
</html>