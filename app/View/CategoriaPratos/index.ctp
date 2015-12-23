<div class="page-header">
	<h2><?php echo __('Categoria Pratos'); ?></h2>
</div>
<div class="col-md-12">

	<table class="table table-striped">
		<thead>
		<tr>
				<th><?php echo $this->Paginator->sort('id'); ?></th>
				<th><?php echo $this->Paginator->sort('categoria'); ?></th>
				<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($categoriaPratos as $categoriaPrato): ?>
		<tr>
			<td><?php echo h($categoriaPrato['CategoriaPrato']['id']); ?>&nbsp;</td>
			<td><?php echo h($categoriaPrato['CategoriaPrato']['categoria']); ?>&nbsp;</td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $categoriaPrato['CategoriaPrato']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $categoriaPrato['CategoriaPrato']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $categoriaPrato['CategoriaPrato']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $categoriaPrato['CategoriaPrato']['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
		</tbody>
	</table>
</div>
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