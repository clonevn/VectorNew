<?php
/* @var $this SattController */
/* @var $data Satt */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modify')); ?>:</b>
	<?php echo CHtml::encode($data->modify); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paid')); ?>:</b>
	<?php echo CHtml::encode($data->paid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pay')); ?>:</b>
	<?php echo CHtml::encode($data->pay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('staff_id')); ?>:</b>
	<?php echo CHtml::encode($data->staff_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('session_id')); ?>:</b>
	<?php echo CHtml::encode($data->session_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('payslip_id')); ?>:</b>
	<?php echo CHtml::encode($data->payslip_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('term_id')); ?>:</b>
	<?php echo CHtml::encode($data->term_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_create')); ?>:</b>
	<?php echo CHtml::encode($data->date_create); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_update')); ?>:</b>
	<?php echo CHtml::encode($data->date_update); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('notes')); ?>:</b>
	<?php echo CHtml::encode($data->notes); ?>
	<br />

	*/ ?>

</div>