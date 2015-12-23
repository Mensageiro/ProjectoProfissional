<div class="categoriaPratos view">
<h2><?php echo __('Categoria Prato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($categoriaPrato['CategoriaPrato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria'); ?></dt>
		<dd>
			<?php echo h($categoriaPrato['CategoriaPrato']['categoria']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Categoria Prato'), array('action' => 'edit', $categoriaPrato['CategoriaPrato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Categoria Prato'), array('action' => 'delete', $categoriaPrato['CategoriaPrato']['id']), array(), __('Are you sure you want to delete # %s?', $categoriaPrato['CategoriaPrato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Pratos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Prato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pratos'), array('controller' => 'pratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prato'), array('controller' => 'pratos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Pratos'); ?></h3>
	<?php if (!empty($categoriaPrato['Prato'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Descricao'); ?></th>
		<th><?php echo __('Preco'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Categoria Prato Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($categoriaPrato['Prato'] as $prato): ?>
		<tr>
			<td><?php echo $prato['id']; ?></td>
			<td><?php echo $prato['nome']; ?></td>
			<td><?php echo $prato['descricao']; ?></td>
			<td><?php echo $prato['preco']; ?></td>
			<td><?php echo $prato['created']; ?></td>
			<td><?php echo $prato['modified']; ?></td>
			<td><?php echo $prato['categoria_prato_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pratos', 'action' => 'view', $prato['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pratos', 'action' => 'edit', $prato['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pratos', 'action' => 'delete', $prato['id']), array(), __('Are you sure you want to delete # %s?', $prato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Prato'), array('controller' => 'pratos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
