<?php
/* @var $this LattController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Latts',
);

$this->menu=array(
	array('label'=>'Create Latt', 'url'=>array('create')),
	array('label'=>'Manage Latt', 'url'=>array('admin')),
);
?>

<h1>Latts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
