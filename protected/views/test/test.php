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
    echo $total_day[0];
    echo $total_day[1];
    echo $total_day[2];
    echo $total_day[3];
    $getDay = showtDayList();
    $showDay = $getDay[$total_day[3]];
    echo "Today is week number :$total_day[2] and day is $showDay ";
           $a = "a";
        $b = 1;
        $b = (string)$b;
        $a = $a.$b;
        for($i=0;$i<2;$i++)
        {
            $time = strval($i+1);
            $b = $b.'-'.$time;
        }
       //  echo $a;
         echo $b;
   // echo $c = $total_day[1];
  //  echo $a = (int)($total_day[1]/7);
   // echo $b = $total_day[1]-$a*7;
     $maxWeek = 12;
    $slotid = "hello";
    $part1 ="<div id='Tabledemo'>
            <!-- Table section -->
            <table border='1'>
		<!-- Caption tag -->
                <caption> Vector Tutoring";
    for($i=0;$i<$maxWeek;$i++)
    {
       $str = CHtml::link($i+1, array('schedule/display/week/8'));
       $part1 =$part1."<span class ='caption_list'>  ".$str."  </span>";
    }
        $part1 = $part1."</caption>";
            $part2 ="<tr> 
					<!-- colspan tag -->
					<th class='Tablename' colspan='3'></th>
                                        <th class='Tablename'>08:30</th>
                                        <th class='Tablename'>10:00</th>
                                        <th class='Tablename'>11:30</th>
                                        <th class='Tablename'>13:00</th>
                                        <th class='Tablename'>14:30</th>
                                        <th class='Tablename'>16:00</th>
                                        <th class='Tablename'>17:30</th>
                                        <th class='Tablename'>17:30</th>
                                        
            </tr>";
        $html = $part1.$part2;
 
 echo $html;

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