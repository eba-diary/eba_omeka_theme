<?php
$pageTitle = "Emmapedia";
echo head(array('title'=>$pageTitle,'bodyclass' => 'items browse'));
?>

<h1><?php echo $pageTitle;?></h1>

<p>An index of individuals mentioned by Emma Andrews in her diary including Egyptologists and archaeologists, members of the gentry, politicians and other well-heeled travelers. The Emmapedia provides historical and biographical information with open source images when available.</p>



<?php echo pagination_links(); ?>

<?php if ($total_results > 0): ?>

<?php endif; ?>

<?php foreach (loop('items') as $item): ?>
<div class="item hentry">
	<?php if (metadata('item', 'has thumbnail')): ?>
        <?php echo link_to_item(item_image('square_thumbnail')); ?>
    <?php else: ?>
		<img src="<?php echo img('thumbnail_blank.jpg'); ?>" alt="No Image" title="No Image"/>
	<?php endif; ?>
	<div class="item_metadata">
		<?php echo link_to_item(metadata('item', array('Dublin Core', 'Title')), array('class'=>'permalink')); ?> 
		Birth Date: <?php echo metadata('item', array('Item Type Metadata','Birth Date')); ?>, 
		Death Date: <?php echo metadata('item', array('Item Type Metadata','Death Date')); ?>,
		Occupation: <?php echo metadata('item', array('Item Type Metadata','Occupation')); ?>
		<?php fire_plugin_hook('public_items_browse_each', array('view' => $this, 'item' =>$item)); ?>
	</div>
</div><!-- end class="item hentry" -->
<?php endforeach; ?>

<?php echo pagination_links(); ?>

<div id="outputs">
    <span class="outputs-label"><?php echo __('Output Formats'); ?></span>
    <?php echo output_format_list(false); ?>
</div>

<?php fire_plugin_hook('public_items_browse', array('items'=>$items, 'view' => $this)); ?>

<?php echo foot(); ?>
