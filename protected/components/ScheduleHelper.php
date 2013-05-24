<?php

function getTimeFromSlot($session, $slot)
{


}
function checkStaffAttendance($session, $staff)
{
    if ($session->attendance == '') {
        return true;
    } else {
        $attend = $session->attendance;
        if ($attend[0] == '1') {
            return true;
        } else {
            return false;
        }

    }

}


function checkStudentAttendance($session, $student)
{
    if ($session->attendance == '') {
        return true;
    } else {
        $attend = $session->attendance;
        $a = explode(',', $session->students_id);
        $key = array_search((string )$student->id, $a);
        $key++;
        if ($attend[$key] == '1') {
            return true;
        } else {
            return false;
        }


    }

}

function getDaysToNow()
{

    $date1 = Term::model()->getLatest()->start_time;
    $date2 = 'NOW';

    $ts1 = strtotime($date1);
    $ts2 = strtotime($date2);

    $seconds_diff = $ts2 - $ts1;

    $days = floor($seconds_diff / 3600 / 24);
    return $days;
}
function getDayText($i)
{
    if ($i == 1)
        return 'Monday';
    if ($i == 2)
        return 'Tuesday';
    if ($i == 3)
        return 'Wednesday';
    if ($i == 4)
        return 'Thursday';
    if ($i == 5)
        return 'Friday';
    if ($i == 6)
        return 'Sartuday';
    if ($i == 7)
        return 'Sunday';
}


function getSessionStaffDisplay($session)
{

    $staff = Staff::model()->findByPk($session->staff_id);
    return $staff->display_name;
}
function getSessionStudentsDisplay($session)
{
    $a = explode(',', $session->students_id);
    $html = '';
    for ($i = 0; $i < count($a); $i++) {
        $student = Student::model()->findByPk($a[$i]);
        if ($i < (count($a) - 1)) {
            $html = $html . $student->display_name . ',';
        } else {
            $html = $html . $student->display_name;
        }

    }
    return $html;
}


function checkStudentInString($student, $string)
{
    $student = ',' . $student . ',';
    $string = ',' . $string . ',';

    return strpos($string, $student);
}

function getSessionAvailable($day, $slot)
{
    $sessions = $day->sessions;

    for ($i = 0; $i < count($sessions); $i++) {
        if ($sessions[$i]->slot == $slot) {
            return $sessions[$i];
        } 
            

    }
    return null;

}


function printSessionWeekday($sessions)
{
    $a = array(
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100);
    for ($i = 0; $i < count($sessions); $i++) {
        $a[$sessions[$i]->slot] = $i;
        // a tuong ung voi session tuong ung.
    }

    $html = "";
    for ($i = 1; $i <= 3; $i++) {
        if ($i == 3) {
            $html = $html . "<div class='session-last'>";
        } else {
            $html = $html . "<div class='session'>";
        }
        for ($j = 1; $j <= 5; $j++) {
            $t = ($i - 1) * 5 + $j;
            if ($a[$t] == 100) // neu nhu khong co gi
                {
                if ($j == 5) {
                    $html = $html . "<div class='session-slot-last'></div>";
                } else {
                    $html = $html . "<div class='session-slot'></div>";
                }
            } else // neu nhu co gi do
            {
                if ($j == 5) {
                    $html_plus = "<div class='session-slot-last'><div class='sesion-slot-detail'><div class='session-slot-detail-top'>" .
                        getSessionStaffDisplay($sessions[$a[$t]]) .
                        "</div><div class='session-slot-detail-bottom'>" . getSessionStudentsDisplay($sessions[$a[$t]]) .
                        "</div></div></div>";
                    $html = $html . CHtml::link($html_plus, array('session/update/' . $sessions[$a[$t]]->
                            id));
                } else {
                    $html_plus = "<div class='session-slot'><div class='sesion-slot-detail'><div class='session-slot-detail-top'>" .
                        getSessionStaffDisplay($sessions[$a[$t]]) .
                        "</div><div class='session-slot-detail-bottom'>" . getSessionStudentsDisplay($sessions[$a[$t]]) .
                        "</div></div></div>";
                    $html = $html . CHtml::link($html_plus, array('session/update/' . $sessions[$a[$t]]->
                            id));
                }
            }
        }

        $html = $html . "</div>";
    }
    return $html;


}
function printSessionWeekend($sessions)
{
    $a = array(
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100,
        100
        );
    for ($i = 0; $i < count($sessions); $i++) {
        $a[$sessions[$i]->slot] = $i;
        // a tuong ung voi session tuong ung.
    }

    $html = "";
    for ($i = 1; $i <= 8; $i++) {
        if ($i == 8) {
            $html = $html . "<div class='session-last'>";
        } else {
            $html = $html . "<div class='session'>";
        }
        for ($j = 1; $j <= 5; $j++) {
            $t = ($i - 1) * 5 + $j;

            if ($a[$t] == 100) // neu nhu khong co gi
                {
                if ($j == 5) {
                    $html = $html . "<div class='session-slot-last'></div>";
                } else {
                    $html = $html . "<div class='session-slot'></div>";
                }
            } else // neu nhu co gi do
            {
                if ($j == 5) {
                    $html_plus = "<div class='session-slot-last'><div class='sesion-slot-detail'><div class='session-slot-detail-top'>" .
                        getSessionStaffDisplay($sessions[$a[$t]]) .
                        "</div><div class='session-slot-detail-bottom'>" . getSessionStudentsDisplay($sessions[$a[$t]]) .
                        "</div></div></div>";
                    $html = $html . CHtml::link($html_plus, array('session/update/' . $sessions[$a[$t]]->
                            id));
                } else {
                    $html_plus = "<div class='session-slot'><div class='sesion-slot-detail'><div class='session-slot-detail-top'>" .
                        getSessionStaffDisplay($sessions[$a[$t]]) .
                        "</div><div class='session-slot-detail-bottom'>" . getSessionStudentsDisplay($sessions[$a[$t]]) .
                        "</div></div></div>";
                    $html = $html . CHtml::link($html_plus, array('session/update/' . $sessions[$a[$t]]->
                            id));
                }
            }


        }

        $html = $html . "</div>";


    }
    return $html;


}


	/**
	 * Draw the time-table 
         * @return string of html code

	 */
