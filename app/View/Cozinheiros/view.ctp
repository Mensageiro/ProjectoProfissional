<div class="well">
<h2><?php echo __('Cozinheiro'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($cozinheiro['Cozinheiro']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($cozinheiro['Cozinheiro']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apelido'); ?></dt>
		<dd>
			<?php echo h($cozinheiro['Cozinheiro']['apelido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($cozinheiro['Cozinheiro']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($cozinheiro['Cozinheiro']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
	<li><?php echo $this->Html->link(__('Editar cozinheiro'), array('action' => 'edit', $cozinheiro['Cozinheiro']['id'])); ?> </li>
	<li><?php echo $this->Form->postLink(__('Delete cozinheiro'), array('action' => 'delete', $cozinheiro['Cozinheiro']['id']), array(), __('Are you sure you want to delete # %s?', $cozinheiro['Cozinheiro']['id'])); ?> </li>
	<li><?php echo $this->Html->link(__('Listar cozinheiro'), array('action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Novo cozinheiro'), array('action' => 'add')); ?> </li>
    <li class="divider"></li>
	<li><?php echo $this->Html->link(__('List Pratos'), array('controller' => 'pratos', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('Novo Prato'), array('controller' => 'pratos', 'action' => 'add')); ?> </li>
  </ul>
</div>

<div class="related">
	<h3><?php echo __('Related Platillos'); ?></h3>
	<?php if (!empty($cozinheiro['Prato'])): ?>
	<div class="col-md-12">
		<table class="table table-striped">
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
			<?php foreach ($cozinheiro['Prato'] as $prato): ?>
				<tr>
					<td><?php echo $platillo['id']; ?></td>
					<td><?php echo $platillo['nome']; ?></td>
					<td><?php echo $platillo['descricao']; ?></td>
					<td><?php echo $platillo['preco']; ?></td>
					<td><?php echo $platillo['created']; ?></td>
					<td><?php echo $platillo['modified']; ?></td>
					<td><?php echo $platillo['categoria_prato_id']; ?></td>
					<td class="actions">
						<?php echo $this->Html->link(__('View'), array('controller' => 'pratos', 'action' => 'view', $prato['id']), array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Html->link(__('Edit'), array('controller' => 'pratos', 'action' => 'edit', $prato['id']), array('class' => 'btn btn-sm btn-default')); ?>
						<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pratos', 'action' => 'delete', $prato['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $prato['id'])); ?>
					</td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
<?php endif; ?>

	<div class="actions">
	<?php echo $this->Html->link(__('Novo Prato'), array('controller' => 'pratos', 'action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?>
	</div>
</div>