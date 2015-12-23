<div class="pratos view">
<h2><?php echo __('Prato'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($prato['Prato']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($prato['Prato']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($prato['Prato']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Preco'); ?></dt>
		<dd>
			<?php echo h($prato['Prato']['preco']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($prato['Prato']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($prato['Prato']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Categoria Prato'); ?></dt>
		<dd>
			<?php echo $this->Html->link($prato['CategoriaPrato']['categoria'], array('controller' => 'categoria_pratos', 'action' => 'view', $prato['CategoriaPrato']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Prato'), array('action' => 'edit', $prato['Prato']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Prato'), array('action' => 'delete', $prato['Prato']['id']), array(), __('Are you sure you want to delete # %s?', $prato['Prato']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pratos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prato'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categoria Pratos'), array('controller' => 'categoria_pratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Prato'), array('controller' => 'categoria_pratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cozinheiros'), array('controller' => 'cozinheiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cozinheiro'), array('controller' => 'cozinheiros', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Cozinheiros'); ?></h3>
	<?php if (!empty($prato['Cozinheiro'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nome'); ?></th>
		<th><?php echo __('Apelido'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($prato['Cozinheiro'] as $cozinheiro): ?>
		<tr>
			<td><?php echo $cozinheiro['id']; ?></td>
			<td><?php echo $cozinheiro['nome']; ?></td>
			<td><?php echo $cozinheiro['apelido']; ?></td>
			<td><?php echo $cozinheiro['created']; ?></td>
			<td><?php echo $cozinheiro['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'cozinheiros', 'action' => 'view', $cozinheiro['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'cozinheiros', 'action' => 'edit', $cozinheiro['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'cozinheiros', 'action' => 'delete', $cozinheiro['id']), array(), __('Are you sure you want to delete # %s?', $cozinheiro['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cozinheiro'), array('controller' => 'cozinheiros', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
