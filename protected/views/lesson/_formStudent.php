<?php
/* @var $this LessonController */
/* @var $model Lesson */
/* @var $form CActiveForm */

?>
<?php
/* 
 * Get current-term in session
 * Put in the hidden field
  */
$current_term_id = Yii::app()->session['current_term'];
?>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'lesson-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model, $current_term_id, $student_id); ?>

	<div class="row">
		<?php echo $form->hiddenField($model,'term_id',array('value'=>$current_term_id)); ?>
		<?php echo $form->error($model,'term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->hiddenField($model,'student_id',array('value'=>$student_id)); ?>
		<?php echo $form->error($model,'term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->textField($model,'group_id'); ?>
		<?php echo $form->error($model,'group_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject_id'); ?>
		<?php echo $form->textField($model,'subject_id'); ?>
		<?php echo $form->error($model,'subject_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'price_id'); ?>
		<?php echo $form->textField($model,'price_id'); ?>
		<?php echo $form->error($model,'price_id'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'invoice_id'); ?>
		<?php echo $form->textField($model,'invoice_id'); ?>
		<?php echo $form->error($model,'invoice_id'); ?>
	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'number'); ?>
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
		<?php echo $form->labelEx($model,'total_price'); ?>
		<?php echo $form->textField($model,'total_price'); ?>
		<?php echo $form->error($model,'total_price'); ?>
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
		<?php echo $form->labelEx($model,'group'); ?>
		<?php echo $form->textField($model,'group'); ?>
		<?php echo $form->error($model,'group'); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->