<div class="pratos index">
	<h2><?php echo __('Pratos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('descricao'); ?></th>
			<th><?php echo $this->Paginator->sort('preco'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('categoria_prato_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($pratos as $prato): ?>
	<tr>
		<td><?php echo h($prato['Prato']['id']); ?>&nbsp;</td>
		<td><?php echo h($prato['Prato']['nome']); ?>&nbsp;</td>
		<td><?php echo h($prato['Prato']['descricao']); ?>&nbsp;</td>
		<td><?php echo h($prato['Prato']['preco']); ?>&nbsp;</td>
		<td><?php echo h($prato['Prato']['created']); ?>&nbsp;</td>
		<td><?php echo h($prato['Prato']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($prato['CategoriaPrato']['categoria'], array('controller' => 'categoria_pratos', 'action' => 'view', $prato['CategoriaPrato']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $prato['Prato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $prato['Prato']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $prato['Prato']['id']), array(), __('Are you sure you want to delete # %s?', $prato['Prato']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Prato'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Pratos'), array('controller' => 'categoria_pratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Prato'), array('controller' => 'categoria_pratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cozinheiros'), array('controller' => 'cozinheiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cozinheiro'), array('controller' => 'cozinheiros', 'action' => 'add')); ?> </li>
	</ul>
</div>
