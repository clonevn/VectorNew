<?php
/* @var $this SattController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Satts',
);

$this->menu=array(
	array('label'=>'Create Satt', 'url'=>array('create')),
	array('label'=>'Manage Satt', 'url'=>array('admin')),
);
?>

<h1>Satts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
