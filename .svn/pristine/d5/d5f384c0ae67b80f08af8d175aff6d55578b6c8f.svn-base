<?php
/* @var $this GroupController */
/* @var $model Group */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'group-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_id'); ?>
		<?php echo $form->textField($model,'subject_id'); ?>
		<?php echo $form->error($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'term_id'); ?>
		<?php echo $form->textField($model,'term_id'); ?>
		<?php echo $form->error($model,'term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_id'); ?>
		<?php echo $form->textField($model,'price_id'); ?>
		<?php echo $form->error($model,'price_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type'); ?>
		<?php echo $form->error($model,'type'); ?>
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
		<?php echo $form->labelEx($model,'date_start'); ?>
		<?php echo $form->textField($model,'date_start'); ?>
		<?php echo $form->error($model,'date_start'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_end'); ?>
		<?php echo $form->textField($model,'date_end'); ?>
		<?php echo $form->error($model,'date_end'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'max_session'); ?>
		<?php echo $form->textField($model,'max_session'); ?>
		<?php echo $form->error($model,'max_session'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_session'); ?>
		<?php echo $form->textField($model,'total_session'); ?>
		<?php echo $form->error($model,'total_session'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'remain_session'); ?>
		<?php echo $form->textField($model,'remain_session'); ?>
		<?php echo $form->error($model,'remain_session'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->