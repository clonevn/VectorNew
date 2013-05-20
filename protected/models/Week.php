<?php

/**
 * This is the model class for table "week".
 *
 * The followings are the available columns in table 'week':
 * @property integer $id
 * @property integer $term_id
 * @property integer $number
 */
class Week extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Week the static model class
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
		return 'week';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('term_id, number', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, term_id, number', 'safe', 'on'=>'search'),
		);
	}
	/**
	 * This is invoked after the record is saved.
	 */
	protected function afterSave()
	{
		parent::afterSave();
                // Save all new days for this week:
                $week_id = $this->id;
                for($i=0;$i<7;$i++)
                    {
                         $day = new Day;
                         $day->week_id = $week_id;
                         $day->number = $i+1;
                         if(!$day->save())
                            throw new CHttpException("Could not save day");
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
                    'term' => array(self::BELONGS_TO, 'Term', 'term_id'),
                    'sessions' => array(self::HAS_MANY, 'Session', 'week_id'),
                    'sessionCount' => array(self::STAT, 'Session', 'week_id'),
                    'days' => array(self::HAS_MANY, 'Day', 'week_id'),
                    'dayCount' => array(self::STAT, 'Day', 'week_id'),
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
		$criteria->compare('term_id',$this->term_id);
		$criteria->compare('number',$this->number);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}