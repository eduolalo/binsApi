<div class="bins view">
<h2><?php echo __('Bin'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bin['User']['id'], array('controller' => 'users', 'action' => 'view', $bin['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bin'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['bin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Category'); ?></dt>
		<dd>
			<?php echo $this->Html->link($bin['Category']['name'], array('controller' => 'categories', 'action' => 'view', $bin['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Works'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['works']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Notes'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['notes']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Exchange'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['exchange']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['owner']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Owner Id'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['owner_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($bin['Bin']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Bin'), array('action' => 'edit', $bin['Bin']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Bin'), array('action' => 'delete', $bin['Bin']['id']), array(), __('Are you sure you want to delete # %s?', $bin['Bin']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Bins'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bin'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
