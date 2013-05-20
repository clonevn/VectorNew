<?php
/* @var $this StaffController */
/* @var $data Staff */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paygrade_id')); ?>:</b>
	<?php echo CHtml::encode($data->paygrade_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('contact')); ?>:</b>
	<?php echo CHtml::encode($data->contact); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('address')); ?>:</b>
	<?php echo CHtml::encode($data->address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TFN')); ?>:</b>
	<?php echo CHtml::encode($data->TFN); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('BSB')); ?>:</b>
	<?php echo CHtml::encode($data->BSB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('AN')); ?>:</b>
	<?php echo CHtml::encode($data->AN); ?>
	<br />

	*/ ?>

</div>