<?php
   $this->Paginator->options(array(
      'update' => '#contenedor-serventes',
      'before' => $this->Js->get("#procesando")->effect('fadeIn', array('buffer' => false)),
      'complete' => $this->Js->get("#procesando")->effect('fadeOut', array('buffer' => false))
   ));
?>

<div id="contenedor-serventes">

<div class="page-header">

	<h2><?php echo __('Serventes'); ?></h2>

</div>

	<div class="col-md-12">
            
            
           <div class="progress oculto" id="procesando">
	  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
	    <span class="sr-only">100% Complete</span>
	  </div>
	</div>
            
            
            
            
            
            
            
	<table class="table table-striped">
	<thead>
            <tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('bi'); ?></th>
			<th><?php echo $this->Paginator->sort('nome'); ?></th>
			<th><?php echo $this->Paginator->sort('apelido'); ?></th>
			<th><?php echo $this->Paginator->sort('contacto'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($serventes as $servente): ?>
	<tr>
		<td><?php echo h($servente['Servente']['id']); ?>&nbsp;</td>
		<td><?php echo h($servente['Servente']['bi']); ?>&nbsp;</td>
		<td><?php echo h($servente['Servente']['nome']); ?>&nbsp;</td>
		<td><?php echo h($servente['Servente']['apelido']); ?>&nbsp;</td>
		<td><?php echo h($servente['Servente']['contacto']); ?>&nbsp;</td>
		<td><?php echo h($servente['Servente']['created']); ?>&nbsp;</td>
		<td><?php echo h($servente['Servente']['modified']); ?>&nbsp;</td>
		<td class="actions">
				<?php echo $this->Html->link(__('View'), array('action' => 'view', $servente['Servente']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $servente['Servente']['id']), array('class' => 'btn btn-sm btn-default')); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $servente['Servente']['id']), array('class' => 'btn btn-sm btn-default'), __('Are you sure you want to delete # %s?', $servente['Servente']['id'])); ?>
			</td>
	</tr>
	<?php endforeach; ?>
		</tbody>
		</table>

	</div>

		<p>
	<?php
		echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
		));
		?>	</p>
		<ul class="pagination">
			<li> <?php echo $this->Paginator->prev('< ' . __('previous'), array('tag' => false), null, array('class' => 'prev disabled')); ?> </li>
			<?php echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentTag' => 'a', 'currentClass' => 'active')); ?>
			<li> <?php echo $this->Paginator->next(__('next') . ' >', array('tag' => false), null, array('class' => 'next disabled')); ?> </li>
		</ul>
	<?php echo $this->Js->writeBuffer(); ?>
</div>