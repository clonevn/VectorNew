<?php
/* @var $this WeekController */
/* @var $model Week */

$this->breadcrumbs=array(
	'Weeks'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Week', 'url'=>array('index')),
	array('label'=>'Manage Week', 'url'=>array('admin')),
);
?>

<h1>Create Week</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>