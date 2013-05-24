<?php
/* @var $this TermController */
/* @var $model Term */

$this->breadcrumbs=array(
	'Terms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Choose Term', 'url'=>array('manage')),
	array('label'=>'Manage Term', 'url'=>array('admin')),
);
?>

<h1>Create Term</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>