<?php

/**
 * This is the model class for table "term".
 *
 * The followings are the available columns in table 'term':
 * @property integer $id
 * @property string $date_start
 * @property string $date_end
 * @property integer $week_number
 * @property integer $status
 */
class Term extends CActiveRecord
{
        /**
	 * constant variable for status field
	 */      
    	const STATUS_ONGOING=1;
	const STATUS_DONE=2;
	const STATUS_CANCELLED=3;    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Term the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'term';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('week_number', 'required'),
			array('week_number, status', 'numerical', 'integerOnly'=>true),
                        array('week_number', 'compare', 'compareValue'=>9 ,'operator'=>'>'),
                        array('week_number', 'compare', 'compareValue'=>13 ,'operator'=>'<'),
                        array('date_start', 'checkMonday'),
                        array('date_start', 'type', 'datetimeFormat'=>'M/dd/yyyy'),
                        array('date_start, date_end', 'safe'),                          
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_start, date_end, week_number, status', 'safe', 'on'=>'search'),
			// The following rule is used by searchAll().
			// Please remove those attributes that should not be searched.
			array('id, date_start, date_end, week_number, status', 'safe', 'on'=>'searchAll'),                    
		);
	}
	/**
         * Rule check Monday
	 * @return boolean.
	 */        
        public function checkMonday($attribute)
        {         
            $day = new DateTime($this->$attribute);
            if($day->format('w') != 1)
              $this->addError($attribute, 'The start time should be Monday!');
        }   
	/**
         * Rule check week number < 10
	 * @return boolean.
	 */ 
        /*
        public function checkWeekNumber($attribute)
        {
            if($attribute < 10)
              $this->addError($attribute, 'The number of weeks must from 10 or over!');
        } 
         * 
         */
	/**
	 * This is invoked before the record is saved.
	 * @return boolean whether the record should be saved.
	 */
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
                          // Count the date end based on week number
                          $date_end = new DateTime($this->date_start);
                          $week_number = $this->week_number;
                          $date_end->modify("+{$week_number} weeks");
                          $this->date_end=$date_end->format('Y-m-d');
			  // Save all new weeks for this term:
                          /*
                          $term_id = $this->id;
                          for($i=0;$i<$week_number;$i++)
                          {
                              $week = new Week;
                              $week->term_id = $term_id;
                              $week->number = $i;
                              if(!$week->save())
                                  throw new CHttpException("Could not save week");
                          }
                           * 
                           */
			}
			return true;
		}
		else
			return false;
	}
	/**
	 * This is invoked after the record is saved.
	 */
	protected function afterSave()
	{
		parent::afterSave();
                $status = $this->status;
                if($status == 1)
                {
                // Save all new weeks for this term:
                $week_number = $this->week_number;
                $term_id = $this->id;
                for($i=0;$i<$week_number;$i++)
                    {
                         $week = new Week;
                         $week->term_id = $term_id;
                         $week->number = $i+1;
                         if(!$week->save())
                            throw new CHttpException("Could not save week");
                    }
                }
	}
        
	/**
         * get Term date_start list
	 * @return shorten date list.
	 */  
        
        public static function getTermDateList()
        {
            $Criteria = new CDbCriteria();
            // Order by id
            $Criteria->order = "id DESC";
            // Only Ongoing Term
            $Criteria->condition = 'status = '.Term::STATUS_ONGOING;
            $terms = Term::model()->findAll($Criteria);
            $list = CHtml::listData($terms, 'id', function ($terms)
            {
                $item = $terms->date_start;
                $string = explode(' ', $item);
                return CHtml::encode($string[0]);
             }
             );
            return $list;
        }
	/**
         * get Term date_start list
	 * @return shorten date list.
	 */  
        
        public static function getTermDateAndNumberList()
        {
            $Criteria = new CDbCriteria();
            // Order by id
            $Criteria->order = "id DESC";
            // Only Ongoing Term
            $Criteria->condition = 'status = '.Term::STATUS_ONGOING;
            $terms = Term::model()->findAll($Criteria);
            $list = CHtml::listData($terms, 'id', function ($terms)
            {
                $item1 = $terms->date_start;
                $item2 = $terms->id;
                $string = explode(' ', $item1);
                $str = "Date: ".$string[0]." term: ".$item2;
                return CHtml::encode($str);
             }
             );
            return $list;
        }
	/**
         * get Term date_start by id
	 * @return string.
	 */        
        public static function getTermDateStart($id)
        {
            $model = Term::model()->findByPk($id);
            $date = $model->date_start;
            return $date;
        }
	/**
         * get Term date_end by id
	 * @return string.
	 */        
        public static function getTermDateEnd($id)
        {
            $model = Term::model()->findByPk($id);
            $date = $model->date_end;
            return $date;
        }        
	/**
         * get latest Term id
	 * @return integer.
	 */        
        public static function getTermLatestId()
        {
            $Criteria = new CDbCriteria();
            $Criteria->limit = 1;  
            $Criteria->order = "id DESC";           
            $model = Term::model()->findAll($Criteria);
            $id = $model[0]->id;
            return $id;
        }
	/**
         * get all ongoing Term
	 * @return object model
	 */        
        public static function getAllOngoingTerm()
        {
            $Criteria = new CDbCriteria();
            $Criteria->condition = 'status= '.Term::STATUS_ONGOING.' AND date_end < CURDATE()';
            $Criteria->order = "id DESC";           
            $model = Term::model()->findAll($Criteria);
            return $model;
        }    
	/**
         * auto mark term status is done when date_end < current date
	 * 
	 */        
        public static function autoChangeTermToDone()
        {
            $Criteria = new CDbCriteria();
            $Criteria->condition = 'status= 1 AND date_end < CURDATE()';        
            $model = Term::model()->findAll($Criteria);
            $count = count($model);
            if($count)
            {
                for($i=0; $i<$count; $i++)
                {
                $model[$i]->status = 2;
                   if(!$model[$i]->update())
                       throw new CHttpException('Cant change term to be DONE status automatic - in TERM model');
                }
                
            } 
            
        }     
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'weeks' => array(self::HAS_MANY, 'Week', 'term_id'),
                    'weekCount' => array(self::STAT, 'Week', 'term_id'),                    
                    'lessons' => array(self::HAS_MANY, 'Lesson', 'term_id'),
                    'lessonCount' => array(self::STAT, 'Lesson', 'term_id'),
                    'groups' => array(self::HAS_MANY, 'Group', 'term_id'),
                    'groupCount' => array(self::STAT, 'Group', 'term_id'),  
                    'invoices' => array(self::HAS_MANY, 'Invoice', 'term_id'),
                    'invoiceCount' => array(self::STAT, 'Invoice', 'term_id'),
                    'payslips' => array(self::HAS_MANY, 'Payslip', 'term_id'),
                    'payslipCount' => array(self::STAT, 'Payslip', 'term_id'),
                    'prices' => array(self::HAS_MANY, 'Price', 'term_id'),
                    'paygrades' => array(self::HAS_MANY, 'Paygrade', 'term_id'),                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date_start' => 'Date Start',
			'date_end' => 'Date End',
			'week_number' => 'Week Number',
			'status' => 'Status',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('week_number',$this->week_number);
		$criteria->compare('status',$this->status);
                // Only list ONGOING term
                $criteria->condition = 'status = '.Term::STATUS_ONGOING;

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function searchAll()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('week_number',$this->week_number);
		$criteria->compare('status',$this->status);
                

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}        
}