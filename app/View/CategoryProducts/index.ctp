<div class="categoryProducts index">
	<h2><?php echo __('Category Products'); ?></h2>
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
			<th><?php echo $this->Paginator->sort('family_products_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($categoryProducts as $categoryProduct): ?>
	<tr>
		<td><?php echo h($categoryProduct['CategoryProduct']['id']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['name']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['description']); ?>&nbsp;</td>
		<?php /*
		<td><?php echo h($categoryProduct['CategoryProduct']['main_image']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['image1']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['image2']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['image3']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['image4']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['image5']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_description']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_materials']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_features']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_weight']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_dimensions']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_packaging']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_storage']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_order']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['datasheet_colors']); ?>&nbsp;</td>
		*/ ?>
		<td>
			<?php echo $this->Html->link($categoryProduct['FamilyProducts']['name'], array('controller' => 'family_products', 'action' => 'view', $categoryProduct['FamilyProducts']['id'])); ?>
		</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['created']); ?>&nbsp;</td>
		<td><?php echo h($categoryProduct['CategoryProduct']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoryProduct['CategoryProduct']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoryProduct['CategoryProduct']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoryProduct['CategoryProduct']['id']), array(), __('Are you sure you want to delete # %s?', $categoryProduct['CategoryProduct']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Category Product'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Family Products'), array('controller' => 'family_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Products'), array('controller' => 'family_products', 'action' => 'add')); ?> </li>
	</ul>
</div>
