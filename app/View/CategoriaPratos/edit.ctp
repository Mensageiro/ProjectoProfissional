<div class="categoriaPratos form">
<?php echo $this->Form->create('CategoriaPrato'); ?>
	<fieldset>
		<legend><?php echo __('Edit Categoria Prato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('categoria');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('CategoriaPrato.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('CategoriaPrato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categoria Pratos'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Pratos'), array('controller' => 'pratos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Prato'), array('controller' => 'pratos', 'action' => 'add')); ?> </li>
	</ul>
</div>
