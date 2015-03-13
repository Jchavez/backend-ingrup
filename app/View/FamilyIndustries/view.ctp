<div class="familyIndustries view">
<h2><?php echo __('Family Industry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($familyIndustry['FamilyIndustry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($familyIndustry['FamilyIndustry']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($familyIndustry['FamilyIndustry']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Image'); ?></dt>
		<dd>
			<?php echo h($familyIndustry['FamilyIndustry']['main_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Industries'); ?></dt>
		<dd>
			<?php echo $this->Html->link($familyIndustry['Industries']['name'], array('controller' => 'industries', 'action' => 'view', $familyIndustry['Industries']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($familyIndustry['FamilyIndustry']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($familyIndustry['FamilyIndustry']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Family Industry'), array('action' => 'edit', $familyIndustry['FamilyIndustry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Family Industry'), array('action' => 'delete', $familyIndustry['FamilyIndustry']['id']), array(), __('Are you sure you want to delete # %s?', $familyIndustry['FamilyIndustry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Industries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Industry'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industries'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
