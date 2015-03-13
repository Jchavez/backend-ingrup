<div class="familyProducts view">
<h2><?php echo __('Family Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familyProduct['FamilyProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($familyProduct['FamilyProduct']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($familyProduct['FamilyProduct']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Image'); ?></dt>
		<dd>
			<?php echo h($familyProduct['FamilyProduct']['main_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($familyProduct['FamilyProduct']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($familyProduct['FamilyProduct']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Family Product'), array('action' => 'edit', $familyProduct['FamilyProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Product'), array('action' => 'delete', $familyProduct['FamilyProduct']['id']), array(), __('Are you sure you want to delete # %s?', $familyProduct['FamilyProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Product'), array('action' => 'add')); ?> </li>
	</ul>
</div>
