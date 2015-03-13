<div class="news form">
<?php echo $this->Form->create('News'); ?>
	<fieldset>
		<legend><?php echo __('Edit News'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('description', array('rows' => '10', 'cols' => '5'));
		echo $this->Form->input('date_publication');
		echo $this->Form->input('link_mp4');
		echo $this->Form->input('link_ogv');
		echo $this->Form->input('link_webm');
		echo $this->Form->input('main_image', array('type' => 'file'));
		echo $this->Form->input('image1', array('type' => 'file'));
		echo $this->Form->input('image2', array('type' => 'file'));
		echo $this->Form->input('image3', array('type' => 'file'));
		echo $this->Form->input('image4', array('type' => 'file'));
		echo $this->Form->input('image5', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('News.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('News.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?></li>
	</ul>
</div>
