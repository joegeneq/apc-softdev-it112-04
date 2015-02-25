<?php

/**
 * This is the model class for table "administrator".
 *
 * The followings are the available columns in table 'administrator':
 * @property integer $id
 * @property string $administration_account
 * @property string $administration_pass
 * @property string $admin_timein
 * @property string $admin_timeout
 *
 * The followings are the available model relations:
 * @property Account[] $accounts
 * @property Archives[] $archives
 * @property CheckOutSystem[] $checkOutSystems
 * @property CommunicationTracking[] $communicationTrackings
 * @property Record[] $records
 * @property RecordIssuance[] $recordIssuances
 */
class Administrator extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Administrator the static model class
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
		return 'administrator';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('administration_account, administration_pass, admin_timein, admin_timeout', 'required'),
			array('administration_account, administration_pass', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, administration_account, administration_pass, admin_timein, admin_timeout', 'safe', 'on'=>'search'),
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
			'accounts' => array(self::HAS_MANY, 'Account', 'administrator_id'),
			'archives' => array(self::HAS_MANY, 'Archives', 'administrator_id'),
			'checkOutSystems' => array(self::HAS_MANY, 'CheckOutSystem', 'administrator_id'),
			'communicationTrackings' => array(self::HAS_MANY, 'CommunicationTracking', 'administrator_id'),
			'records' => array(self::HAS_MANY, 'Record', 'administrator_id'),
			'recordIssuances' => array(self::HAS_MANY, 'RecordIssuance', 'administrator_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'administration_account' => 'Administration Account',
			'administration_pass' => 'Administration Pass',
			'admin_timein' => 'Admin Timein',
			'admin_timeout' => 'Admin Timeout',
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
		$criteria->compare('administration_account',$this->administration_account,true);
		$criteria->compare('administration_pass',$this->administration_pass,true);
		$criteria->compare('admin_timein',$this->admin_timein,true);
		$criteria->compare('admin_timeout',$this->admin_timeout,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}