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
	<?php echo $form->errorSummary($model);  ?>
	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>		
                <!-- Extension dropdownlist Eselect2        -->
                
                <?php $this->widget('ext.select2.ESelect2',array(
                    'model'=>$model,
                    'attribute'=>'id',
                    'data'=>Term::getTermDateAndNumberList(),
                    'options'=>array(
                              'width'=>'50%',
                              'placeholder'=>'Search for term',
                              'allowClear'=>true,
                    ),              
               )); 
               ?>
                <?php echo $form->error($model,'id'); ?>
	</div>       
	<div class="row buttons">
		<?php echo CHtml::submitButton('Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

