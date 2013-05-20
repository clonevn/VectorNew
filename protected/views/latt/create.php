<?php
/* @var $this LattController */
/* @var $model Latt */

$this->breadcrumbs=array(
	'Latts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Latt', 'url'=>array('index')),
	array('label'=>'Manage Latt', 'url'=>array('admin')),
);
?>

<h1>Create Latt</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>