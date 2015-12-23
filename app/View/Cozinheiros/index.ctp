<div class="page-header">
	<h2><?php echo __('Cozinheiros'); ?></h2>
</div>

<div class="col-md-12">

	<table class="table table-striped">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('apelido'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($cozinheiros as $cozinheiro): ?>
	<tr>
		<td><?php echo h($cozinheiro['Cozinheiro']['id']); ?>&nbsp;</td>
		<td><?php echo h($cozinheiro['Cozinheiro']['nome']); ?>&nbsp;</td>
		<td><?php echo h($cozinheiro['Cozinheiro']['apelido']); ?>&nbsp;</td>
		<td><?php echo h($cozinheiro['Cozinheiro']['created']); ?>&nbsp;</td>
		<td><?php echo h($cozinheiro['Cozinheiro']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $cozinheiro['Cozinheiro']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $cozinheiro['Cozinheiro']['id']), array('class' => 'btn btn-sm btn-default')); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $cozinheiro['Cozinheiro']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $cozinheiro['Cozinheiro']['id'])); ?>
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
	<nav>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	</nav>