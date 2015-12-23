<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Cozinheiro'); ?>
				<fieldset>
					<legend><?php echo __('Editar Cozinheiro'); ?></legend>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome'));
					echo $this->Form->input('apelido', array('class' => 'form-control', 'label' => 'Apelido'));
					echo $this->Form->input('Prato', array('class' => 'form-control', 'label' => 'Prato'));
				?>
				</fieldset>
				<p>
					<?php echo $this->Form->end(array('label' => 'Editar Cozinheiro', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Cozinheiro.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Cozinheiro.id'))); ?></li>
				<li><?php echo $this->Html->link(__('Listar cozinheiro'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
				<li><?php echo $this->Html->link(__('Listar Prato'), array('controller' => 'prato', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Novo Prato'), array('controller' => 'prato', 'action' => 'add')); ?> </li>
			  </ul>
			</div>

		</div>
	</div>
</div>




<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>


	</ul>
</div>