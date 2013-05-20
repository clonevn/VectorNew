<?php
/* @var $this PayslipController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Payslips',
);

$this->menu=array(
	array('label'=>'Create Payslip', 'url'=>array('create')),
	array('label'=>'Manage Payslip', 'url'=>array('admin')),
);
?>

<h1>Payslips</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
