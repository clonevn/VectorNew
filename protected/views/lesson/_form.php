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
        <?php echo $form->errorSummary($model, $current_term_id); ?>					
    <div class="row">
        <?php echo $form->hiddenField($model,'term_id',array('value'=>$current_term_id)); ?>
        <?php echo $form->error($model,'term_id'); ?>
    </div>   
    <div class="row">
        <?php echo $form->hiddenField($model,'group',array('value'=>1)); ?>
        <?php echo $form->error($model,'group'); ?>
    </div>           
<table border="1">
    <tr> 

        <td class="td_create_lesson">
            <div class="row">
                           <?php echo $form->labelEx($model,'student_id'); ?>
                           <!-- Extension dropdownlist Eselect2        -->
                           <?php $this->widget('ext.select2.ESelect2',array(
                               'model'=>$model,
                               'attribute'=>'student_id',
                               'data'=>Student::listName(),
                               'options'=>array(
                                         'width'=>'200px',
                               ),              
                          )); 
                          ?>
                           <?php echo $form->error($model,'student_id'); ?>
            </div>           
        </td>
        <td class="td_create_lesson">
  
           <div class="row">
           <?php echo $form->labelEx($model,'subject_id'); ?>
           <!-- Extension dropdownlist Eselect2        -->
           <?php $this->widget('ext.select2.ESelect2',array(
                               'model'=>$model,
                               'attribute'=>'subject_id',
                               'data'=>  Subject::listSubject(),
                               'options'=>array(
                                         'width'=>'200px',
                               ),              
                          )); 
          ?>
          <?php echo $form->error($model,'subject_id'); ?>
          </div>
        </td>        
    </tr>
     <tr> 
        <td class="td_create_lesson">
  
           <div class="row">
           <?php echo CHtml::label("Staff", "staff_id") ; ?>
           <!-- Extension dropdownlist Eselect2        -->
            <?php $this->widget('ext.select2.ESelect2',array(
                               'name'=>'staff_id',
                               'data'=> Staff::listName(),
                               'options'=>array(
                                         'width'=>'200px',
                               ),              
                          )); 
              ?>

          </div>
        </td>           
         <td class="td_create_lesson">          
                   <div class="row">	
                       <?php echo CHtml::label("Major", "Lesson_price_id") ; ?>
                       
                            <?php $this->widget('ext.select2.ESelect2',array(
                               'model' => $model,
                               'attribute' => 'price_id',
                               'data'=> showMajorType(),
                               'options'=>array(
                                         'width'=>'200px',
                               ),              
                          )); 
                            //Lesson_price_id
                          ?>
                           <?php echo $form->error($model,'price_id'); ?>                           
                         
                   </div>         
        </td>           
    </tr>
        <tr>
        <td class="td_create_lesson">
                         <div class="row">
                                   <?php echo $form->labelEx($model,'max_session'); ?>
                                   <?php echo $form->textField($model,'max_session'); ?>
                                   <?php echo $form->error($model,'max_session'); ?>
                           </div>
        </td> 
        <td class="td_create_lesson">
                     
        </td>      
    </tr>
    <tr>
        <td class="td_create_lesson">   
            <p> ------------------------ </p>   
        </td>
         <td class="td_create_lesson">   

        </td>       
    </tr>
     <tr>
        <td class="td_create_lesson">   
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
                           <?php echo $form->error($model,'date_start'); ?>
                   </div>   
        </td>
         <td class="td_create_lesson">   
                        <div class="row">
                            <?php echo CHtml::label("Time List", "Lesson_total_session") ; ?>
                           <!-- Extension dropdownlist Eselect2        -->
                           <?php $this->widget('ext.select2.ESelect2',array(
                               'model' => $model,
                               'attribute' => 'total_session',
                               'data'=> showTimeList(),
                               'options'=>array(
                                         'width'=>'30%',
                               ),              
                          )); 
                          ?>
                          <?php echo $form->error($model,'total_session'); ?>
                         </div> 
        </td>       
    </tr>
 
</table>  
            <?php echo CHtml::link('Price List','#',array('class'=>'price-button')); ?>
            <div class="price-form" style="display:none">
            <?php $this->renderPartial('/price/individual',array(
                    'model'=>$price,
            )); ?>  
            </div>        
            <div class="row">
                           <?php echo $form->labelEx($model,'type'); ?>
                           <!-- Extension dropdownlist Eselect2        -->
                           <?php $this->widget('ext.select2.ESelect2',array(
                               'model' => $model,
                               'attribute' => 'type',
                               'data'=>  showScheduleType(),
                               'options'=>array(
                                         'width'=>'200px',
                               ),              
                          )); 
                          ?>
                          <?php echo $form->error($model,'type'); ?>
            </div>      
     <!--Group

                    -->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->