<!DOCTYPE HTML>
<html class="no-js" lang="zh-CN">
<head>
    <meta charset="<?php $this->options->charset(); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1.0">
    <title><?php $this->archiveTitle('', '', ' - '); ?><?php $this->options->title(); ?></title>
    <!--[if lt IE 9]>
        <script type="text/javascript" src="<?php $this->options->themeUrl('javascript/html5shiv.js'); ?>"></script>
    <![endif]-->
    <meta name ="title" content="iwxy.me">
    <meta name ="keywords" content="iwxy.me,blog,swiminsky">
    <meta name ="description" content="不高估别人，不低估自己，反之亦然">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="white">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.min.css'); ?>">
    <link rel="shortcut icon" href="<?php $this->options->themeUrl('icon.jpg'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon-precomposed" href="<?php $this->options->themeUrl('icon.jpg'); ?>" />
    <?php $this->header('keywords=&description=&generator=&template=&pingback=&xmlrpc=&wlw=&rss1=&rss2&atom='); ?>
    <script>
    //Data Analysis
    var _hmt = _hmt || [];
    (function() {
      var hm = document.createElement("script");
      hm.src = "//hm.baidu.com/hm.js?bdedf6ddd111350117359d07619ab1c2";
      var s = document.getElementsByTagName("script")[0]; 
      s.parentNode.insertBefore(hm, s);
    })();
    </script>
</head>
<body>
<div id="particles-js">
<header id="header">
    <div class="container">
        <div class="col-group clearfix">
            <div class="site-name ">
                <?php if ($this->is('index')): ?>
                    <h1>
                        <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                            <?php $this->options->title() ?>
                        </a>
                    </h1>
                <?php else:?>
                    <a id="logo" href="<?php $this->options->siteUrl(); ?>">
                        <?php $this->options->title() ?>
                    </a>
                <?php endif; ?>
                <p class="description"><?php $this->options->description() ?></p>
            </div>
            <nav id="nav-menu">
                <a class="<?php if($this->is('index')): ?>current<?php endif; ?> <?php if($this->is('post')): ?>current<?php endif; ?>" href="<?php $this->options->siteUrl(); ?>"><?php _e('文章'); ?></a>
                <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
                <?php while($pages->next()): ?>
                <a <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?> href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a>
                <?php endwhile; ?>
            </nav>
        </div>
    </div>
</header>
<div id="body">
    <div class="container">
        <div class="col-group clearfix">
