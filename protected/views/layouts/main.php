<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::image(Yii::app()->request->baseUrl."/images/header4.jpg","ballpop"); ?></div>
	</div><!-- header -->


	<div id="mainmenu">
		<?php $this->widget('MbMenu',array(
			'items'=>array(
				array('label'=>'Student', 'url'=>array('/student/admin')),
                                array(  
                                    'label'=>'Lesson', 
                                    'url'=>array('/Lesson/admin'), 
                                    'items'=>array(
                                                        array('label'=>'Individual', 'url'=>array('/lesson/individual')),
                                                        array('label'=>'Group', 'url'=>array('/lesson/group'))
                                                   ),
                                    ),
				array('label'=>'Session', 'url'=>array('/session/admin')),
                                array('label'=>'Group', 'url'=>array('/group/admin')),
                                array('label'=>'Latt', 'url'=>array('/Latt/admin')),
                                array('label'=>'Gatt', 'url'=>array('/Gatt/admin')),
                                array('label'=>'Term', 'url'=>array('/term/admin')),
                                array('label'=>'Week', 'url'=>array('/week/admin')),
				array('label'=>'Staff', 'url'=>array('/staff/admin')),
                                array('label'=>'Subject', 'url'=>array('/Subject/admin')),
                                array('label'=>'Satt', 'url'=>array('/Satt/admin')),
                                array('label'=>'Day', 'url'=>array('/Day/admin')),
                                array('label'=>'Price', 'url'=>array('/Price/admin')),
                                array('label'=>'Paygrade', 'url'=>array('/Paygrade/admin')),
                                array('label'=>'Invoice', 'url'=>array('/Invoice/admin')),
                                array('label'=>'Payslip', 'url'=>array('/Payslip/admin')),                            
                                array('label'=>'Schedule', 'url'=>array('/schedule/display')),
                                array('label'=>'Lookup', 'url'=>array('/lookup/admin')), 
                                array('label'=>'Setting', 'url'=>array('/Setting/admin')), 
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
        <!-- Display current term -->
        <?php 
            if (isset(Yii::app()->session['current_term']))
            {
               $termID = Yii::app()->session['current_term'];
               $getDate = Term::getTermDateStart($termID);
               $str = explode(' ', $getDate);
               $showTerm = CHtml::encode($str[0]);
            echo "<p> Current Term number is : $termID and the start_date is : $showTerm ";
                $getTerm = Term::model()->findByPk($termID);
                $date_start_this_term = new DateTime($getTerm->date_start);
                $date_end_this_term = new DateTime($getTerm->date_end);
                $current_date = new DateTime;
            if($current_date < $date_start_this_term || $current_date > $date_end_this_term)
            {
                echo "this term cant be used now, check date start or date end time";
            } else
            {
                $total_day = getCurrentWeekDayNumber();
                $getDay = showtDayList();
                
                $showDay = $getDay[$total_day[3]];
                echo "Today is week number :$total_day[2] and day is $showDay  ";    
            }


            } 

        ?>   
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
        <!-- Display current term -->

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
