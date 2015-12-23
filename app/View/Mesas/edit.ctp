<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Mesa', array('role' => 'form', 'novalidate')); ?>
				<fieldset>
					<h2><?php echo __('Editar Mesa'); ?></h2>
				<?php
					echo $this->Form->input('id');
					echo $this->Form->input('serie', array('class' => 'form-control', 'label' => 'Serie'));
					echo $this->Form->input('qtd_lugar', array('class' => 'form-control', 'label' => 'qtd_lugar'));
					echo $this->Form->input('posicao', array('class' => 'form-control', 'label' => 'Posicao'));
					echo $this->Form->input('servente_id', array('class' => 'form-control', 'label' => 'Servente'));
				?>
				</fieldset>
				<p>
					<?php echo $this->Form->end(array('label' => 'Editar Mesa', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
			    <li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Mesa.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Mesa.id'))); ?></li>
			    <li><?php echo $this->Html->link(__('Listar Mesas'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
			    <li><?php echo $this->Html->link(__('Listar Serventes'), array('controller' => 'serventes', 'action' => 'index')); ?></li>
			    <li><?php echo $this->Html->link(__('New Mesero'), array('controller' => 'serventes', 'action' => 'add')); ?></li>
			  </ul>
			</div>

		</div>
	</div>
</div>