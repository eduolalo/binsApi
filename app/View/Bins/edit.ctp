<div class="bins form">
<?php echo $this->Form->create('Bin'); ?>
	<fieldset>
		<legend><?php echo __('Edit Bin'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('name');
		echo $this->Form->input('bin');
		echo $this->Form->input('category_id');
		echo $this->Form->input('works');
		echo $this->Form->input('notes');
		echo $this->Form->input('exchange');
		echo $this->Form->input('owner');
		echo $this->Form->input('owner_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Bin.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Bin.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Bins'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('controller' => 'categories', 'action' => 'add')); ?> </li>
	</ul>
</div>
