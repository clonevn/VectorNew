<?php

/**
 * This is the model class for table "gatt".
 *
 * The followings are the available columns in table 'gatt':
 * @property integer $id
 * @property integer $group_id
 * @property integer $session_id
 * @property integer $type
 * @property integer $status
 * @property integer $mark
 * @property string $date_create
 * @property string $date_update
 * @property integer $notes
 */
class Gatt extends CActiveRecord
{
        /**
	 * constant variable for status, mark, type
	 */      
        const STATUS_ALLOCATED=1;
        const STATUS_CANCELLED=2;
        const STATUS_DONE=3;
        const MARK_NOTATTENDED=1;
	const MARK_ATTENDED=1;  
        const TYPE_AUTOMATIC=1;
        const TYPE_MANUAL=2;  
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Gatt the static model class
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
		return 'gatt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('group_id, session_id, type, status, mark, notes', 'numerical', 'integerOnly'=>true),
			array('date_create, date_update', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, group_id, session_id, type, status, mark, date_create, date_update, notes', 'safe', 'on'=>'search'),
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
                       'group' => array(self::BELONGS_TO, 'Group', 'group_id'),
                       'session' => array(self::BELONGS_TO, 'Session', 'session_id'),  
                       'latts' => array(self::HAS_MANY, 'Latt', 'gatt_id'),
                       'lattCount' => array(self::STAT, 'Latt', 'gatt_id'),  
                       'satts' => array(self::HAS_MANY, 'Satt', 'satt_id'),                  
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'group_id' => 'Group',
			'session_id' => 'Session',
			'type' => 'Type',
			'status' => 'Status',
			'mark' => 'Mark',
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
		$criteria->compare('group_id',$this->group_id);
		$criteria->compare('session_id',$this->session_id);
		$criteria->compare('type',$this->type);
		$criteria->compare('status',$this->status);
		$criteria->compare('mark',$this->mark);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('notes',$this->notes);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}