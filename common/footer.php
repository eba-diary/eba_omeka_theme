</div><!-- end content -->

<footer>

    <div id="footer-content" class="center-div">
        <div id="supporters">
            <img src="<?php echo img('uwch_logo2.png'); ?>" />
            <img src="<?php echo img('neh_logo.jpg'); ?>" />
            <img src="<?php echo img('NELC_icon.jpg'); ?>" />
            <img src="<?php echo img('ndt-logo.png'); ?>" />
        </div>
        <?php if($footerText = get_theme_option('Footer Text')): ?>
        <div id="custom-footer-text">
            <p><?php echo get_theme_option('Footer Text'); ?></p>
        </div>
        <?php endif; ?>
        <?php if ((get_theme_option('Display Footer Copyright') == 1) && $copyright = option('copyright')): ?>
        <p><?php echo $copyright; ?></p>
        <?php endif; ?>
        
        <p><?php echo __('Proudly powered by <a href="http://omeka.org">Omeka</a>.'); ?></p>

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
