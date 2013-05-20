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

<h1>Manage Scheduling</h1>



<?php   

?>   

<div class='day'> <!-- Monday day 1 -->
            <div class='day-info'>
            <div class='day-info-date'>
           <?php
//echo date_format(new DateTime($week->days[0]->date), "d/m");
?>
            </div>
            <div class='day-info-day'>
            MON
            </div>
            <div class='day-info-room'>
                <div class='day-info-room-space'>
                </div>
                <div class='day-info-room-r1'>
                R1
                </div>
                 <div class='day-info-room-r2'>
                 R2
                </div>
                <div class='day-info-room-r3'>
                R3
                </div>
                <div class='day-info-room-r4'>
                R4
                </div>
                <div class='day-info-room-r5'>
                R5
                </div>
            </div>
            </div>
            
            <div class='day-time'>
                <div class='time-slot'>0830
                </div>
                <div class='time-slot'>0900
                </div>
                <div class='time-slot'>0930
                </div>
                <div class='time-slot'>1000
                </div>
                <div class='time-slot'>1030
                </div>
                <div class='time-slot'>1100
                </div>
                <div class='time-slot'>1130
                </div>
                <div class='time-slot'>1200
                </div>
                <div class='time-slot'>1230
                </div>
                <div class='time-slot'>1300
                </div>
                <div class='time-slot'>1330
                </div>
                <div class='time-slot'>1400
                </div>
                <div class='time-slot'>1430
                </div>
                <div class='time-slot'>1500
                </div>
                <div class='time-slot'>1530
                </div>
                <div class='time-slot'>1600
                </div>
                <div class='time-slot'>1630
                </div>
                <div class='time-slot'>1700
                </div>
                <div class='time-slot'>1730
                </div>
                <div class='time-slot'>1800
                </div>
                <div class='time-slot'>1830
                </div>
                <div class='time-slot'>1900
                </div>
                <div class='time-slot'>1930
                </div>
                <div class='time-slot' style='border:none;'>2000
                </div>        
            </div>
            
            <div class='day-content'>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
<?php

//echo printSessionWeekday($term->weeks[$current_week]->days[0]->sessions);
 
?>
            </div>
        </div>
<!--DAY-->
       <div class='day'> <!-- Tuesday day 1 -->
            <div class='day-info'>
                        <div class='day-info-date'>
                                   <?php
//echo date_format(new DateTime($week->days[1]->date), "d/m");
?>
            </div>
            <div class='day-info-day'>
            TUE
            </div>
            <div class='day-info-room'>
                <div class='day-info-room-space'>
                </div>
                <div class='day-info-room-r1'>
                R1
                </div>
                 <div class='day-info-room-r2'>
                 R2
                </div>
                <div class='day-info-room-r3'>
                R3
                </div>
                                <div class='day-info-room-r4'>
                R4
                </div>
                <div class='day-info-room-r5'>
                R5
                </div>
            </div>

            </div>
            <div class='day-time'>
                <div class='time-slot'>0830
                </div>
                <div class='time-slot'>0900
                </div>
                <div class='time-slot'>0930
                </div>
                <div class='time-slot'>1000
                </div>
                <div class='time-slot'>1030
                </div>
                <div class='time-slot'>1100
                </div>
                <div class='time-slot'>1130
                </div>
                <div class='time-slot'>1200
                </div>
                <div class='time-slot'>1230
                </div>
                <div class='time-slot'>1300
                </div>
                <div class='time-slot'>1330
                </div>
                <div class='time-slot'>1400
                </div>
                <div class='time-slot'>1430
                </div>
                <div class='time-slot'>1500
                </div>
                <div class='time-slot'>1530
                </div>
                <div class='time-slot'>1600
                </div>
                <div class='time-slot'>1630
                </div>
                <div class='time-slot'>1700
                </div>
                <div class='time-slot'>1730
                </div>
                <div class='time-slot'>1800
                </div>
                <div class='time-slot'>1830
                </div>
                <div class='time-slot'>1900
                </div>
                <div class='time-slot'>1930
                </div>
                <div class='time-slot' style='border:none;'>2000
                </div>        
            </div>
            <div class='day-content'>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
<?php
//echo printSessionWeekday($term->weeks[$current_week]->days[1]->sessions);
?>
            </div>
        </div>
<!--DAY-->
       <div class='day'> <!-- Wednesday day 1 -->
            <div class='day-info'>
                        <div class='day-info-date'>
                                   <?php
