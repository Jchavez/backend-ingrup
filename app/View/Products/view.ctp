<div class="products view">
<h2><?php echo __('Product'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($product['Product']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($product['Product']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Image'); ?></dt>
		<dd>
			<?php echo h($product['Product']['main_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image1'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image2'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image3'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image4'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image5'); ?></dt>
		<dd>
			<?php echo h($product['Product']['image5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Description'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Materials'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_materials']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Features'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_features']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Weight'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Dimensions'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_dimensions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Packaging'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_packaging']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Storage'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_storage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Order'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Colors'); ?></dt>
		<dd>
			<?php echo h($product['Product']['datasheet_colors']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Products'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['CategoryProducts']['name'], array('controller' => 'category_products', 'action' => 'view', $product['CategoryProducts']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category Industries'); ?></dt>
		<dd>
			<?php echo $this->Html->link($product['CategoryIndustries']['name'], array('controller' => 'category_industries', 'action' => 'view', $product['CategoryIndustries']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($product['Product']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($product['Product']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product'), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Product'), array('action' => 'delete', $product['Product']['id']), array(), __('Are you sure you want to delete # %s?', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Products'), array('controller' => 'category_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Products'), array('controller' => 'category_products', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Industries'), array('controller' => 'category_industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Industries'), array('controller' => 'category_industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
