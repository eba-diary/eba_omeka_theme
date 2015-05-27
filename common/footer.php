</div><!-- end content -->

<footer>

    <div id="footer-content" class="center-div">
        <div id="supporters">
            <a href="http://simpsoncenter.org/" title="Simpson Center For The Humanities"><img src="<?php echo img('uwch_logo2.png'); ?>" /></a>
            <a href="http://www.neh.gov/" title="National Endowment For The Humanities"><img src="<?php echo img('neh_logo.jpg'); ?>" /></a>
            <a href="http://depts.washington.edu/nelc/" title="Department of Near Eastern Languages and Civilization"><img src="<?php echo img('NELC_icon.jpg'); ?>" /></a>
            <a href="http://depts.washington.edu/ndth/" title="Newbook Digital Texts"><img src="<?php echo img('ndt-logo.png'); ?>" /></a>
        </div>
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        
        

    </div><!-- end footer-content -->

     <?php fire_plugin_hook('public_footer', array('view'=>$this)); ?>

</footer>

<script type="text/javascript">
    jQuery(document).ready(function(){
        Omeka.showAdvancedForm();
               Omeka.dropDown();
    });
</script>

</body>

</html>
