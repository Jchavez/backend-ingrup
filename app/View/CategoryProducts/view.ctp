<div class="categoryProducts view">
<h2><?php echo __('Category Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Image'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['main_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image1'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['image1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image2'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['image2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image3'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['image3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image4'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['image4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image5'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['image5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Description'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Materials'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_materials']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Features'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_features']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Weight'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Dimensions'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_dimensions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Packaging'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_packaging']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Storage'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_storage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Order'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Colors'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['datasheet_colors']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Products'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryProduct['FamilyProducts']['name'], array('controller' => 'family_products', 'action' => 'view', $categoryProduct['FamilyProducts']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($categoryProduct['CategoryProduct']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category Product'), array('action' => 'edit', $categoryProduct['CategoryProduct']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category Product'), array('action' => 'delete', $categoryProduct['CategoryProduct']['id']), array(), __('Are you sure you want to delete # %s?', $categoryProduct['CategoryProduct']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Products'), array('controller' => 'family_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Products'), array('controller' => 'family_products', 'action' => 'add')); ?> </li>
	</ul>
</div>
