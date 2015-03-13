<div class="industries form">
<?php echo $this->Form->create('Industry'); ?>
	<fieldset>
		<legend><?php echo __('Edit Industry'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('main_image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Industry.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Industry.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Industries'), array('action' => 'index')); ?></li>
	</ul>
</div>
