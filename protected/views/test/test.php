<?php
/* @var $this TermController */
/* @var $model Term */

$this->breadcrumbs=array(
	'Terms'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Select Term', 'url'=>array('manage')),
	array('label'=>'Create Term', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#term-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage TESTING</h1>



<?php echo "Test here";
    $total_day = getCurrentWeekDayNumber();
    //echo $total_day[0];
    //echo $total_day[1];
    echo $a = (int)($total_day[0]/$total_day[1]);
    

?>   
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'term-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'date_start',
		'date_end',
		'week_number',
		'status',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_test',array(
	'model'=>$model,
)); ?>

</div><!-- search-form -->