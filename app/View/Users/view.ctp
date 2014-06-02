<div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array(), __('Are you sure you want to delete # %s?', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Profiles'), array('controller' => 'profiles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Profile'), array('controller' => 'profiles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bins'), array('controller' => 'bins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Bin'), array('controller' => 'bins', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Profiles'); ?></h3>
	<?php if (!empty($user['Profile'])): ?>
		<dl>
			<dt><?php echo __('Id'); ?></dt>
		<dd>
	<?php echo $user['Profile']['id']; ?>
&nbsp;</dd>
		<dt><?php echo __('Votes'); ?></dt>
		<dd>
	<?php echo $user['Profile']['votes']; ?>
&nbsp;</dd>
		<dt><?php echo __('Points'); ?></dt>
		<dd>
	<?php echo $user['Profile']['points']; ?>
&nbsp;</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
	<?php echo $user['Profile']['user_id']; ?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Profile'), array('controller' => 'profiles', 'action' => 'edit', $user['Profile']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Bins'); ?></h3>
	<?php if (!empty($user['Bin'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Bin'); ?></th>
		<th><?php echo __('Category Id'); ?></th>
		<th><?php echo __('Works'); ?></th>
		<th><?php echo __('Notes'); ?></th>
		<th><?php echo __('Exchange'); ?></th>
		<th><?php echo __('Owner'); ?></th>
		<th><?php echo __('Owner Id'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($user['Bin'] as $bin): ?>
		<tr>
			<td><?php echo $bin['id']; ?></td>
			<td><?php echo $bin['user_id']; ?></td>
			<td><?php echo $bin['name']; ?></td>
			<td><?php echo $bin['bin']; ?></td>
			<td><?php echo $bin['category_id']; ?></td>
			<td><?php echo $bin['works']; ?></td>
			<td><?php echo $bin['notes']; ?></td>
			<td><?php echo $bin['exchange']; ?></td>
			<td><?php echo $bin['owner']; ?></td>
			<td><?php echo $bin['owner_id']; ?></td>
			<td><?php echo $bin['created']; ?></td>
			<td><?php echo $bin['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'bins', 'action' => 'view', $bin['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'bins', 'action' => 'edit', $bin['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'bins', 'action' => 'delete', $bin['id']), array(), __('Are you sure you want to delete # %s?', $bin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Bin'), array('controller' => 'bins', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
