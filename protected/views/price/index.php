<?php
/* @var $this PriceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Prices',
);

$this->menu=array(
	array('label'=>'Create Price', 'url'=>array('create')),
	array('label'=>'Manage Price', 'url'=>array('admin')),
);
?>

<h1>Prices</h1>

<?php 
$t = array();
foreach($model as $m)
{
    $t[] = CHtml::link($m->rate,array('price/update/'.$m->id));
}

		echo "<table id='ttt1' class ='table1' border='1'>
			<tr>
				<th colspan ='3' scope='col'></th>
				<th scope='col'>Package Rates</th>
				<th scope='col'>Usual Rates</th>
			</tr>
                        <tr>
                                <td scope ='row'></td>
                                <td scope ='row'>YEAR</td>
                                <td scope ='row'></td>
                                <td scope ='row'> >5 sessions </td>
                                <td scope ='row'> <5 sessions </td>
                        </tr>
                        <tr>
                                <td scope ='row'>Junior Tutor</td>
                                <td scope ='row'>4 to 6</td>
                                <td scope ='row'> Group</td>
                                <td scope ='row'> $ $t[0] </td>
                                <td scope ='row'> $ $t[1] </td>
                        </tr>
                        <tr>
                                <td scope ='row'>Junior Tutor</td>
                                <td scope ='row'>4 to 9</td>
                                <td scope ='row'>Ind</td>
                                <td scope ='row'> $ $t[2] </td>
                                <td scope ='row'> $ $t[3] </td>
                        </tr>
                        <tr>
                                <td scope ='row'>Senior Tutor</td>
                                <td scope ='row'>7 to 12</td>
                                <td scope ='row'>Group</td>
                                <td scope ='row'> $ $t[4] </td>
                                <td scope ='row'> $ $t[5] </td>
                        </tr> 
                        <tr>
                                <td scope ='row'>Senior Tutor</td>
                                <td scope ='row'>10 to 12</td>
                                <td scope ='row'>Ind</td>
                                <td scope ='row'> $ $t[6] </td>
                                <td scope ='row'> $ $t[7] </td>
                        </tr>
                        </table>";
 

 ?>