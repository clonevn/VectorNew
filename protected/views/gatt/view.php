<?php
/* @var $this GattController */
/* @var $model Gatt */

$this->breadcrumbs=array(
	'Gatts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Gatt', 'url'=>array('index')),
	array('label'=>'Create Gatt', 'url'=>array('create')),
	array('label'=>'Update Gatt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Gatt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Gatt', 'url'=>array('admin')),
);
?>

<h1>View Gatt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'group_id',
		'session_id',
		'type',
		'status',
		'mark',
		'date_create',
		'date_update',
		'notes',
	),
)); ?>
