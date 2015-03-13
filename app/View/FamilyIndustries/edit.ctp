<div class="familyIndustries form">
<?php echo $this->Form->create('FamilyIndustry'); ?>
	<fieldset>
		<legend><?php echo __('Edit Family Industry'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		echo $this->Form->input('main_image');
		echo $this->Form->input('industries_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('FamilyIndustry.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('FamilyIndustry.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Family Industries'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industries'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
