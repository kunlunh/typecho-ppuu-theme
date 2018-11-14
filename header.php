<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="alternate" type="application/atom+xml" title="HKL's Blog" href="/feed.xml">
        <!-- Loop and attach page tags from page meta section -->
        
        <meta name="keywords" content="">
        
        <link rel="icon" type="image/png" href="/favicon.png">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php $this->options->themeUrl('main.css'); ?>">
		<link rel="stylesheet" href="https://cdn.staticfile.org/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
       <link href="https://at.alicdn.com/t/font_1471502518_052932.css" rel="stylesheet">
        <!-- JQuery -->
		
        <script src="https://cdn.staticfile.org/jquery/3.3.1/jquery.min.js"></script>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
	<?php $this->header(); ?>

    </head>
<body>
<main>
    <span class="statusbar"></span>
    <!-- Wrap all page content here -->
    <div id="wrap">
        <div id="body" class="container">
            <div class="row row-offcanvas row-offcanvas-left">
                <!-- side navigation -->
                <nav id="nav" role="navigation" class="col-md-2 sidebar-offcanvas">
                    <header id="menu" role="banner">
                        <p class="menu-title">Close</p>
                        <a href="#nav" class="close-btn">
                            <img src="<?php $this->options->themeUrl('img/close-btn.svg'); ?>" alt="close button">
                        </a>
                    </header>
                    <?php $this->need('sidebar.php'); ?>
                </nav>
                <header id="menu" role="banner">
                    <p class="menu-title">Menu</p>
                    <a href="#nav" class="menu-btn">
                        <img src="<?php $this->options->themeUrl('img/menu-btn.svg'); ?>" alt="menu button">
                    </a>
                </header>
                <!-- Content -->
                <div class="col-md-10">
                    <nav class="top">
                        <a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->description() ?> &mdash; <?php $this->options->title() ?></a>
                        <span class="float-right">
                            <a id="weibo-ic" class="link" href="http://weibo.com/xlon">
                                <i class="iconfont icon-weibo" aria-hidden="true"></i>
                            </a>
                            <a id="git-ic" class="link" href="https://github.com/hiplon">
                                <i class="iconfont icon-github"></i>
                            </a>
                            <a id="rss-ic" class="link" href="<?php $this->options->siteUrl(); ?>feed.xml">
                        <i class="iconfont icon-feed"></i>
                            </a>
                        </span>
                    </nav>
                    
                        