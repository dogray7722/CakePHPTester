<div class="userAddresses view">
<h2><?php echo __('User Address'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($userAddress['User']['id'], array('controller' => 'users', 'action' => 'view', $userAddress['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['address']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address2'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['address2']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('City'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['city']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('State'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['state']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Postal Code'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['postal_code']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($userAddress['UserAddress']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Address'), array('action' => 'edit', $userAddress['UserAddress']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Address'), array('action' => 'delete', $userAddress['UserAddress']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $userAddress['UserAddress']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List User Addresses'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Address'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
