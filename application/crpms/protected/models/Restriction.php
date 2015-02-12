<?php

/**
 * This is the model class for table "restriction".
 *
 * The followings are the available columns in table 'restriction':
 * @property integer $id
 * @property string $restriction_code
 * @property string $restriction_type
 * @property string $restriction_name
 * @property string $restriction_description
 *
 * The followings are the available model relations:
 * @property Employee201[] $employee201s
 * @property Record[] $records
 * @property RecordsDocuments[] $recordsDocuments
 * @property Student201[] $student201s
 */
class Restriction extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Restriction the static model class
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
		return 'restriction';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('restriction_code, restriction_type, restriction_name', 'required'),
			array('restriction_code', 'length', 'max'=>2),
			array('restriction_type, restriction_name', 'length', 'max'=>45),
			array('restriction_description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, restriction_code, restriction_type, restriction_name, restriction_description', 'safe', 'on'=>'search'),
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
			'employee201s' => array(self::HAS_MANY, 'Employee201', 'restriction_id'),
			'records' => array(self::HAS_MANY, 'Record', 'restriction_id'),
			'recordsDocuments' => array(self::HAS_MANY, 'RecordsDocuments', 'restriction_id'),
			'student201s' => array(self::HAS_MANY, 'Student201', 'restriction_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'restriction_code' => 'Restriction Code',
			'restriction_type' => 'Restriction Type',
			'restriction_name' => 'Restriction Name',
			'restriction_description' => 'Restriction Description',
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
		$criteria->compare('restriction_code',$this->restriction_code,true);
		$criteria->compare('restriction_type',$this->restriction_type,true);
		$criteria->compare('restriction_name',$this->restriction_name,true);
		$criteria->compare('restriction_description',$this->restriction_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}