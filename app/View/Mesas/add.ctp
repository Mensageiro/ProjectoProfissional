<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Mesa', array('role' => 'form')); ?>
				<fieldset>
					<legend><?php echo __('Adicionar Mesa'); ?></legend>
				<?php
					echo $this->Form->input('serie', array('class' => 'form-control', 'label' => 'Serie'));
					echo $this->Form->input('qtd_lugar', array('class' => 'form-control', 'label' => 'qtd_lugar'));
					echo $this->Form->input('posicao', array('class' => 'form-control', 'label' => 'posicao'));
					echo $this->Form->input('servente_id', array('class' => 'form-control', 'label' => 'servente'));
				?>
				</fieldset>
				<p>
				<?php echo $this->Form->end(array('label' => 'Criar Mesa', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Listar Mesas'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
				<li><?php echo $this->Html->link(__('Listar Serventes'), array('controller' => 'serventes', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Novo Servente'), array('controller' => 'serventes', 'action' => 'add')); ?></li>
			  </ul>
			</div>
		</div>
	</div>
</div>