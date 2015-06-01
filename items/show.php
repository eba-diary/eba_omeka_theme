<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div id="primary">
    <h2><?php echo metadata('item', array('Dublin Core','Title')); ?></h2>
	
	<p>
		<strong>Biographical Information:</strong>
		<span class="meta_bio_labels">Birth Date:</span> <?php echo metadata('item', array('Item Type Metadata','Birth Date')); ?>  
		<span class="meta_bio_labels">Death Date:</span> <?php echo metadata('item', array('Item Type Metadata','Death Date')); ?> 
		<span class="meta_bio_labels">Birthplace:</span> <?php echo metadata('item', array('Item Type Metadata','Birthplace')); ?> 
		<span class="meta_bio_labels">Occupation:</span> <?php echo metadata('item', array('Item Type Metadata','Occupation')); ?>
		<span class="meta_bio_labels">Notable Family Members:</span> <?php echo metadata('item', array('Item Type Metadata','Notable Family Members')); ?>
	</p>
	
	<p><strong>Biographical Text:</strong> <?php echo metadata('item', array('Item Type Metadata','Biographical Text')); ?></p>
	
	<p class="metadata_p"><strong>Bibliography:</strong></p>
		<?php $metaBibliography = metadata('item', array('Item Type Metadata','Bibliography'), array('all'=>true)); ?>
		<ul class="metadata_list">
			<?php if ($metaBibliography): ?>
				<?php foreach ($metaBibliography as $bibliography): ?>
					<li><?php echo $bibliography; ?></li>
				<?php endforeach; ?>
			<?php else: ?>
				<li>no information</li>
			<?php endif; ?>
		</ul>
	
	<p class="metadata_p"><strong>Source:</strong></p>
		<?php $metaSources = metadata('item', array('Dublin Core','Source'), array('all'=>true)); ?>
		<ul class="metadata_list">
			<?php if ($metaSources): ?>
				<?php foreach ($metaSources as $source): ?>
					<li><?php echo $source; ?></li>
				<?php endforeach; ?>
			<?php else: ?>
				<li>no information</li>
			<?php endif; ?>
		</ul>

	<p>
		<strong>Citation:</strong><br />
		<?php echo metadata('item','citation',array('no_escape'=>true)); ?>
	</p>

    <p><strong>Files:</strong></p>
    <div id="item-images">
         <?php echo files_for_item(); ?>
    </div>

    <?php fire_plugin_hook('public_items_show', array('view' => $this, 'item' => $item)); ?>

    <ul class="item-pagination navigation">
        <li id="previous-item" class="previous"><?php echo link_to_previous_item_show(); ?></li>
        <li id="next-item" class="next"><?php echo link_to_next_item_show(); ?></li>
    </ul>

</div> <!-- End of Primary. -->

 <?php echo foot(); ?>