//echo date_format(new DateTime($week->days[2]->date), "d/m");
?>
            </div>
            <div class='day-info-day'>
            WED
            </div>
            <div class='day-info-room'>
                <div class='day-info-room-space'>
                </div>
                <div class='day-info-room-r1'>
                R1
                </div>
                 <div class='day-info-room-r2'>
                 R2
                </div>
                <div class='day-info-room-r3'>
                R3
                </div>
                                <div class='day-info-room-r4'>
                R4
                </div>
                <div class='day-info-room-r5'>
                R5
                </div>
            </div>

            </div>
            <div class='day-time'>
                <div class='time-slot'>0830
                </div>
                <div class='time-slot'>0900
                </div>
                <div class='time-slot'>0930
                </div>
                <div class='time-slot'>1000
                </div>
                <div class='time-slot'>1030
                </div>
                <div class='time-slot'>1100
                </div>
                <div class='time-slot'>1130
                </div>
                <div class='time-slot'>1200
                </div>
                <div class='time-slot'>1230
                </div>
                <div class='time-slot'>1300
                </div>
                <div class='time-slot'>1330
                </div>
                <div class='time-slot'>1400
                </div>
                <div class='time-slot'>1430
                </div>
                <div class='time-slot'>1500
                </div>
                <div class='time-slot'>1530
                </div>
                <div class='time-slot'>1600
                </div>
                <div class='time-slot'>1630
                </div>
                <div class='time-slot'>1700
                </div>
                <div class='time-slot'>1730
                </div>
                <div class='time-slot'>1800
                </div>
                <div class='time-slot'>1830
                </div>
                <div class='time-slot'>1900
                </div>
                <div class='time-slot'>1930
                </div>
                <div class='time-slot' style='border:none;'>2000
                </div>        
            </div>
            <div class='day-content'>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
<?php
//echo printSessionWeekday($term->weeks[$current_week]->days[2]->sessions);
?>
            </div>
        </div>    
<!--DAY-->
       <div class='day'> <!-- Thursday day 1 -->
            <div class='day-info'>
                        <div class='day-info-date'>
                                   <?php
//echo date_format(new DateTime($week->days[3]->date), "d/m");
?>
            </div>
            <div class='day-info-day'>
            THU
            </div>
            <div class='day-info-room'>
                <div class='day-info-room-space'>
                </div>
                <div class='day-info-room-r1'>
                R1
                </div>
                 <div class='day-info-room-r2'>
                 R2
                </div>
                <div class='day-info-room-r3'>
                R3
                </div>
                                <div class='day-info-room-r4'>
                R4
                </div>
                <div class='day-info-room-r5'>
                R5
                </div>
            </div>

            </div>
            <div class='day-time'>
                <div class='time-slot'>0830
                </div>
                <div class='time-slot'>0900
                </div>
                <div class='time-slot'>0930
                </div>
                <div class='time-slot'>1000
                </div>
                <div class='time-slot'>1030
                </div>
                <div class='time-slot'>1100
                </div>
                <div class='time-slot'>1130
                </div>
                <div class='time-slot'>1200
                </div>
                <div class='time-slot'>1230
                </div>
                <div class='time-slot'>1300
                </div>
                <div class='time-slot'>1330
                </div>
                <div class='time-slot'>1400
                </div>
                <div class='time-slot'>1430
                </div>
                <div class='time-slot'>1500
                </div>
                <div class='time-slot'>1530
                </div>
                <div class='time-slot'>1600
                </div>
                <div class='time-slot'>1630
                </div>
                <div class='time-slot'>1700
                </div>
                <div class='time-slot'>1730
                </div>
                <div class='time-slot'>1800
                </div>
                <div class='time-slot'>1830
                </div>
                <div class='time-slot'>1900
                </div>
                <div class='time-slot'>1930
                </div>
                <div class='time-slot' style='border:none;'>2000
                </div>        
            </div>
            <div class='day-content'>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
<?php
//echo printSessionWeekday($term->weeks[$current_week]->days[3]->sessions);
?>
            </div>
        </div>    
<!--DAY-->
       <div class='day'> <!-- Friday day 1 -->
            <div class='day-info'>
                        <div class='day-info-date'>
                                   <?php
//echo date_format(new DateTime($week->days[4]->date), "d/m");
?>
            </div>
            <div class='day-info-day'>
            FRI
            </div>
            <div class='day-info-room'>
                <div class='day-info-room-space'>
                </div>
                <div class='day-info-room-r1'>
                R1
                </div>
                 <div class='day-info-room-r2'>
                 R2
                </div>
                <div class='day-info-room-r3'>
                R3
                </div>
                                <div class='day-info-room-r4'>
                R4
                </div>
                <div class='day-info-room-r5'>
                R5
                </div>
            </div>

            </div>
            <div class='day-time'>
                <div class='time-slot'>0830
                </div>
                <div class='time-slot'>0900
                </div>
                <div class='time-slot'>0930
                </div>
                <div class='time-slot'>1000
                </div>
                <div class='time-slot'>1030
                </div>
                <div class='time-slot'>1100
                </div>
                <div class='time-slot'>1130
                </div>
                <div class='time-slot'>1200
                </div>
                <div class='time-slot'>1230
                </div>
                <div class='time-slot'>1300
                </div>
                <div class='time-slot'>1330
                </div>
                <div class='time-slot'>1400
                </div>
                <div class='time-slot'>1430
                </div>
                <div class='time-slot'>1500
                </div>
                <div class='time-slot'>1530
                </div>
                <div class='time-slot'>1600
                </div>
                <div class='time-slot'>1630
                </div>
                <div class='time-slot'>1700
                </div>
                <div class='time-slot'>1730
                </div>
                <div class='time-slot'>1800
                </div>
                <div class='time-slot'>1830
                </div>
                <div class='time-slot'>1900
                </div>
                <div class='time-slot'>1930
                </div>
                <div class='time-slot' style='border:none;'>2000
                </div>        
            </div>
            <div class='day-content'>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
                <div class='session'>
                </div>
