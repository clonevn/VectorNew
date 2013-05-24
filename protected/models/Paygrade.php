<?php

/**
 * This is the model class for table "paygrade".
 *
 * The followings are the available columns in table 'paygrade':
 * @property integer $id
 * @property integer $term_id
 * @property integer $upfront
 * @property integer $bonus
 * @property string $name
 * @property integer $code
 */
class Paygrade extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Paygrade the static model class
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
		return 'paygrade';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('term_id, upfront, bonus, code', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, term_id, upfront, bonus, name, code', 'safe', 'on'=>'search'),
		);
	}
	/**
         * get Price list by term
	 * 
	 */  
        
        public static function getPaygradeListByTerm($term_id)
        {
            
            $Criteria = new CDbCriteria();
            $Criteria->condition = 'term_id = '.$term_id;
            $pay = Paygrade::model()->findAll($Criteria);
            return $pay;
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
			'upfront' => 'Upfront',
			'bonus' => 'Bonus',
			'name' => 'Name',
			'code' => 'Code',
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
		$criteria->compare('upfront',$this->upfront);
		$criteria->compare('bonus',$this->bonus);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('code',$this->code);
                // List by current term:
                $term_id = Yii::app()->session['current_term'];
                $criteria->condition = 'term_id = '.$term_id;
		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}