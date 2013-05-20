<?php
/* @var $this StaffsubjectController */
/* @var $model Staffsubject */

$this->breadcrumbs=array(
	'Staffsubjects'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Staffsubject', 'url'=>array('index')),
	array('label'=>'Create Staffsubject', 'url'=>array('create')),
	array('label'=>'Update Staffsubject', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Staffsubject', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Staffsubject', 'url'=>array('admin')),
);
?>

<h1>View Staffsubject #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'subject_id',
		'staff_id',
	),
)); ?>
