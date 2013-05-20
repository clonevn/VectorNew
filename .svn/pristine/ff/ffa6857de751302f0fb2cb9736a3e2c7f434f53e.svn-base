<?php
/* @var $this LattController */
/* @var $model Latt */

$this->breadcrumbs=array(
	'Latts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Latt', 'url'=>array('index')),
	array('label'=>'Create Latt', 'url'=>array('create')),
	array('label'=>'Update Latt', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Latt', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Latt', 'url'=>array('admin')),
);
?>

<h1>View Latt #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'lesson_id',
		'session_id',
		'price',
		'modify',
		'status',
		'group',
		'paid',
		'type',
		'date_create',
		'date_update',
		'notes',
	),
)); ?>
