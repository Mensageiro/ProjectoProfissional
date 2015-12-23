<div class="pratos form">
<?php echo $this->Form->create('Prato'); ?>
	<fieldset>
		<legend><?php echo __('Edit Prato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nome');
		echo $this->Form->input('descricao');
		echo $this->Form->input('preco');
		echo $this->Form->input('categoria_prato_id');
		echo $this->Form->input('Cozinheiro');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Prato.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Prato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pratos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Pratos'), array('controller' => 'categoria_pratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Categoria Prato'), array('controller' => 'categoria_pratos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Cozinheiros'), array('controller' => 'cozinheiros', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cozinheiro'), array('controller' => 'cozinheiros', 'action' => 'add')); ?> </li>
	</ul>
</div>
