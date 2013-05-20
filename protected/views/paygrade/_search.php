<?php
/* @var $this PaygradeController */
/* @var $model Paygrade */
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
		<?php echo $form->label($model,'term_id'); ?>
		<?php echo $form->textField($model,'term_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'upfront'); ?>
		<?php echo $form->textField($model,'upfront'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bonus'); ?>
		<?php echo $form->textField($model,'bonus'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'code'); ?>
		<?php echo $form->textField($model,'code'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->