<div class="news view">
<h2><?php echo __('News'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($news['News']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($news['News']['title']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($news['News']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Publication'); ?></dt>
		<dd>
			<?php echo h($news['News']['date_publication']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Mp4'); ?></dt>
		<dd>
			<?php echo h($news['News']['link_mp4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Ogv'); ?></dt>
		<dd>
			<?php echo h($news['News']['link_ogv']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Link Webm'); ?></dt>
		<dd>
			<?php echo h($news['News']['link_webm']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Image'); ?></dt>
		<dd>
			<?php echo h($news['News']['main_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image1'); ?></dt>
		<dd>
			<?php echo h($news['News']['image1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image2'); ?></dt>
		<dd>
			<?php echo h($news['News']['image2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image3'); ?></dt>
		<dd>
			<?php echo h($news['News']['image3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image4'); ?></dt>
		<dd>
			<?php echo h($news['News']['image4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image5'); ?></dt>
		<dd>
			<?php echo h($news['News']['image5']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit News'), array('action' => 'edit', $news['News']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete News'), array('action' => 'delete', $news['News']['id']), array(), __('Are you sure you want to delete # %s?', $news['News']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List News'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New News'), array('action' => 'add')); ?> </li>
	</ul>
</div>
