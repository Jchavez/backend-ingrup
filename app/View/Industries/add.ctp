<div class="industries form">
<?php echo $this->Form->create('Industry'); ?>
	<fieldset>
		<legend><?php echo __('Add Industry'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Industries'), array('action' => 'index')); ?></li>
	</ul>
</div>
