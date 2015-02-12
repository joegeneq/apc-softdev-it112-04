<?php

/**
 * This is the model class for table "department".
 *
 * The followings are the available columns in table 'department':
 * @property integer $id
 * @property string $department_code
 * @property string $department_name
 * @property string $department_description
 *
 * The followings are the available model relations:
 * @property CommunicationTracking[] $communicationTrackings
 * @property Employee201[] $employee201s
 * @property Record[] $records
 * @property RecordIssuance[] $recordIssuances
 */
class Department extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Department the static model class
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
		return 'department';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('department_code, department_name', 'required'),
			array('department_code', 'length', 'max'=>45),
			array('department_name', 'length', 'max'=>100),
			array('department_description', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, department_code, department_name, department_description', 'safe', 'on'=>'search'),
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
			'communicationTrackings' => array(self::HAS_MANY, 'CommunicationTracking', 'department_id'),
			'employee201s' => array(self::HAS_MANY, 'Employee201', 'department_id'),
			'records' => array(self::HAS_MANY, 'Record', 'department_id'),
			'recordIssuances' => array(self::HAS_MANY, 'RecordIssuance', 'department_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'department_code' => 'Department Code',
			'department_name' => 'Department Name',
			'department_description' => 'Department Description',
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
		$criteria->compare('department_code',$this->department_code,true);
		$criteria->compare('department_name',$this->department_name,true);
		$criteria->compare('department_description',$this->department_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}