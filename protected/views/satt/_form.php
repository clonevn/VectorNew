<?php
/* @var $this SattController */
/* @var $model Satt */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'satt-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modify'); ?>
		<?php echo $form->textField($model,'modify'); ?>
		<?php echo $form->error($model,'modify'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paid'); ?>
		<?php echo $form->textField($model,'paid'); ?>
		<?php echo $form->error($model,'paid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pay'); ?>
		<?php echo $form->textField($model,'pay'); ?>
		<?php echo $form->error($model,'pay'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'staff_id'); ?>
		<?php echo $form->textField($model,'staff_id'); ?>
		<?php echo $form->error($model,'staff_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'session_id'); ?>
		<?php echo $form->textField($model,'session_id'); ?>
		<?php echo $form->error($model,'session_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'payslip_id'); ?>
		<?php echo $form->textField($model,'payslip_id'); ?>
		<?php echo $form->error($model,'payslip_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'term_id'); ?>
		<?php echo $form->textField($model,'term_id'); ?>
		<?php echo $form->error($model,'term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_create'); ?>
		<?php echo $form->textField($model,'date_create'); ?>
		<?php echo $form->error($model,'date_create'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_update'); ?>
		<?php echo $form->textField($model,'date_update'); ?>
		<?php echo $form->error($model,'date_update'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'notes'); ?>
		<?php echo $form->textArea($model,'notes',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'notes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->