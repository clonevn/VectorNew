<?php

/**
 * This is the model class for table "invoice".
 *
 * The followings are the available columns in table 'invoice':
 * @property integer $id
 * @property integer $student_id
 * @property integer $term_id
 * @property string $date_create
 * @property integer $status
 * @property integer $total
 * @property integer $discount
 * @property string $number
 * @property string $notes
 */
class Invoice extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Invoice the static model class
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
		return 'invoice';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, term_id, status, total, discount', 'numerical', 'integerOnly'=>true),
			array('number', 'length', 'max'=>255),
			array('date_create, notes', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, student_id, term_id, date_create, status, total, discount, number, notes', 'safe', 'on'=>'search'),
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
                    'student' => array(self::BELONGS_TO, 'Student', 'student_id'),
                    'term' => array(self::BELONGS_TO, 'Term', 'term_id'),
                    'lessons' => array(self::HAS_MANY, 'Lesson', 'invoice_id'),
                    'lessonCount' => array(self::STAT, 'Lesson', 'invoice_id'), 
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'student_id' => 'Student',
			'term_id' => 'Term',
			'date_create' => 'Date Create',
			'status' => 'Status',
			'total' => 'Total',
			'discount' => 'Discount',
			'number' => 'Number',
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
		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('term_id',$this->term_id);
		$criteria->compare('date_create',$this->date_create,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('total',$this->total);
		$criteria->compare('discount',$this->discount);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('notes',$this->notes,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}