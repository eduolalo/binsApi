<div class="bins index">
	<h2><?php echo __('Bins'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('bin'); ?></th>
			<th><?php echo $this->Paginator->sort('category_id'); ?></th>
			<th><?php echo $this->Paginator->sort('works'); ?></th>
			<th><?php echo $this->Paginator->sort('notes'); ?></th>
			<th><?php echo $this->Paginator->sort('exchange'); ?></th>
			<th><?php echo $this->Paginator->sort('owner'); ?></th>
			<th><?php echo $this->Paginator->sort('owner_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($bins as $bin): ?>
	<tr>
		<td><?php echo h($bin['Bin']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bin['User']['id'], array('controller' => 'users', 'action' => 'view', $bin['User']['id'])); ?>
		</td>
		<td><?php echo h($bin['Bin']['name']); ?>&nbsp;</td>
		<td><?php echo h($bin['Bin']['bin']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($bin['Category']['name'], array('controller' => 'categories', 'action' => 'view', $bin['Category']['id'])); ?>
		</td>
		<td><?php echo h($bin['Bin']['works']); ?>&nbsp;</td>
		<td><?php echo h($bin['Bin']['notes']); ?>&nbsp;</td>
		<td><?php echo h($bin['Bin']['exchange']); ?>&nbsp;</td>
		<td><?php echo h($bin['Bin']['owner']); ?>&nbsp;</td>
		<td><?php echo h($bin['Bin']['owner_id']); ?>&nbsp;</td>
		<td><?php echo h($bin['Bin']['created']); ?>&nbsp;</td>
		<td><?php echo h($bin['Bin']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $bin['Bin']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $bin['Bin']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $bin['Bin']['id']), array(), __('Are you sure you want to delete # %s?', $bin['Bin']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
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
		<li><?php echo $this->Html->link(__('New Bin'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
