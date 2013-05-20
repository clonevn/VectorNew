<?php
/* @var $this PayslipController */
/* @var $model Payslip */

$this->breadcrumbs=array(
	'Payslips'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Payslip', 'url'=>array('index')),
	array('label'=>'Create Payslip', 'url'=>array('create')),
	array('label'=>'View Payslip', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Payslip', 'url'=>array('admin')),
);
?>

<h1>Update Payslip <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>