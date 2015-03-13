<?php echo $this->Html->script('ckeditor/ckeditor');?>
<div class="categoryIndustries form">
<?php echo $this->Form->create('CategoryIndustry'); ?>
	<fieldset>
		<legend><?php echo __('Add Category Industry'); ?></legend>
	<?php
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
		echo $this->Form->input('datasheet_weight', array('type' =>  'file'));
		echo $this->Form->input('datasheet_dimensions', array('type' =>  'file'));

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

		echo $this->Form->input('family_industries_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Category Industries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Family Industries'), array('controller' => 'family_industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Industries'), array('controller' => 'family_industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
