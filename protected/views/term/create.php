<?php
/* @var $this TermController */
/* @var $model Term */

$this->breadcrumbs=array(
	'Terms'=>array('index'),
	'Create',
);

$this->menu=array(

	array('label'=>'Manage Term', 'url'=>array('admin')),
);
?>

<h1>Create Term</h1>
<?php 
if(isset($date1))
    echo $date1;
    
?>
<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>