<div class="well">
<h2><?php echo __('Servente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($servente['Servente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Bi'); ?></dt>
		<dd>
			<?php echo h($servente['Servente']['bi']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nome'); ?></dt>
		<dd>
			<?php echo h($servente['Servente']['nome']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Apelido'); ?></dt>
		<dd>
			<?php echo h($servente['Servente']['apelido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Contacto'); ?></dt>
		<dd>
			<?php echo h($servente['Servente']['contacto']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($servente['Servente']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($servente['Servente']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
    <?php echo __('Actions'); ?> <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
  	<li><?php echo $this->Html->link(__('Edit Servente'), array('action' => 'edit', $servente['Servente']['id'])); ?></li>
  	<li><?php echo $this->Form->postLink(__('Delete Servente'), array('action' => 'delete', $servente['Servente']['id']), array(), __('Are you sure you want to delete # %s?', $servente['Servente']['id'])); ?></li>
  	<li><?php echo $this->Html->link(__('List Servente'), array('action' => 'index')); ?></li>
  	<li><?php echo $this->Html->link(__('New Servente'), array('action' => 'add')); ?></li>
    <li class="divider"></li>
	<li><?php echo $this->Html->link(__('List Mesas'), array('controller' => 'mesas', 'action' => 'index')); ?> </li>
	<li><?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add')); ?></li>
  </ul>
</div>

<div class="related">
	<h3><?php echo __('Related Mesas'); ?></h3>
	<?php if (!empty($servente['Mesa'])): ?>
	<div class="col-md-12">
		<table class="table table-striped">
		<tr>
			<th><?php echo __('Id'); ?></th>
			<th><?php echo __('Serie'); ?></th>
			<th><?php echo __('Qtd Lugar'); ?></th>
			<th><?php echo __('Posicao'); ?></th>
			<th><?php echo __('Created'); ?></th>
			<th><?php echo __('Modified'); ?></th>
			<th><?php echo __('Servente Id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
		</tr>
		<?php foreach ($servente['Mesa'] as $mesa): ?>
			<tr>
				<td><?php echo $mesa['id']; ?></td>
				<td><?php echo $mesa['serie']; ?></td>
				<td><?php echo $mesa['qtd_lugar']; ?></td>
				<td><?php echo $mesa['posicao']; ?></td>
				<td><?php echo $mesa['created']; ?></td>
				<td><?php echo $mesa['modified']; ?></td>
				<td><?php echo $mesa['servente_id']; ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('View'), array('controller' => 'mesas', 'action' => 'view', $mesa['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Html->link(__('Edit'), array('controller' => 'mesas', 'action' => 'edit', $mesa['id']), array('class' => 'btn btn-sm btn-default')); ?>
					<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'mesas', 'action' => 'delete', $mesa['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $mesa['id'])); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</table>
	</div>
<?php endif; ?>

	<div class="actions">
		<?php echo $this->Html->link(__('New Mesa'), array('controller' => 'mesas', 'action' => 'add'), array('class' => 'btn btn-sm btn-default')); ?>
	</div>
</div>