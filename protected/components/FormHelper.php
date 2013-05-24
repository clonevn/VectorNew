<?php
function getYesNo()
{
    return array(0 => 'No', 1 => 'Yes');
}

function getGenderList()
{
    return array(0 => 'Male', 1 => 'Female');
}

function getStaffList()
{
     $criteria = new CDbCriteria();
    $criteria->compare('term_id',Term::model()->getLatest()->id);
    $staffs = Staff::model()->findAll($criteria);
    $list = CHtml::listData($staffs, 'id', function ($student)
    {
        return CHtml::encode($student->id . ' ' . $student->name); });
    return $list;
    //<?php echo $form->dropDownList($model,'requester_id',$model->project->getUserOptions());
    //

}
function getStudentList()
{   
    
    $criteria = new CDbCriteria();
    $criteria->compare('term_id',Term::model()->getLatest()->id);
    $students = Student::model()->findAll($criteria);
    $list = CHtml::listData($students, 'id', function ($student)
    {
        return CHtml::encode($student->name); }
    );
    return $list;
    //<?php echo $form->dropDownList($model,'requester_id',$model->project->getUserOptions());
    //

}


function getDayList()
{
    return array(
        1 => "Monday",
        2 => "Tuesday",
        3 => "Wednesday",
        4 => "Thursday",
        5 => "Friday",
        6 => "Sartuday",
        7 => "Sunday");
    //<?php echo $form->dropDownList($model,'requester_id',$model->project->getUserOptions());
    //
}
function getRoomList()
{
    return array(
        1 => "Room 1",
        2 => "Room 2",
        3 => "Room 3",
        4 => "Room 4",
        5 => "Room 5",
        );
    //<?php echo $form->dropDownList($model,'requester_id',$model->project->getUserOptions());
    //

}


function getPayGradeList()
{
    $paygrade = Paygrade::model()->findAll();
    $list = CHtml::listData($paygrade, 'id', 'name');
    return $list;
}

	/**
	 * Return shorten list of day
         * @return array of string

	 */
function getShortenListDay()
{
    $list = array("MON", "TUE", "WED", "THU", "FRI", "SAT", "SUN");
    return $list;
}
	/**
	 * Return the current week number based on the current term
         * @return integer

	 */
function getCurrentWeekDayNumber()
{
    $arr = array();
    $current = new DateTime();
    $term_id = Yii::app()->session['current_term'];
    $datetime1 = new DateTime(Term::getTermDateStart($term_id));
    $datetime2 = new DateTime(Term::getTermDateEnd($term_id));
    $interval1 = $datetime1->diff($datetime2);
    $interval2 = $datetime1->diff($current);
    $arr[] = $interval1->format('%a');
    $arr[] = $interval2->format('%a');    
    $num = (int)($arr[1]/7);
    $arr[] = $num +1;
    $arr[] = $arr[1]-$num*7;
    return $arr;  
    // 0- total days of term
    // 1- days start->current
    // 2- week number
    // 3- day number
}
	/**
	 * Return the current week number based on the current term
         * @return integer

	 */
function getWeekDayNumberOfDate($date)
{
    $arr = array();
    $datecheck = new DateTime($date);
    $term_id = Yii::app()->session['current_term'];
    $datetime1 = new DateTime(Term::getTermDateStart($term_id));
    $datetime2 = new DateTime(Term::getTermDateEnd($term_id));
    $interval1 = $datetime1->diff($datetime2);
    $interval2 = $datetime1->diff($datecheck);
    $arr[] = $interval1->format('%a');
    $arr[] = $interval2->format('%a');    
    $num = (int)($arr[1]/7);
    $arr[] = $num +1;
    $arr[] = (int)($arr[1]-$num*7);
    return $arr;  
    // 0- total days of term
    // 1- days start->current
    // 2- week number
    // 3- day number
}
	/**
	 * Return the list days of week
         * @return string array

	 */
function showtDayList()
{
    return array(
        0 => "MON",
        1 => "TUE",
        2 => "WED",
        3 => "THU",
        4 => "FRI",
        5 => "SAT",
        6 => "SUN");
}
	/**
	 * Return the select group type
         * @return string array

	 */
function showtGroupType()
{
    return array(
        1 => "Individual",
        2 => "Group");
}
	/**
	 * Return the select group type
         * @return string array

	 */
function showtLessonType()
{
    return array(
        1 => "Package",
        2 => "Usual");
}
	/**
	 * Return the select time list
         * @return string array

	 */
function showTimeList()
{
    return array(
        1 => "08:30",
        2 => "10:00",
        3 => "11:30",
        4 => "13:00",
        5 => "14:30",
        6 => "16:00",
        7 => "17:30",
        8 => "19:00");
}
	/**
	 * Return the select schedule type
         * @return string array

	 */
function showScheduleType()
{
    return array(
        1 => "Automatic",
        2 => "Manual");
}
	/**
	 * Return the select specialist type
         * @return string array

	 */
function showMajorType()
{
    return array(
        1 => "Senior",
        2 => "Junior");
}
	/**
	 * Return the select price type
         * @return string array

	 */
function setPrice($max_session, $group, $major)
{
    if($max_session >=5)
    {
        if($group == 2)
        {
           if($major == 1) 
               return 5;
           else return 1;
        } else
        {
            if($major == 1)
                return 7;
            else return 3;
        }
    } else 
    {
        if($group == 2)
        {
           if($major == 1) 
               return 6;
           else return 2;
        }  else
        {
            if($major == 1)
                return 8;
            else return 4;            
        }
    }
}
	/**
	 * Return the select price List
         * @return string array

	 */

	/**
	 * Return the list of weeks by max week of term
         * @return string array
	 */
/*
function getWeekListOfCurrentTerm()
{
    $term_id = Yii::app()->session['current_term'];
    $terms = Term::model()->findAllByPk($term_id);
    $weekNumber = $terms->week_number;
    $arr = array();
    foreach($weekNumber as $week)
    {
        
    }
 //return 
}
 * 
 */
