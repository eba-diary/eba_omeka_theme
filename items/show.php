<?php echo head(array('title' => metadata('item', array('Dublin Core', 'Title')),'bodyclass' => 'items show')); ?>
<div id="primary">
    <h2><?php echo metadata('item', array('Dublin Core','Title')); ?></h2>
	
	<p>
		<strong>Birth Date:</strong> <?php echo metadata('item', array('Item Type Metadata','Birth Date')); ?>  
		<strong>Death Date:</strong> <?php echo metadata('item', array('Item Type Metadata','Death Date')); ?> 
		<strong>Birthplace:</strong> <?php echo metadata('item', array('Item Type Metadata','Birthplace')); ?> 
		<strong>Occupation:</strong> <?php echo metadata('item', array('Item Type Metadata','Occupation')); ?>
		<strong>Notable Family Members:</strong> <?php echo metadata('item', array('Item Type Metadata','Notable Family Members')); ?>
	</p>
	
	<p><strong>Biographical Text:</strong> <?php echo metadata('item', array('Item Type Metadata','Biographical Text')); ?></p>
	
	<p>
		<strong>Materials:</strong> <?php echo metadata('item', array('Item Type Metadata','Materials')); ?><br />
		<strong>Bibliography:</strong> <?php echo metadata('item', array('Item Type Metadata','Bibliography')); ?>
	</p>
	
	<p>
		<strong>Source:</strong><br />
		<?php echo metadata('item', array('Dublin Core','Source')); ?>
	</p>

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
