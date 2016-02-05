<?php
/**
 * This is the theme for Computer @nd Comity, CUHK(SZ).
 * 
 * @package Computer And Comity Theme
 * @author CAC Team
 * @version 1.0
 * @link https://www.computercomity.com
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>

<!------------------------------------大幅图片广告------------------------------------------------------------------>
<section id="homeIntro" class="parallax first-widget">
	<!--图片在css1.css第444行-->
	<div class="parallax-overlay">
		<div class="container home-intro-content">
			<div class="row">
				<div class="col-md-12">
					<h2>Computer @nd Comity</h2>
					<p>We focus on Information Technology, share computer science knowledge, provide IT services.</br> We are in CUHK(SZ). </p>
					<a href="#" class="large-button white-color"> JOIN US ! <i class="icon-button fa fa-bars"></i></a>
				</div> <!-- /.col-md-12 -->
			</div> <!-- /.row -->
		</div> <!-- /.container -->
	</div> <!-- /.parallax-overlay -->
</section> <!-- /#homeIntro -->

<section class="cta clearfix">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h4 class="cta-title">We plan for the following types of <strong>activities</strong></h4>
				<a href="upcomingevents.html" class="main-button accent-color">Discover Exciting Events<i class="icon-button fa fa-arrow-right"></i></a>
			</div> <!-- /.col-md-12 -->
		</div> <!-- /.row -->
	</div> <!-- /.container -->
</section> <!-- /.cta -->


<div class="col-mb-12 col-8" id="main" role="main">
	<?php while($this->next()): ?>
        <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
			<h2 class="post-title" itemprop="name headline"><a itemtype="url" href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			<ul class="post-meta">
				<li itemprop="author" itemscope itemtype="http://schema.org/Person"><?php _e('作者: '); ?><a itemprop="name" href="<?php $this->author->permalink(); ?>" rel="author"><?php $this->author(); ?></a></li>
				<li><?php _e('时间: '); ?><time datetime="<?php $this->date('c'); ?>" itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></li>
				<li><?php _e('分类: '); ?><?php $this->category(','); ?></li>
				<li itemprop="interactionCount"><a itemprop="discussionUrl" href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('评论', '1 条评论', '%d 条评论'); ?></a></li>
			</ul>
            <div class="post-content" itemprop="articleBody">
    			<?php $this->content('- 阅读剩余部分 -'); ?>
            </div>
        </article>
	<?php endwhile; ?>

    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
</div><!-- end #main-->
<?php $this->need('sidebar.php'); ?>
<?php $this->need('footer.php'); ?>
