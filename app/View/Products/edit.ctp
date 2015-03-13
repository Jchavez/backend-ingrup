<?php echo $this->Html->script('ckeditor/ckeditor');?>
<div class="products form">
<?php echo $this->Form->create('Product'); ?>
	<fieldset>
		<legend><?php echo __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('main_image');
		echo $this->Form->input('image1');
		echo $this->Form->input('image2');
		echo $this->Form->input('image3');
		echo $this->Form->input('image4');
		echo $this->Form->input('image5');
		echo "<br /><br />";
		echo $this->Form->label('','Datasheet Description');
		echo $this->Form->textarea('datasheet_description',array('class'=>'ckeditor'));

		echo "<br /><br />";
		echo $this->Form->label('','Datasheet Materials');
		echo $this->Form->textarea('datasheet_materials',array('class'=>'ckeditor'));


		echo $this->Form->input('datasheet_features');
		echo $this->Form->input('datasheet_weight');
		echo $this->Form->input('datasheet_dimensions');

		echo "<br /><br />";
		echo $this->Form->label('','Datasheet Packaging');
		echo $this->Form->textarea('datasheet_packaging',array('class'=>'ckeditor'));

		echo "<br /><br />";
		echo $this->Form->label('','Datasheet Storage');
		echo $this->Form->textarea('datasheet_storage',array('class'=>'ckeditor'));

		echo "<br /><br />";
		echo $this->Form->label('','Datasheet Order');
		echo $this->Form->textarea('datasheet_order',array('class'=>'ckeditor'));

		echo "<br /><br />";
		echo $this->Form->label('','Datasheet Colors');
		echo $this->Form->textarea('datasheet_colors',array('class'=>'ckeditor'));
		echo $this->Form->input('category_products_id');
		echo $this->Form->input('category_industries_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Product.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Category Products'), array('controller' => 'category_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Products'), array('controller' => 'category_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Industries'), array('controller' => 'category_industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Industries'), array('controller' => 'category_industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
