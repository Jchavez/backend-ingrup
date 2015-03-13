<div class="categoryIndustries index">
	<h2><?php echo __('Category Industries'); ?></h2>
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
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<?php /*
			<th><?php echo $this->Paginator->sort('main_image'); ?></th>
			<th><?php echo $this->Paginator->sort('image1'); ?></th>
			<th><?php echo $this->Paginator->sort('image2'); ?></th>
			<th><?php echo $this->Paginator->sort('image3'); ?></th>
			<th><?php echo $this->Paginator->sort('image4'); ?></th>
			<th><?php echo $this->Paginator->sort('image5'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_description'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_materials'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_features'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_weight'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_dimensions'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_packaging'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_storage'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_order'); ?></th>
			<th><?php echo $this->Paginator->sort('datasheet_colors'); ?></th>
			*/ ?>
			<th><?php echo $this->Paginator->sort('family_industries_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categoryIndustries as $categoryIndustry): ?>
	<tr>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['id']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['name']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['description']); ?>&nbsp;</td>
		<?php /*
		<td><?php echo h($categoryIndustry['CategoryIndustry']['main_image']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['image1']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['image2']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['image3']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['image4']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['image5']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_description']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_materials']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_features']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_weight']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_dimensions']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_packaging']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_storage']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_order']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['datasheet_colors']); ?>&nbsp;</td>
		*/ ?>
		<td>
			<?php echo $this->Html->link($categoryIndustry['FamilyIndustries']['name'], array('controller' => 'family_industries', 'action' => 'view', $categoryIndustry['FamilyIndustries']['id'])); ?>
		</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['created']); ?>&nbsp;</td>
		<td><?php echo h($categoryIndustry['CategoryIndustry']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoryIndustry['CategoryIndustry']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoryIndustry['CategoryIndustry']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoryIndustry['CategoryIndustry']['id']), array(), __('Are you sure you want to delete # %s?', $categoryIndustry['CategoryIndustry']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Category Industry'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Family Industries'), array('controller' => 'family_industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Industries'), array('controller' => 'family_industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
