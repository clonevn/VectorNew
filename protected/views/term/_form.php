<?php
/* @var $this TermController */
/* @var $model Term */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'term-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'date_start'); ?>
                
		<?php 
                // Extension datepicker
                $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                'model' => $model,
                'attribute' => 'date_start',
                'htmlOptions' => array(
                    'size' => '10',         // textField size
                    'maxlength' => '10',    // textField maxlength
                    ),
                )); 
                ?>
                <p class="note">Format: mm/dd/yyyy</p>
		<?php echo $form->error($model,'date_start'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'week_number'); ?>
		<?php echo $form->textField($model,'week_number'); ?>
                <p class="note">Min: 10, max :12</p>
		<?php echo $form->error($model,'week_number'); ?>
	</div>
	<div class="row">
		<?php echo $form->labelEx($model,'room_number'); ?>
		<?php echo $form->textField($model,'room_number'); ?>
                <p class="note">Min: 3, max :7</p>
		<?php echo $form->error($model,'room_number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->