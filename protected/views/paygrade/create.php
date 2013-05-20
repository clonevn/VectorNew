<?php
/* @var $this PaygradeController */
/* @var $model Paygrade */

$this->breadcrumbs=array(
	'Paygrades'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Paygrade', 'url'=>array('index')),
	array('label'=>'Manage Paygrade', 'url'=>array('admin')),
);
?>

<h1>Create Paygrade</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>