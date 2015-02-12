<?php

/**
 * This is the model class for table "student".
 *
 * The followings are the available columns in table 'student':
 * @property integer $student_id
 * @property string $date_of_registration
 * @property string $date_of_latest_logon
 * @property string $login_name
 * @property string $password
 * @property string $personal_name
 * @property string $middle_name
 * @property string $student_lastname
 * @property string $other_details
 * @property integer $Account_ID
 * @property integer $Account_administrator_id
 *
 * The followings are the available model relations:
 * @property Account $account
 * @property Account $accountAdministrator
 * @property StudentCourseEnrollment[] $studentCourseEnrollments
 */
class Student extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Student the static model class
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
		return 'student';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('student_id, date_of_registration, date_of_latest_logon, login_name, password, personal_name, middle_name, student_lastname, Account_ID, Account_administrator_id', 'required'),
			array('student_id, Account_ID, Account_administrator_id', 'numerical', 'integerOnly'=>true),
			array('login_name, password, personal_name, middle_name, student_lastname, other_details', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('student_id, date_of_registration, date_of_latest_logon, login_name, password, personal_name, middle_name, student_lastname, other_details, Account_ID, Account_administrator_id', 'safe', 'on'=>'search'),
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
			'account' => array(self::BELONGS_TO, 'Account', 'Account_ID'),
			'accountAdministrator' => array(self::BELONGS_TO, 'Account', 'Account_administrator_id'),
			'studentCourseEnrollments' => array(self::HAS_MANY, 'StudentCourseEnrollment', 'Student_student_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'student_id' => 'Student',
			'date_of_registration' => 'Date Of Registration',
			'date_of_latest_logon' => 'Date Of Latest Logon',
			'login_name' => 'Login Name',
			'password' => 'Password',
			'personal_name' => 'Personal Name',
			'middle_name' => 'Middle Name',
			'student_lastname' => 'Student Lastname',
			'other_details' => 'Other Details',
			'Account_ID' => 'Account',
			'Account_administrator_id' => 'Account Administrator',
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

		$criteria->compare('student_id',$this->student_id);
		$criteria->compare('date_of_registration',$this->date_of_registration,true);
		$criteria->compare('date_of_latest_logon',$this->date_of_latest_logon,true);
		$criteria->compare('login_name',$this->login_name,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('personal_name',$this->personal_name,true);
		$criteria->compare('middle_name',$this->middle_name,true);
		$criteria->compare('student_lastname',$this->student_lastname,true);
		$criteria->compare('other_details',$this->other_details,true);
		$criteria->compare('Account_ID',$this->Account_ID);
		$criteria->compare('Account_administrator_id',$this->Account_administrator_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}