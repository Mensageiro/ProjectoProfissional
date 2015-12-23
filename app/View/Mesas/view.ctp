<div class="well">
<h2><?php echo __('Mesa'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Serie'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['serie']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Qtd Lugar'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['qtd_lugar']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('posicao'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['posicao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($mesa['Mesa']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($mesa['Servente']['nome'], array('controller' => 'serventes', 'action' => 'view', $mesa['Servente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
	<li><?php echo $this->Html->link(__('Editar Mesa'), array('action' => 'edit', $mesa['Mesa']['id'])); ?></li>
	<li><?php echo $this->Form->postLink(__('Delete Mesa'), array('action' => 'delete', $mesa['Mesa']['id']), array(), __('Are you sure you want to delete # %s?', $mesa['Mesa']['id'])); ?></li>
	<li><?php echo $this->Html->link(__('Listar Mesas'), array('action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('Nova Mesa'), array('action' => 'add')); ?></li>
    <li class="divider"></li>
	<li><?php echo $this->Html->link(__('Listar Serventes'), array('controller' => 'serventes', 'action' => 'index')); ?></li>
	<li><?php echo $this->Html->link(__('Nova Servente'), array('controller' => 'serventes', 'action' => 'add')); ?></li>
  </ul>
</div>