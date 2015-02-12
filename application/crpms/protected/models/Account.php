<?php

/**
 * This is the model class for table "account".
 *
 * The followings are the available columns in table 'account':
 * @property integer $ID
 * @property string $account_username
 * @property string $account_password
 * @property string $account_type
 * @property string $account_number
 * @property integer $user_admin
 * @property integer $user_guest
 * @property integer $user_student
 * @property integer $accAStu
 * @property integer $search
 * @property integer $reports
 * @property integer $rightsAdd
 * @property integer $rightsEdit
 * @property integer $rightsDelete
 * @property integer $rightsView
 * @property integer $administrator_id
 *
 * The followings are the available model relations:
 * @property Administrator $administrator
 * @property Restriction[] $restrictions
 * @property Restriction[] $restrictions1
 * @property Student[] $students
 * @property Student[] $students1
 */
class Account extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Account the static model class
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
		return 'account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ID, account_username, account_password, account_type, account_number, administrator_id', 'required'),
			array('ID, user_admin, user_guest, user_student, accAStu, search, reports, rightsAdd, rightsEdit, rightsDelete, rightsView, administrator_id', 'numerical', 'integerOnly'=>true),
			array('account_username, account_password, account_type, account_number', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ID, account_username, account_password, account_type, account_number, user_admin, user_guest, user_student, accAStu, search, reports, rightsAdd, rightsEdit, rightsDelete, rightsView, administrator_id', 'safe', 'on'=>'search'),
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
			'administrator' => array(self::BELONGS_TO, 'Administrator', 'administrator_id'),
			'restrictions' => array(self::HAS_MANY, 'Restriction', 'Account_ID'),
			'restrictions1' => array(self::HAS_MANY, 'Restriction', 'Account_administrator_id'),
			'students' => array(self::HAS_MANY, 'Student', 'Account_ID'),
			'students1' => array(self::HAS_MANY, 'Student', 'Account_administrator_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ID' => 'ID',
			'account_username' => 'Account Username',
			'account_password' => 'Account Password',
			'account_type' => 'Account Type',
			'account_number' => 'Account Number',
			'user_admin' => 'User Admin',
			'user_guest' => 'User Guest',
			'user_student' => 'User Student',
			'accAStu' => 'Acc Astu',
			'search' => 'Search',
			'reports' => 'Reports',
			'rightsAdd' => 'Rights Add',
			'rightsEdit' => 'Rights Edit',
			'rightsDelete' => 'Rights Delete',
			'rightsView' => 'Rights View',
			'administrator_id' => 'Administrator',
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

		$criteria->compare('ID',$this->ID);
		$criteria->compare('account_username',$this->account_username,true);
		$criteria->compare('account_password',$this->account_password,true);
		$criteria->compare('account_type',$this->account_type,true);
		$criteria->compare('account_number',$this->account_number,true);
		$criteria->compare('user_admin',$this->user_admin);
		$criteria->compare('user_guest',$this->user_guest);
		$criteria->compare('user_student',$this->user_student);
		$criteria->compare('accAStu',$this->accAStu);
		$criteria->compare('search',$this->search);
		$criteria->compare('reports',$this->reports);
		$criteria->compare('rightsAdd',$this->rightsAdd);
		$criteria->compare('rightsEdit',$this->rightsEdit);
		$criteria->compare('rightsDelete',$this->rightsDelete);
		$criteria->compare('rightsView',$this->rightsView);
		$criteria->compare('administrator_id',$this->administrator_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}