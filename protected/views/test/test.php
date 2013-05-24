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



<?php $price=  Price::model()->findAllByAttributes(array('term_id'=>'0'));
foreach($price as $item)
{
    $save = new Price;
    $save->rate = $item->rate;
    $save->code = $item->code;
    $save->name = $item->name;
    $save->term_id = 1;
    if(!$save->save())
        throw new CHttpException("cant save");
}

?>   

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_test',array(
	'model'=>$model,
)); ?>

</div><!-- search-form -->