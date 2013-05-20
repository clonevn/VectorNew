<?php
/* @var $this TermController */
/* @var $model Term */

$this->breadcrumbs=array(
	'Terms'=>array('index'),
	$model->id,
);

$this->menu=array(

	array('label'=>'Create Term', 'url'=>array('create')),

	array('label'=>'Manage Term', 'url'=>array('admin')),
);
?>

<h1>View Term #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'date_start',
		'date_end',
		'week_number',
		'status',
	),
)); ?>
