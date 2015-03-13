<div class="categoryIndustries view">
<h2><?php echo __('Category Industry'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Description'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Main Image'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['main_image']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image1'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['image1']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image2'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['image2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image3'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['image3']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image4'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['image4']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image5'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['image5']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Description'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_description']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Materials'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_materials']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Features'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_features']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Weight'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_weight']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Dimensions'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_dimensions']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Packaging'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_packaging']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Storage'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_storage']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Order'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_order']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Datasheet Colors'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['datasheet_colors']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Family Industries'); ?></dt>
		<dd>
			<?php echo $this->Html->link($categoryIndustry['FamilyIndustries']['name'], array('controller' => 'family_industries', 'action' => 'view', $categoryIndustry['FamilyIndustries']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($categoryIndustry['CategoryIndustry']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category Industry'), array('action' => 'edit', $categoryIndustry['CategoryIndustry']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category Industry'), array('action' => 'delete', $categoryIndustry['CategoryIndustry']['id']), array(), __('Are you sure you want to delete # %s?', $categoryIndustry['CategoryIndustry']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Category Industries'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category Industry'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Family Industries'), array('controller' => 'family_industries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Family Industries'), array('controller' => 'family_industries', 'action' => 'add')); ?> </li>
	</ul>
</div>
