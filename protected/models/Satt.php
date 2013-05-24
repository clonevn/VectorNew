<?php

/**
 * This is the model class for table "satt".
 *
 * The followings are the available columns in table 'satt':
 * @property integer $id
 * @property integer $status
 * @property integer $modify
 * @property integer $paid
 * @property integer $pay
 * @property integer $staff_id
 * @property integer $session_id
 * @property integer $payslip_id
 * @property integer $latt_id
 * @property integer $gatt_id
 * @property integer $term_id
 * @property string $date_create
 * @property string $date_update
 * @property string $notes
 */
class Satt extends CActiveRecord
{
        /**
	 * constant variable for modify, status and paid
	 */      
    	const MODIFY_DEFAULT=1;
	const MODIFY_DONE=2;
        const STATUS_ALLOCATED=1;
        const STATUS_NOTATTENDED=2;
	const STATUS_ATTENDED=3;
        const STATUS_CANCELLED=4;
        const STATUS_DONE=5;
        const PAID_NOT=1;
        const PAID_DONE=2;    
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Satt the static model class
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
		return 'satt';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('status, modify, paid, pay, staff_id, session_id, payslip_id, latt_id, gatt_id, term_id', 'numerical', 'integerOnly'=>true),
			array('date_create, date_update, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, status, modify, paid, pay, staff_id, session_id, payslip_id, latt_id, gatt_id, term_id, date_create, date_update, notes', 'safe', 'on'=>'search'),
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
                       'staff' => array(self::BELONGS_TO, 'Staff', 'staff_id'),
                       'session' => array(self::BELONGS_TO, 'Session', 'session_id'),
                       'term' => array(self::BELONGS_TO, 'term', 'term_id'),
                       'payslip' => array(self::BELONGS_TO, 'Payslip', 'payslip_id'),
                       'latt' => array(self::BELONGS_TO, 'Latt', 'latt_id'),
                       'Gatt' => array(self::BELONGS_TO, 'Gatt', 'gatt_id'),                   
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'status' => 'Status',
			'modify' => 'Modify',
			'paid' => 'Paid',
			'pay' => 'Pay',
			'staff_id' => 'Staff',
			'session_id' => 'Session',
			'payslip_id' => 'Payslip',
			'latt_id' => 'Latt',
			'gatt_id' => 'Gatt',
			'term_id' => 'Term',
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
		$criteria->compare('status',$this->status);
		$criteria->compare('modify',$this->modify);
		$criteria->compare('paid',$this->paid);
		$criteria->compare('pay',$this->pay);
		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('session_id',$this->session_id);
		$criteria->compare('payslip_id',$this->payslip_id);
		$criteria->compare('latt_id',$this->latt_id);
		$criteria->compare('gatt_id',$this->gatt_id);
		$criteria->compare('term_id',$this->term_id);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('date_update',$this->date_update,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}