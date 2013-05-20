<?php

/**
 * This is the model class for table "payslip".
 *
 * The followings are the available columns in table 'payslip':
 * @property integer $id
 * @property integer $term_id
 * @property integer $staff_id
 * @property string $date_create
 * @property string $date_start
 * @property string $date_end
 * @property integer $status
 * @property integer $total
 * @property string $number
 * @property string $grade
 * @property string $notes
 */
class Payslip extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Payslip the static model class
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
		return 'payslip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('term_id, staff_id, status, total', 'numerical', 'integerOnly'=>true),
			array('number, grade', 'length', 'max'=>255),
			array('date_create, date_start, date_end, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, term_id, staff_id, date_create, date_start, date_end, status, total, number, grade, notes', 'safe', 'on'=>'search'),
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
                    'term' => array(self::BELONGS_TO, 'Term', 'term_id'),
                    'satts' => array(self::HAS_MANY, 'Satt', 'payslip_id'),
                    'sattCount' => array(self::STAT, 'Satt', 'payslip_id'),                   
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
			'staff_id' => 'Staff',
			'date_create' => 'Date Create',
			'date_start' => 'Date Start',
			'date_end' => 'Date End',
			'status' => 'Status',
			'total' => 'Total',
			'number' => 'Number',
			'grade' => 'Grade',
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
		$criteria->compare('term_id',$this->term_id);
		$criteria->compare('staff_id',$this->staff_id);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('date_start',$this->date_start,true);
		$criteria->compare('date_end',$this->date_end,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('total',$this->total);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('grade',$this->grade,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}