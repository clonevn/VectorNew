<?php
/* @var $this PaygradeController */
/* @var $dataProvider CActiveDataProvider */
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl . '/css/price_paygrade.css');
$this->breadcrumbs=array(
	'Paygrades',
);

$this->menu=array(
	array('label'=>'Create Paygrade', 'url'=>array('create')),
	array('label'=>'Manage Paygrade', 'url'=>array('admin')),
);
?>
<h1>Manage Paygrade</h1>
<?php 
$t = array();
$s = array();
$b = array();
$n = array();
$count = count($model);
foreach($model as $m)
{
    $d = $m->bonus + $m->upfront;
    $t[] = CHtml::link($m->upfront,array('update'.$m->id));
    $b[] = CHtml::link($m->bonus,array('update'.$m->id));
    $s[] = CHtml::link($d,array('update'.$m->id));
    $n[] = CHtml::link($m->name,array('update'.$m->id));
}
                echo "<div id= 'table'>";
		echo "<table id='ttt1' class ='table1' border='1'>
			<tr>
				<th scope='col'> Paygrade</th>
				<th scope='col'>Session Rates</th>
				<th scope='col'>Upfront</th>
                                <th scope='col'>Bonus</th>
			</tr>";
                 for($i=0; $i<$count; $i++)
                 {
                     echo "<tr>
                                <td scope ='row'>$n[$i]</td>
                                <td scope ='row'>$s[$i]</td>
                                <td scope ='row'>$t[$i]</td>
                                <td scope ='row'>$b[$i]</td>
                         </tr>";
                 }
                  echo"</table>";
                  echo"</div>";
 ?>