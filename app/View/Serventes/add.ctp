<div class="container">
	<div class="row">
		<div class="col-md-6">
			<?php echo $this->Form->create('Servente', array('role' => 'form')); ?>
				<fieldset>
					<h2><?php echo __('Novo Servente'); ?></h2>
				<?php
        
		echo $this->Form->input('bi', array('class' => 'form-control', 'label' => 'B.I'));
       		echo $this->Form->input('nome', array('class' => 'form-control', 'label' => 'Nome'));
		echo $this->Form->input('apelido', array('class' => 'form-control', 'label' => 'Apelido'));
		echo $this->Form->input('contacto',array('class' => 'form-control', 'label' => 'Contacto'));
	?>
				</fieldset>

				<p>
                                    
<?php echo $this->Form->end(array('label' => 'Criar Servente', 'class' =>'btn btn-success')); ?>
				</p>
			<div class="btn-group">
			  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
			    <?php echo __('Actions'); ?> <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu">
				<li><?php echo $this->Html->link(__('Listar serventes'), array('action' => 'index')); ?></li>
			    <li class="divider"></li>
			    <li><?php echo $this->Html->link(__('Listar Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?></li>
			    <li><?php echo $this->Html->link(__('Nova Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?></li>
			  </ul>
			</div>
		</div>
	</div>
</div>