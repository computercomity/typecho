<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title><?php $this->archiveTitle(array(
            'category' => _t('分类 %s 下的文章'),
            'search' => _t('包含关键字 %s 的文章'),
            'tag' => _t('标签 %s 下的文章'),
            'author' => _t('%s 发布的文章')
        ), '', ' | '); ?><?php $this->options->title(); ?></title>

    <link
        href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic|Source+Sans+Pro:400,700,400italic,700italic,300,300italic|Raleway:400,500,700,300|Raleway+Dots'
        rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/app.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/blue-scheme.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/misc.min.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('css/stylish-portfolio.min.css'); ?>">

    <script src="https://cdn.jsdelivr.net/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.migrate/1.3.0/jquery-migrate.min.js"></script>

    <?php $this->header(); ?>
</head>
<body>
<!-- FUCK IE -->
<!--[if lt IE 8]>
<div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a
    href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.
</div>
<![endif]-->

<!------------------------------------响应式菜单-------------------------------------------------------------------->
<div class="responsive_menu">
    <ul class="main_menu">
        <li><a href="/">首页</a></li>
        <li><a href="#">关于我们</a>
            <ul>
                <li><a href="/about-us">关于我们</a></li>
                <li><a href="/about-history">协会记事</a></li>
                <li><a href="/about-team">我们的团队</a></li>
            </ul>
        </li>
        <li><a href="#">活动专区</a>
            <ul>
                <li><a href="/upcomingevents">活动预告</a></li>
                <li><a href="/review">活动回顾</a></li>
                <li><a href="/annoucement">公告栏</a></li>
            </ul>
        </li>
        <li><a href="#">赛事专区</a>
            <ul>
                <li><a href="#">Online Judge (尚未开放)</a></li>
                <li><a href="/competition-information">赛事信息 (尚未开放)</a></li>
            </ul>
        </li>
        <li><a href="#">会员专区</a>
            <ul>
                <li><a href="/members/resource">资源区 (尚未开放)</a></li>
                <li><a href="/members/mirrorsite">镜像站 (尚未开放)</a></li>
                <li><a href="/members/recommendation">推荐专区 (尚未开放)</a></li>
            </ul>
        </li>
        <li><a href="#">加入我们</a>
            <ul>
                <li><a href="/members/login">会员登录</a></li>
                <li><a href="/members/register">注册为会员</a></li>
                <li><a href="/members/application">加入团队</a></li>
                <li><a href="/contact/">联系我们</a></li>
            </ul>
        </li>
        <li><a href="/en">English</a>
    </ul> <!-- /.main_menu -->
</div> <!-- /.responsive_menu -->
<!------------------------------------菜单栏------------------------------------------------------------------------>
<header class="site-header clearfix">
    <div class="container">

        <div class="row">

            <div class="col-md-12">

                <div class="pull-left logo">
                    <a href="/">
                        <img src="<?php $this->options->themeUrl('images/logo-head.png'); ?>"
                             alt="Computer And Comity logo">
                    </a>
                </div>    <!-- /.logo -->

                <div class="main-navigation pull-right">

                    <nav class="main-nav visible-md visible-lg">
                        <ul class="sf-menu">
                            <li><a href="/">首页</a></li>
                            <li><a href="#">关于我们</a>
                                <ul>
                                    <li><a href="/about-us">关于我们</a></li>
                                    <li><a href="/about-history">协会记事</a></li>
                                    <li><a href="/about-team">我们的团队</a></li>
                                </ul>
                            </li>
                            <li><a href="#">活动专区</a>
                                <ul>
                                    <li><a href="/upcomingevents">活动预告</a></li>
                                    <li><a href="/review">活动回顾</a></li>
                                    <li><a href="/annoucement">公告栏</a></li>
                                </ul>
                            </li>
                            <li><a href="#">赛事专区 (尚未开放)</a>
                                <ul>
                                    <li><a href="#">Online Judge (尚未开放)</a></li>
                                    <li><a href="/competition-information">赛事信息 (尚未开放)</a></li>
                                </ul>
                            </li>
                            <li><a href="#">会员专区 (尚未开放)</a>
                                <!--                                <ul>
                                                                    <li><a href="/members/resource">资源区 (尚未开放)</a></li>
                                                                    <li><a href="/members/mirrorsite">镜像站 (尚未开放)</a></li>
                                                                    <li><a href="/members/recommendation">推荐专区 (尚未开放)</a></li>
                                                                </ul>-->
                            </li>
                            <li><a href="#">加入我们 (尚未开放)</a>
                                <!--                                <ul>-->
                                <!--                                    <li><a href="/members/login">会员登录 (尚未开放)</a></li>-->
                                <!--                                    <li><a href="/members/register">注册为会员 (尚未开放)</a></li>-->
                                <!--                                    <li><a href="/members/application">加入团队 (尚未开放)</a></li>-->
                                <!--                                </ul>-->
                            </li>
                            <li><a href="/contact/">联系我们 (尚未开放)</a></li>
                            <li><a href="/en">English</a>
                        </ul> <!-- /.sf-menu -->
                    </nav> <!-- /.main-nav -->

                    <!-- This one in here is responsive menu for tablet and mobiles -->
                    <div class="responsive-navigation visible-sm visible-xs">
                        <a href="#nogo" class="menu-toggle-btn">
                            <i class="fa fa-bars"></i>
                        </a>
                    </div> <!-- /responsive_navigation -->
                </div> <!-- /.main-navigation -->
            </div> <!-- /.col-md-12 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</header> <!-- /.site-header -->
<?php if ($this->is('archive') OR
    $this->is('single') OR
    $this->is('page') OR
    $this->is('post') OR
    $this->is('category')OR
    $this->is('tag')): ?>
    <div class="first-widget parallax" id="blog">
        <div class="parallax-overlay">
            <div class="container pageTitle">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <h2 class="page-title"><?php $this->archiveTitle("",'',''); ?></h2>
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-6 text-right">
                        <span class="page-location">
                            <?php $this->archiveTitle(array(
                                'category' => _t('分类 %s 下的文章'),
                                'search' => _t('包含关键字 %s 的文章'),
                                'tag' => _t('标签 %s 下的文章'),
                                'author' => _t('%s 发布的文章')
                            ), 'Home / ', '') ?>
                        </span>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </div> <!-- /.pageTitle -->
<?php endif; ?>