function drawWeeklyTimeTable($maxRoom,$maxWeek,$weekSelect)
{
  // echo date_format(new DateTime($week->days[0]->date), "d/m");
    $maxWeek = 12;
    $sessionCode = "";
    // Draw the caption include list of week with link
    $caption ="<div id='Tabledemo'>
            <!-- Table section -->
            <table border='1'>
		<!-- Caption tag -->
                <caption> Vector Tutoring";
    for($i=0;$i<$maxWeek;$i++)
    {
        
       $str = CHtml::link($i, array('schedule/display/week/8'));
       $caption =$caption."<span class ='caption_list'> ".$str." </span>";
    }
       $caption = $caption."</caption>";
    // Draw the header for table 
    // List the time for time-table
    $th ="<tr> 
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
    
    // Draw the 5 week days 
    $weekDay ="";
    
    for($i=0;$i<5;$i++)
    {
        for($j=0;$j<$maxRoom;$j++)
        {
            $firstRow =  firstRowWeekDay($maxRoom, "", "", $j);
            $slot = drawWeekDaySlot($sessionCode, $j);
            $weekDay = $weekDay.$firstRow;
            $weekDay = $weekDay.$slot."</tr>";       
        }
    }
    // Draw the 2 weekend days 
    $weekendDay ="";
     for($i=0;$i<2;$i++)
    {
        for($j=0;$j<$maxRoom;$j++)
        {         
            $firstRow =  firstRowWeekendDay($maxRoom, "", "", $j);
            $slot = drawWeekendDaySlot($sessionCode, $j);
            $weekendDay = $weekendDay.$firstRow;
            $weekendDay = $weekendDay.$slot."</tr>"; 
        }
    }   
    $lastPart ="</table></div>";
    $html = $caption.$th.$weekDay.$weekendDay.$lastPart;
    return $html;   

}
	/**
	 * Draw the first row for week Day 
         * @return string of html code

	 */
function firstRowWeekDay($maxRoom, $dateSchedule, $daySchedule, $roomNumber)
{
    $roomNumber++;
    if($roomNumber == 1)
    {
        $firstRow ="<tr>
            <td rowspan =".$maxRoom." class='HIT6316'>$dateSchedule</td>
            <td rowspan =".$maxRoom." class='HIT5091'>$daySchedule</td>
            <td class='HIT5401'>R$roomNumber</td>
            <td rowspan =".$maxRoom." colspan='5'>&nbsp;</td>";
    }
    else 
    {
        $firstRow ="<tr>
            <td class='HIT5401'>R$roomNumber</td>";
    }
    return $firstRow;
}
	/**
	 * Draw the day of the week day slot
         * @return string of html code

	 */
function drawWeekDaySlot($sessionCode, $roomNumber)
{
    $weekDaySlot ="";
    $sessionCode ="";
    $roomNumber++;
    $roomNumber = (string)$roomNumber;
    for ($i=0;$i<3;$i++)
         {
              $time = $i+6;  
              $timeCode = strval($time);
              $slotCode =$timeCode.'-'.$roomNumber;
              $weekDaySlot = $weekDaySlot."<td>$slotCode</td>";
         }
    return $weekDaySlot;
}
	/**
	 * Draw the first row for weekend Day 
         * @return string of html code

	 */
function firstRowWeekendDay($maxRoom, $dateSchedule, $daySchedule, $roomNumber)
{    
    $roomNumber++;
    if($roomNumber == 1)
    {
        $firstRow ="<tr>
            <td rowspan =".$maxRoom." class='HIT6316'>$dateSchedule</td>
            <td rowspan =".$maxRoom." class='HIT5091'>$daySchedule</td>
            <td class='HIT5401'>R$roomNumber</td>";
    }
    else 
    {
        $firstRow ="<tr>
            <td class='HIT5401'>R$roomNumber</td>";
    }
    return $firstRow;
}
	/**
	 * Draw the day of the weekend day slot
         * @return string of html code

	 */
function drawWeekendDaySlot($sessionCode, $roomNumber)
{
    $roomNumber++;
    $weekDaySlot ="";
    $sessionCode ="";
    $roomNumber = (string)$roomNumber;
    for ($i=0;$i<8;$i++)
         {
              $time = strval($i+1);
              $slotCode =$time.'-'.$roomNumber;
              $weekDaySlot = $weekDaySlot."<td>$slotCode</td>";
         }
    return $weekDaySlot;
}
function checkAvailableSlot($weekNumber, $dayNumber, $timeList)
{
    $flag = false;
    
}
?>