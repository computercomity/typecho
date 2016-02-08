<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

</div><!-- end .row -->
</div>

<footer class="site-footer">
    <div class="container">
        <div class="column">
            <div class="col-md-1"></div>
            <div class="col-md-4">
                <p class="copyright-text">
                    <img src="<?php $this->options->themeUrl('images/foot.png'); ?>" alt="logo image">
                </p>
            </div> <!-- /.col-md-4 -->
            <div class="col-md-1"></div>
        </div> <!-- /.column -->
        <div class="column">
            <div class="col-md-6">
                <nav class="footer-nav clearfix">
                    <ul class="footer-menu">
                        <li><a href="/" target="_blank">回到首页</a></p></li>
                        <li><a href="/contact" target="_blank">意见反馈</a></p></li>
                        <li><a href="/disclaimer" target="_blank">免责声明</a></p></li>
                        <li><a href="/privacy" target="_blank">隐私条例</a></p></li>
                    </ul> <!-- /.footer-menu -->
                </nav> <!-- /.footer-nav -->
                <p class="copyright-text"> &copy; <?php echo date('Y'); ?>
                    <a href="<?php $this->options->siteUrl(); ?>"> Computer @nd Comity | CUHK(SZ)</a></br>
                    扫描二维码，了解更多！ </br>
                    <img src="<?php $this->options->themeUrl('images/qrcode.jpg'); ?>" alt="QR code"></p>
            </div> <!-- /.col-md- -->
        </div> <!-- /.column -->
    </div> <!-- /.container -->
</footer> <!-- /.site-footer -->

<script src="<?php $this->options->themeUrl('js/medigo-custom.min.js'); ?>"></script>
<script src="<?php $this->options->themeUrl('js/plugins.min.js'); ?>"></script>
<?php $this->footer(); ?>
</body>
</html>
