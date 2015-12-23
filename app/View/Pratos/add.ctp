<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Prato', array('type' => 'file',  'novalidate' => 'novalidate')); ?>
				<fieldset>
					<legend><?php echo __('Novo Prato'); ?></legend>
				<?php
					echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome'));
					echo $this->Form->input('descricao', array('class' => 'form-control', 'label' => 'Descricao'));
					echo $this->Form->input('preco', array('class' => 'form-control', 'label' => 'Preco'));
					echo $this->Form->input('foto', array('type' => 'file', 'label' => 'Foto', 'id' => 'foto', 'class' => 'file', 'data-show-upload' => 'false', 'data-show-caption' => 'true'));
					echo $this->Form->input('foto_dir', array('type' => 'hidden'));
					echo $this->Form->input('categoria_prato_id', array('class' => 'form-control', 'label' => 'Categoria'));
					echo $this->Form->input('Cozinheiro', array('class' => 'form-control', 'label' => 'Cozinheiro'));
				?>
				</fieldset>
				<p>
				<?php echo $this->Form->end(array('label' => 'Criar Prato', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Listar Pratos'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
				<li><?php echo $this->Html->link(__('Listar Categoria Pratos'), array('controller' => 'categoria_pratos', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Nova Categoria Prato'), array('controller' => 'categoria_pratos', 'action' => 'add')); ?> </li>
				<li class="divider"></li>
				<li><?php echo $this->Html->link(__('Listar Cozinheiros'), array('controller' => 'cozinheiros', 'action' => 'index')); ?> </li>
				<li><?php echo $this->Html->link(__('Novo Cozinheiro'), array('controller' => 'cozinheiros', 'action' => 'add')); ?> </li>
			  </ul>
			</div>
		</div>
	</div>
</div>