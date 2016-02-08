<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-8 blog-posts" id="main" role="main">
            <div class="row">
                <div class="col-md-12">
                    <?php if ($this->have()): ?>
                        <?php while ($this->next()): ?>
                            <article class="post-blog" itemscope itemtype="http://schema.org/BlogPosting">
<!--                                <div class="blog-image">
                                    <a href="upevent/template3.html">
                                        <img src="images/includes/upevent/cover3.jpg" alt="activity pic">
                                    </a>
                                </div> -->
                                <div class="blog-content">
                                    <span class="meta-date"><?php _e('时间: '); ?>
                                        <time datetime="<?php $this->date('c'); ?>"
                                              itemprop="datePublished"><?php $this->date('F j, Y'); ?></time></span>
                                    <span itemprop="author" itemscope itemtype="http://schema.org/Person"
                                          class="meta-author"><?php _e('作者: '); ?><a itemprop="name"
                                                                                     href="<?php $this->author->permalink(); ?>"
                                                                                     rel="author"><?php $this->author(); ?></a></span>
                                    <h3 class="post-title" itemprop="name headline"><a itemtype="url"
                                                                                       href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
                                    </h3>
                                    <p class="light-text"><?php $this->content('- 阅读剩余部分 -'); ?></p>
                                </div>

                            </article>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <article class="post">
                            <h3 class="post-title"><?php _e('没有找到内容'); ?></h3>
                        </article>
                    <?php endif; ?>
                </div>

                <div class="col-md-12">
                    <?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?>
                </div>
            </div>
        </div>

        <?php $this->need('sidebar.php'); ?>
        <?php $this->need('footer.php'); ?>
