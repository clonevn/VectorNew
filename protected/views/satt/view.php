<?php
/* @var $this SattController */
/* @var $model Satt */

$this->breadcrumbs=array(
	'Satts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Satt', 'url'=>array('index')),
	array('label'=>'Create Satt', 'url'=>array('create')),
	array('label'=>'Update Satt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Satt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Satt', 'url'=>array('admin')),
);
?>

<h1>View Satt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'status',
		'modify',
		'paid',
		'pay',
		'staff_id',
		'session_id',
		'payslip_id',
		'latt_id',
		'gatt_id',
		'term_id',
		'date_create',
		'date_update',
		'notes',
	),
)); ?>
