<?php
/* @var $this PayslipController */
/* @var $model Payslip */

$this->breadcrumbs=array(
	'Payslips'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Payslip', 'url'=>array('index')),
	array('label'=>'Create Payslip', 'url'=>array('create')),
	array('label'=>'Update Payslip', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Payslip', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Payslip', 'url'=>array('admin')),
);
?>

<h1>View Payslip #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'term_id',
		'staff_id',
		'date_create',
		'date_start',
		'date_end',
		'status',
		'total',
		'number',
		'grade',
		'notes',
	),
)); ?>
