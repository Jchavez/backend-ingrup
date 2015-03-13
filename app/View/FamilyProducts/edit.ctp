<div class="familyProducts form">
<?php echo $this->Form->create('FamilyProduct'); ?>
	<fieldset>
		<legend><?php echo __('Edit Family Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description', array('rows' => '10', 'cols' => '5'));
		echo $this->Form->input('main_image', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FamilyProduct.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FamilyProduct.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Family Products'), array('action' => 'index')); ?></li>
	</ul>
</div>
