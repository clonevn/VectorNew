<?php
/* @var $this SattController */
/* @var $model Satt */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'modify'); ?>
		<?php echo $form->textField($model,'modify'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'paid'); ?>
		<?php echo $form->textField($model,'paid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pay'); ?>
		<?php echo $form->textField($model,'pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'staff_id'); ?>
		<?php echo $form->textField($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'session_id'); ?>
		<?php echo $form->textField($model,'session_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'payslip_id'); ?>
		<?php echo $form->textField($model,'payslip_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'latt_id'); ?>
		<?php echo $form->textField($model,'latt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gatt_id'); ?>
		<?php echo $form->textField($model,'gatt_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'term_id'); ?>
		<?php echo $form->textField($model,'term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_create'); ?>
		<?php echo $form->textField($model,'date_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'date_update'); ?>
		<?php echo $form->textField($model,'date_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->