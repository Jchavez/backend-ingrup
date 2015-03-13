<div class="familyIndustries index">
	<h2><?php echo __('Family Industries'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('main_image'); ?></th>
			<th><?php echo $this->Paginator->sort('industries_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($familyIndustries as $familyIndustry): ?>
	<tr>
		<td><?php echo h($familyIndustry['FamilyIndustry']['id']); ?>&nbsp;</td>
		<td><?php echo h($familyIndustry['FamilyIndustry']['name']); ?>&nbsp;</td>
		<td><?php echo h($familyIndustry['FamilyIndustry']['description']); ?>&nbsp;</td>
		<td><?php echo h($familyIndustry['FamilyIndustry']['main_image']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familyIndustry['Industries']['name'], array('controller' => 'industries', 'action' => 'view', $familyIndustry['Industries']['id'])); ?>
		</td>
		<td><?php echo h($familyIndustry['FamilyIndustry']['created']); ?>&nbsp;</td>
		<td><?php echo h($familyIndustry['FamilyIndustry']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $familyIndustry['FamilyIndustry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $familyIndustry['FamilyIndustry']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $familyIndustry['FamilyIndustry']['id']), array(), __('Are you sure you want to delete # %s?', $familyIndustry['FamilyIndustry']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Family Industry'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Industries'), array('controller' => 'industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Industries'), array('controller' => 'industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
