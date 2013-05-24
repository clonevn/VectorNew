<?php

/**
 * This is the model class for table "latt".
 *
 * The followings are the available columns in table 'latt':
 * @property integer $id
 * @property integer $lesson_id
 * @property integer $session_id
 * @property integer $student_id
 * @property integer $gatt_id
 * @property integer $price
 * @property integer $modify
 * @property integer $status
 * @property integer $mark
 * @property integer $group
 * @property integer $paid
 * @property integer $type
 * @property string $date_create
 * @property string $date_update
 * @property string $notes
 */
class Latt extends CActiveRecord
{
        /**
	 * constant variable for modify, status, mark, group, type and paid
	 */      
    	const MODIFY_DEFAULT=1;
	const MODIFY_DONE=2;
        const STATUS_ALLOCATED=1;
        const STATUS_CANCELLED=2;
        const STATUS_DONE=3;
        const MARK_NOTATTENDED=1;
	const MARK_ATTENDED=1;       
    	const GROUP_GROUP=2;
        const GROUP_INDIVIDUAL=1;
        const TYPE_AUTOMATIC=1;
        const TYPE_MANUAL=2;
        const PAID_NOT=1;
        const PAID_DONE=2;
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Latt the static model class
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
		return 'latt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('lesson_id, session_id, student_id, gatt_id, price, modify, status, mark, group, paid, type', 'numerical', 'integerOnly'=>true),
			array('date_create, date_update, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, lesson_id, session_id, student_id, gatt_id, price, modify, status, mark, group, paid, type, date_create, date_update, notes', 'safe', 'on'=>'search'),
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
                       'lesson' => array(self::BELONGS_TO, 'Lesson', 'lesson_id'),
                       'session' => array(self::BELONGS_TO, 'Session', 'session_id'),
                       'gatt' => array(self::BELONGS_TO, 'Gatt', 'gatt_id'),
                       'student' => array(self::BELONGS_TO, 'Student', 'student_id'),
                       'satts' => array(self::HAS_MANY, 'Satt', 'latt_id'),

		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'lesson_id' => 'Lesson',
			'session_id' => 'Session',
			'student_id' => 'Student',
			'gatt_id' => 'Gatt',
			'price' => 'Price',
			'modify' => 'Modify',
			'status' => 'Status',
			'mark' => 'Mark',
			'group' => 'Group',
			'paid' => 'Paid',
			'type' => 'Type',
			'date_create' => 'Date Create',
			'date_update' => 'Date Update',
			'notes' => 'Notes',
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
		$criteria->compare('lesson_id',$this->lesson_id);
		$criteria->compare('session_id',$this->session_id);
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('gatt_id',$this->gatt_id);
		$criteria->compare('price',$this->price);
		$criteria->compare('modify',$this->modify);
		$criteria->compare('status',$this->status);
		$criteria->compare('mark',$this->mark);
		$criteria->compare('group',$this->group);
		$criteria->compare('paid',$this->paid);
		$criteria->compare('type',$this->type);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}