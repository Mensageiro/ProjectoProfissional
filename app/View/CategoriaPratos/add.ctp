<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('CategoriaPrato'); ?>
				<fieldset>
					<legend><?php echo __('Nova Categoria Prato'); ?></legend>
				<?php
					echo $this->Form->input('categoria', array('class' => 'form-control', 'label' => 'Categoria'));
				?>
				</fieldset>
				<p>
				<?php echo $this->Form->end(array('label' => 'Criar Categoria', 'class' =>'btn btn-success')); ?>
				</p>

			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Listar Categoria Pratos'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
				<li><?php echo $this->Html->link(__('Listar Pratos'), array('controller' => 'pratos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Novo Prato'), array('controller' => 'pratos', 'action' => 'add')); ?> </li>
			  </ul>
			</div>
		</div>
	</div>
</div>