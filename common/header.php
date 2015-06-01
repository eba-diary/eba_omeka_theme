<!DOCTYPE html>
<html class="<?php echo get_theme_option('Style Sheet'); ?>" lang="<?php echo get_html_lang(); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=yes" />
    <?php if ($description = option('description')): ?>
    <meta name="description" content="<?php echo $description; ?>" />
    <?php endif; ?>

    <?php
    if (isset($title)) {
        $titleParts[] = strip_formatting($title);
    }
    $titleParts[] = option('site_title');
    ?>
    <title><?php echo implode(' &middot; ', $titleParts); ?></title>

    <?php echo auto_discovery_link_tags(); ?>

    <?php fire_plugin_hook('public_head',array('view'=>$this)); ?>
    <!-- Stylesheets -->
    <?php
    queue_css_file('style');

    echo head_css();
    ?>
    <!-- JavaScripts -->
    <?php queue_js_file('vendor/modernizr'); ?>
    <?php queue_js_file('vendor/selectivizr', 'javascripts', array('conditional' => '(gte IE 6)&(lte IE 8)')); ?>
    <?php queue_js_file('vendor/respond'); ?>
    <?php queue_js_file('globals'); ?>
    <?php echo head_js(); ?>
</head>
 <?php echo body_tag(array('id' => @$bodyid, 'class' => @$bodyclass)); ?>
    <?php fire_plugin_hook('public_body', array('view'=>$this)); ?>
        <header>
            <?php fire_plugin_hook('public_header', array('view'=>$this)); ?>
            <div id="site-title">
              <?php echo link_to_home_page("<img src='" . img("eba_logo.jpg") . "' alt='Emma B. Andrews Diary Project'/>"); ?>
                <h1>Emma B. Andrews Diary Project</h1>
            </div>

            <div id="search-container">
                <h2>Search</h2>
                <?php echo search_form(array('show_advanced'=>TRUE)); ?>
                <div id="social-media">
                    <a href="https://www.facebook.com/EmmaBAndrewsDiary?fref=ts"><img src="<?php echo img('FB-f-Logo__blue_50.png'); ?>" alt="Facebook" title="Facebook"/></a>
                    <a href="http://twitter.com/sarahketchley"><img src="<?php echo img('twitter_logo.png'); ?>" alt="Twitter" title="Twitter"/></a>
                    <a href="http://emmabandrews.tumblr.com/"><img src="<?php echo img('tumblr_logo_white_blue_64.png'); ?>" alt="Tumblr" title="Tumblr"/></a>
                </div>
            </div>
        </header>

         <div id="primary-nav">
			<ul class="navigation">
				<li><a href="<?php echo url('home');?>">Home</a></li>
				<li><a href="<?php echo url('emma-b-andrews');?>">Emma B. Andrews</a></li>
				<li><a href="<?php echo url('the-diaries');?>">The Diaries</a></li>
				<li><a href="<?php echo url('tools--technology');?>">Tools &amp; Technology</a></li>
				<li><a href="<?php echo url('items');?>?sort_field=Dublin+Core%2CTitle">Emmapedia</a></li>
				<li><a href="<?php echo url('about');?>">About</a></li>
			</ul>
         </div>
  
         <div id="mobile-nav">
			<ul class="navigation">
				<li><a href="<?php echo url('home');?>">Home</a></li>
				<li><a href="<?php echo url('emma-b-andrews');?>">Emma B. Andrews</a></li>
				<li><a href="<?php echo url('the-diaries');?>">The Diaries</a></li>
				<li><a href="<?php echo url('tools--technology');?>">Tools &amp; Technology</a></li>
				<li><a href="<?php echo url('items');?>?sort_field=Dublin+Core%2CTitle">Emmapedia</a></li>
				<li><a href="<?php echo url('about');?>">About</a></li>
			</ul>
         </div>
        
        <?php echo theme_header_image(); ?>
                       
    <div id="content">

<?php fire_plugin_hook('public_content_top', array('view'=>$this)); ?>
