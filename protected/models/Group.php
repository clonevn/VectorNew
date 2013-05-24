<?php

/**
 * This is the model class for table "group".
 *
 * The followings are the available columns in table 'group':
 * @property integer $id
 * @property integer $subject_id
 * @property integer $term_id
 * @property integer $price_id
 * @property integer $type
 * @property integer $status
 * @property string $date_create
 * @property string $date_start
 * @property string $date_end
 * @property integer $max_session
 * @property integer $total_session
 * @property integer $remain_session
 * @property string $number
 */
class Group extends CActiveRecord
{
        /**
	 * constant variable for status and type field
	 */      
    	const STATUS_ONGOING=1;
	const STATUS_DONE=2;
        const STATUS_CANCELLED=3;
	const STATUS_NOTALLOCATED=4;
        const TYPE_AUTOMATIC=1;
        const TYPE_MANUAL=2; 
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Group the static model class
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
		return 'group';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subject_id, term_id, price_id, type, status, max_session, total_session, remain_session', 'numerical', 'integerOnly'=>true),
			array('number', 'length', 'max'=>255),
			array('date_create, date_start, date_end', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, subject_id, term_id, price_id, type, status, date_create, date_start, date_end, max_session, total_session, remain_session, number', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'sessions' => array(self::MANY_MANY, 'Session', 'Gatt(group_id, session_id)'),
                    'gatts' => array(self::HAS_MANY, 'Gatt', 'group_id'),
                    'gattsCount' => array(self::STAT, 'Gatt', 'group_id'),
                    'lessons' => array(self::HAS_MANY, 'Lesson', 'group_id'),
                    'lessonCount' => array(self::STAT, 'Lesson', 'group_id'), 
                    'term' => array(self::BELONGS_TO, 'Term', 'term_id'),
                    'subject' => array(self::BELONGS_TO, 'Suject', 'subject_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'subject_id' => 'Subject',
			'term_id' => 'Term',
			'price_id' => 'Price',
			'type' => 'Type',
			'status' => 'Status',
			'date_create' => 'Date Create',
			'date_start' => 'Date Start',
			'date_end' => 'Date End',
			'max_session' => 'Max Session',
			'total_session' => 'Total Session',
			'remain_session' => 'Remain Session',
			'number' => 'Number',
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
		$criteria->compare('subject_id',$this->subject_id);
		$criteria->compare('term_id',$this->term_id);
		$criteria->compare('price_id',$this->price_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->status);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('max_session',$this->max_session);
		$criteria->compare('total_session',$this->total_session);
		$criteria->compare('remain_session',$this->remain_session);
		$criteria->compare('number',$this->number,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}