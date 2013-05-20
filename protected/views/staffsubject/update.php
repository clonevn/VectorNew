<?php
/* @var $this StaffsubjectController */
/* @var $model Staffsubject */

$this->breadcrumbs=array(
	'Staffsubjects'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Staffsubject', 'url'=>array('index')),
	array('label'=>'Create Staffsubject', 'url'=>array('create')),
	array('label'=>'View Staffsubject', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Staffsubject', 'url'=>array('admin')),
);
?>

<h1>Update Staffsubject <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>