<?php
//echo printSessionWeekday($term->weeks[$current_week]->days[4]->sessions);
?>
            </div>
        </div>   
<!--DAY-->
       <div class='day'> <!-- Satruday day 1 -->
            <div class='day-info'>
                        <div class='day-info-date'>
                                   <?php
//echo date_format(new DateTime($week->days[5]->date), "d/m");
?>
            </div>
            <div class='day-info-day'>
            SAR
            </div>
            <div class='day-info-room'>
                <div class='day-info-room-space'>
                </div>
                <div class='day-info-room-r1'>
                R1
                </div>
                 <div class='day-info-room-r2'>
                 R2
                </div>
                <div class='day-info-room-r3'>
                R3
                </div>
                                <div class='day-info-room-r4'>
                R4
                </div>
                <div class='day-info-room-r5'>
                R5
                </div>
            </div>

            </div>
            <div class='day-time'>
                <div class='time-slot'>0830
                </div>
                <div class='time-slot'>0900
                </div>
                <div class='time-slot'>0930
                </div>
                <div class='time-slot'>1000
                </div>
                <div class='time-slot'>1030
                </div>
                <div class='time-slot'>1100
                </div>
                <div class='time-slot'>1130
                </div>
                <div class='time-slot'>1200
                </div>
                <div class='time-slot'>1230
                </div>
                <div class='time-slot'>1300
                </div>
                <div class='time-slot'>1330
                </div>
                <div class='time-slot'>1400
                </div>
                <div class='time-slot'>1430
                </div>
                <div class='time-slot'>1500
                </div>
                <div class='time-slot'>1530
                </div>
                <div class='time-slot'>1600
                </div>
                <div class='time-slot'>1630
                </div>
                <div class='time-slot'>1700
                </div>
                <div class='time-slot'>1730
                </div>
                <div class='time-slot'>1800
                </div>
                <div class='time-slot'>1830
                </div>
                <div class='time-slot'>1900
                </div>
                <div class='time-slot'>1930
                </div>
                <div class='time-slot' style='border:none;'>2000
                </div>        
            </div>
<?php
//echo printSessionWeekend($term->weeks[$current_week]->days[5]->sessions);
?>
        </div>   
 <!--DAY-->
       <div class='day-last'> <!-- Sunday day 1 -->
            <div class='day-info'>
                        <div class='day-info-date'>
                                   <?php
//echo date_format(new DateTime($week->days[6]->date), "d/m");
?>
            </div>
            <div class='day-info-day'>
            SUN
            </div>
            <div class='day-info-room'>
                <div class='day-info-room-space'>
                </div>
                <div class='day-info-room-r1'>
                R1
                </div>
                 <div class='day-info-room-r2'>
                 R2
                </div>
                <div class='day-info-room-r3'>
                R3
                </div>
                                <div class='day-info-room-r4'>
                R4
                </div>
                <div class='day-info-room-r5'>
                R5
                </div>
            </div>

            </div>
            <div class='day-time'>
                <div class='time-slot'>0830
                </div>
                <div class='time-slot'>0900
                </div>
                <div class='time-slot'>0930
                </div>
                <div class='time-slot'>1000
                </div>
                <div class='time-slot'>1030
                </div>
                <div class='time-slot'>1100
                </div>
                <div class='time-slot'>1130
                </div>
                <div class='time-slot'>1200
                </div>
                <div class='time-slot'>1230
                </div>
                <div class='time-slot'>1300
                </div>
                <div class='time-slot'>1330
                </div>
                <div class='time-slot'>1400
                </div>
                <div class='time-slot'>1430
                </div>
                <div class='time-slot'>1500
                </div>
                <div class='time-slot'>1530
                </div>
                <div class='time-slot'>1600
                </div>
                <div class='time-slot'>1630
                </div>
                <div class='time-slot'>1700
                </div>
                <div class='time-slot'>1730
                </div>
                <div class='time-slot'>1800
                </div>
                <div class='time-slot'>1830
                </div>
                <div class='time-slot'>1900
                </div>
                <div class='time-slot'>1930
                </div>
                <div class='time-slot' style='border:none;'>2000
                </div>        
            </div>
            <div class='day-content'>
                <?php
//echo printSessionWeekend($term->weeks[$current_week]->days[6]->sessions);
?>
            </div>
        </div>      


</div><!-- search-form -->