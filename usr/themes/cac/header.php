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

<div class="responsive_menu">
    <ul class="main_menu">
        <li><a href="/">Home</a></li>
        <li><a href="#">About us</a>
            <ul>
                <li><a href="/about/">About C@C</a></li>
                <li><a href="/about/history">History of C@C</a></li>
                <li><a href="/about/team">Our Team</a></li>
                <li><a href="/about/contact">Contact Us</a></li>
            </ul>
        </li>
        <li><a href="#">Events</a>
            <ul>
                <li><a href="/events/upcoming">Upcoming Events</a></li>
                <li><a href="/events/review">Review</a></li>
                <li><a href="/events/annoucement">Announcement</a></li>
            </ul>
        </li>
        <li><a href="#">Contests</a>
            <ul>
                <li><a href="/contest/oj">Online Judge</a></li>
                <li><a href="/contest/competitionevent">Events & Information</a></li>
            </ul>
        </li>
        <li><a href="#">Membership</a>
            <ul>
                <li><a href="/member/resources">Resources</a></li>
                <li><a href="/member/mirrorsite">Mirror Site</a></li>
                <li><a href="/member/recommendation">Recommendation</a></li>
                <li><a href="/member/forum">Forum</a></li>
            </ul>
        </li>
        <!--  Forum:if possible
        <li><a href="archives.html">Forum</a></li>
        -->
        <li><a href="#">Join Us</a>
            <ul>
                <li><a href="/member/login">Log In</a></li>
                <li><a href="/member/signup">Sign Up</a></li>
                <li><a href="/member/jointeam">Join The Team</a></li>
            </ul>
        </li>
        <li><a href="/utils/switchlang?lang=cn">中文</a>
    </ul> <!-- /.main_menu -->
</div> <!-- /.responsive_menu -->
<header class="site-header clearfix" id="header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left logo"><a href="/"> <img src="/assets/images/logo-head.png"
                                                              alt="Computer And Comity logo"> </a>
                </div>    <!-- /.logo -->
                <div class="main-navigation pull-right">
                    <nav class="main-nav visible-md visible-lg">
                        <ul class="sf-menu">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="#">About us</a>
                                <ul>
                                    <li><a href="/about/">About C@C</a></li>
                                    <li><a href="/about/history">History of C@C</a></li>
                                    <li><a href="/about/team">Our Team</a></li>
                                    <li><a href="/about/contact">Contact Us</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Events</a>
                                <ul>
                                    <li><a href="/events/upcoming">Upcoming Events</a></li>
                                    <li><a href="/events/review">Review</a></li>
                                    <li><a href="/events/annoucement">Announcement</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Contests</a>
                                <ul>
                                    <li><a href="/contest/oj">Online Judge</a></li>
                                    <li><a href="/contest/competitionevent">Events & Information</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Membership</a>
                                <ul>
                                    <li><a href="/member/resources">Resources</a></li>
                                    <li><a href="/member/mirrorsite">Mirror Site</a></li>
                                    <li><a href="/member/recommendation">Recommendation</a></li>
                                    <li><a href="/member/forum">Forum</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Join Us</a>
                                <ul>
                                    <li><a href="/member/login">Log In</a></li>
                                    <li><a href="/member/signup">Sign Up</a></li>
                                    <li><a href="/member/jointeam">Join The Team</a></li>
                                </ul>
                            </li>
                            <li><a href="/utils/switchlang?lang=cn">中文</a>
                        </ul> <!-- /.sf-menu -->
                    </nav> <!-- /.main-nav -->

                    <div class="responsive-navigation visible-sm visible-xs"><a href="#nogo" class="menu-toggle-btn"><i
                                class="fa fa-bars"></i></a></div> <!-- /responsive_navigation -->
                </div> <!-- /.main-navigation -->
            </div> <!-- /.col-md-12 -->
        </div>
    </div>
</header>
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
<!--                            <?php /*if ($this->is('post')): $this->category(); */?> &raquo; <?php /*$this->title() */?>
                            --><?php /*else:$this->archiveTitle(' &raquo; ', '', '');  endif; */?>
                        </span>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.parallax-overlay -->
    </div> <!-- /.pageTitle -->
<?php endif; ?>
