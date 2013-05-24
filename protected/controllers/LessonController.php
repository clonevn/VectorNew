<?php
	/**
	 * Import component, css, javascript
         * FormHelper.php
	 */
require_once( dirname(__FILE__) . '/../components/FormHelper.php');

class LessonController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Lesson;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
                // get currentTerm_id
                $current_term_id = Yii::app()->session['current_term'];
                $price = Price::getPriceListByTerm($current_term_id);     
		if(isset($_POST['Lesson']))
		{              
			$model->attributes=$_POST['Lesson'];
                        // term id
                        $term_id = $model->term_id;
                        // student id
                        $student_id = $model->student_id;
                        // subject id
                        $subject_id = $model->subject_id;
                        //group
                        $group = $model->group;                        
                        $major = $model->price_id;              
                        $max_session = $model->max_session;
                        $time = $model->total_session;
                        $date_start = $model->date_start;
                      //  $a3 = $model->group_id;
                      //  $a6 = $model->number;
                      //  $a7 = $model->total_session;
                      //  $a8 = $model->remain_session;
                      //  $a9 = $model->total_price;
                      //  $a10 = $model->date_create;
                      //  $a12 = $model->date_end;
                      //  $a15 = $model->status;
                      //  $a16 = $model->paid;
                      //  $a17 = $model->invoice_id
                        //scheduling type
                        $type = $model->type;  
                        if($type == 1)
                        {
                                $datenew = getWeekDayNumberOfDate($date_start);
                                // price
                                $price_id = setPrice($max_session, $group, $major);
                                // number 
                                $lastLesson = Invoice::model()->findAll(array('condition'=>"student_id =  $student_id", 'order'=>"id DESC",'limit'=>1));
                                if(!$lastLesson)
                                   $lastLesson_id = 0;   
                                else $lastLesson_id = $lastLesson[0]->id;
                                $model->number = 'T'.$term_id .'-S'.$student_id.'-L'.$lastLesson_id;
                                $number = $model->number;
                                $model->status = Lesson::STATUS_ONGOING;
                                $model->paid = Lesson::PAID_NOT;
                                $paid = $model->paid;
                                $status =$model->status;
                                //
                             //   throw new CHttpException (" Test : term $term_id; student_id $student_id; subject_id $subject_id; price: $price_id;  price_id/major $major; max_session $max_session; 
                              //         total_session/timelist $time; date_start $date_start; type $type; date value: week $datenew[2]; and day: $datenew[1]] ");
                              //  throw new CHttpException (" price_id/major $major; max_session $max_session; number lesson : $number; status : $status, paid : $paid;;
                             //           total_session/timelist $time; date_start $date_start; type $type; date value: week $datenew[2]; and day: $datenew[1]] ");                       
                            if($model->save())
                            {
                                // Create session first
                                for($i; $i< $max_session; $i++)
                                {
                                    
                                }
                                
                                $this->redirect(array('view','id'=>$model->id));
                            } else 
                            {
                                throw new CHttpException(" Cant save lesson");
                            }
                           
                            
                        }
		}
                if(isset($_GET['student_id']))
                {
                    $student_id = $_GET['student_id'];
                    $this->render('create',array(
                            'model'=>$model,
                            'price'=>$price,
                            'student_id'=>$student_id,
                            'current_term_id'=>$current_term_id,
                    ));
                } else
                {
                    //throw new CHttpException ("wrong sending");
                    $this->render('create',array(
                            'model'=>$model,
                            'price'=>$price,
                            'current_term_id'=>$current_term_id,

                    ));
                }
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Lesson']))
		{
			$model->attributes=$_POST['Lesson'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Lesson');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Lesson('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Lesson']))
			$model->attributes=$_GET['Lesson'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Lesson the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Lesson::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Lesson $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='lesson-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
