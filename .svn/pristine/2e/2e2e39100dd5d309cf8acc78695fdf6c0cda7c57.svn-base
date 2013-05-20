<?php
	/**
	 * Import component, css, javascript
         * FormHelper.php
	 */
$baseUrl = Yii::app()->baseUrl;
$cs = Yii::app()->getClientScript();
$cs->registerCssFile($baseUrl . '/css/schedule.css');
require_once( dirname(__FILE__) . '/../components/FormHelper.php');
require_once( dirname(__FILE__) . '/../components/ScheduleHelper.php');

class ScheduleController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/vtColumn1';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			
		);
	}
	public function actionDisplay()
	{
		$model=new Term('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Term']))
			$model->attributes=$_GET['Term'];

		$this->render('display',array(
			'model'=>$model,
		));
	}


        

}
