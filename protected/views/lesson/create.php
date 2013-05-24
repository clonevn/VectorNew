<?php
/* @var $this LessonController */
/* @var $model Lesson */

$this->breadcrumbs=array(
	'Lessons'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Lesson', 'url'=>array('index')),
	array('label'=>'Manage Lesson', 'url'=>array('admin')),
);
Yii::app()->clientScript->registerScript('search', "
$('.price-button').click(function(){
	$('.price-form').toggle();
	return false;
});
");
?>
<?php if(isset($student_id))
{
    $studentName = Student::getName($student_id);
    echo "<h1>Create Lesson For $studentName </h1>";
    echo $this->renderPartial('_formStudent', array('model'=>$model, 'price'=>$price, 'current_term_id'=>$current_term_id, 'student_id'=>$student_id));
    
} else
{
    echo "<h1>Create Lesson</h1>";
    echo $this->renderPartial('_form', array('model'=>$model, 'price'=>$price, 'current_term_id'=>$current_term_id));
}         
?>
