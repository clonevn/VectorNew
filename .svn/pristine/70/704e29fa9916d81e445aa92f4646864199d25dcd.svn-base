<?php
/* @var $this SessionController */
/* @var $model Session */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'session-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'term_id'); ?>
		<?php echo $form->textField($model,'term_id'); ?>
		<?php echo $form->error($model,'term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'week_id'); ?>
		<?php echo $form->textField($model,'week_id'); ?>
		<?php echo $form->error($model,'week_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'day_id'); ?>
		<?php echo $form->textField($model,'day_id'); ?>
		<?php echo $form->error($model,'day_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
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
		<?php echo $form->labelEx($model,'date_session'); ?>
		<?php echo $form->textField($model,'date_session'); ?>
		<?php echo $form->error($model,'date_session'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->