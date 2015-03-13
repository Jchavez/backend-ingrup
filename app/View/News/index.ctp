<div class="news index">
	<h2><?php echo __('News'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>	
		<?php /*
			<th><?php echo $this->Paginator->sort('id'); ?></th>
		*/ ?>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th><?php echo $this->Paginator->sort('description'); ?></th>
			<th><?php echo $this->Paginator->sort('date_publication'); ?></th>
			<?php /*
			<th><?php echo $this->Paginator->sort('link_mp4'); ?></th>
			<th><?php echo $this->Paginator->sort('link_ogv'); ?></th>
			<th><?php echo $this->Paginator->sort('link_webm'); ?></th>
			<th><?php echo $this->Paginator->sort('main_image'); ?></th>
			<th><?php echo $this->Paginator->sort('image1'); ?></th>
			<th><?php echo $this->Paginator->sort('image2'); ?></th>
			<th><?php echo $this->Paginator->sort('image3'); ?></th>
			<th><?php echo $this->Paginator->sort('image4'); ?></th>
			<th><?php echo $this->Paginator->sort('image5'); ?></th>
			*/ ?>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($news as $news): ?>
	<tr>
		<?php /*
		<td><?php echo h($news['News']['id']); ?>&nbsp;</td>
		*/ ?>
		<td><?php echo h($news['News']['title']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['description']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['date_publication']); ?>&nbsp;</td>
		<?php /*
		<td><?php echo h($news['News']['link_mp4']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['link_ogv']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['link_webm']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['main_image']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['image1']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['image2']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['image3']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['image4']); ?>&nbsp;</td>
		<td><?php echo h($news['News']['image5']); ?>&nbsp;</td>
		*/ ?>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $news['News']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $news['News']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $news['News']['id']), array(), __('Are you sure you want to delete # %s?', $news['News']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?></li>
	</ul>
</div>
