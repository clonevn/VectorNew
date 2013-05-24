<?php

/**
 * This is the model class for table "lesson".
 *
 * The followings are the available columns in table 'lesson':
 * @property integer $id
 * @property integer $term_id
 * @property integer $student_id
 * @property integer $group_id
 * @property integer $subject_id
 * @property integer $price_id
 * @property integer $invoice_id
 * @property string $number
 * @property integer $max_session
 * @property integer $total_session
 * @property integer $remain_session
 * @property integer $total_price
 * @property string $date_create
 * @property string $date_start
 * @property string $date_end
 * @property integer $group
 * @property integer $type
 * @property integer $status
 * @property integer $paid
 */
class Lesson extends CActiveRecord
{
        /**
	 * constant variable for status, group, type field
	 */      
    	const STATUS_ONGOING=1;
	const STATUS_DONE=2;
	const STATUS_CANCELLED=3;
        const STATUS_NOTALLOCATED=4;
    	const GROUP_GROUP=2;
        const GROUP_INDIVIDUAL=1;
        const TYPE_AUTOMATIC=1;
        const TYPE_MANUAL=2;
        const PAID_NOT=1;
        const PAID_DONE=2;

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Lesson the static model class
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
		return 'lesson';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
                        array('max_session, student_id, subject_id, price_id, date_start, type, total_session', 'required'),
			array('term_id, student_id, group_id, subject_id, price_id, invoice_id, max_session, total_session, remain_session, total_price, group, type, status, paid', 'numerical', 'integerOnly'=>true),
			array('number', 'length', 'max'=>255),
                        array('max_session', 'compare', 'compareValue'=>0 ,'operator'=>'>'),                   
                        array('date_start', 'type', 'datetimeFormat'=>'M/dd/yyyy'),
                        array('date_start', 'checkdateStart'),
                      //  array('date_start', 'checkdateSlot'),
                      //  array('total_price', 'checkTimeSlot'),
			array('date_create, date_end, term_id, student_id, group_id, invoice_id, total_session, remain_session, total_price, status, paid, group, type', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, term_id, student_id, group_id, subject_id, price_id, invoice_id, number, max_session, total_session, remain_session, total_price, date_create, date_start, date_end, group, type, status, paid', 'safe', 'on'=>'search'),
		);
	}
        /**
         * Rule check Date Start
	 * 
	 */      
        public function checkDateStart($attribute)
        {         
            $term_id = Yii::app()->session['current_term'];
            $current = new DateTime();
            $term_date_start = Term::getTermDateStart($term_id);
            $date_start = new DateTime($term_date_start);
            $term_date_end = Term::getTermDateEnd($term_id);
            $date_end = new DateTime($term_date_end);
            $day = new DateTime($this->$attribute);
            if($day < $current)
              $this->addError($attribute, 'The start time should be larger than today!');
            if($day < $date_start)
             $this->addError($attribute, 'The start time should be after start date of this term!');
            if($day > $date_end)
             $this->addError($attribute, 'The start time should be before end date of this term!');            
        }  
        /**
         * Rule check date + max session
	 * 
	 */      
        public function checkMaxSession($attribute)
        {         
            $datenew = getWeekDayNumberOfDate($this->date_start);
            $this->addError($attribute, $datenew[2]);
        }        
	/**
	 * This is invoked after the record is saved.
	 */
        /*
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
         * 
         */  
	/**
	 * @return array relational rules.
	 */        
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'term' => array(self::BELONGS_TO, 'Term', 'term_id'),
                    'student' => array(self::BELONGS_TO, 'Student', 'student_id'),
                    'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
                    'subject' => array(self::BELONGS_TO, 'Suject', 'subject_id'),
                    'invoice' => array(self::BELONGS_TO, 'Invoice', 'invoice_id'),
                    'price' => array(self::BELONGS_TO, 'Price', 'price_id'),
                    'latts' => array(self::HAS_MANY, 'Latt', 'lesson_id'),
                    'lattCount' => array(self::STAT, 'Latt', 'lesson_id'), 
                    'sessions' => array(self::MANY_MANY, 'Session', 'Latt(lesson_id, session_id)'),
                    
                    
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'term_id' => 'Term',
			'student_id' => 'Student',
			'group_id' => 'Group',
			'subject_id' => 'Subject',
                       // Use price for specialist validation
			'price_id' => 'Price',
			'invoice_id' => 'Invoice',
			'number' => 'Number',
			'max_session' => 'Max Session',
                        // Use total_session for Time List validation
			'total_session' => 'Total Session',
                        // Use remain_session for select Schedule Type
			'remain_session' => 'Remain Session',
			'total_price' => 'Total Price',
			'date_create' => 'Date Create',
			'date_start' => 'Date Start',
			'date_end' => 'Date End',
			'group' => 'Group',
			'type' => 'Type',
			'status' => 'Status',
			'paid' => 'Paid',
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
		$criteria->compare('term_id',$this->term_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('price_id',$this->price_id);
		$criteria->compare('invoice_id',$this->invoice_id);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('max_session',$this->max_session);
		$criteria->compare('total_session',$this->total_session);
		$criteria->compare('remain_session',$this->remain_session);
		$criteria->compare('total_price',$this->total_price);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('group',$this->group);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->status);
		$criteria->compare('paid',$this->paid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}