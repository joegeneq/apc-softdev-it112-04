<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "employee".
 *
 * @property integer $id
 * @property string $emp_code
 * @property string $firstname
 * @property string $lastname
 * @property string $middlename
 * @property string $address
 * @property string $contact_number
 * @property integer $position_id
 * @property integer $user_id
 *
 * @property Position $position
 * @property User $user
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employee';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['emp_code', 'firstname', 'lastname', 'middlename', 'address', 'contact_number', 'position_id', 'user_id'], 'required'],
            [['position_id', 'user_id'], 'integer'],
            [['emp_code', 'firstname', 'lastname', 'middlename', 'address', 'contact_number'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'emp_code' => 'Emp Code',
            'firstname' => 'Firstname',
            'lastname' => 'Lastname',
            'middlename' => 'Middlename',
            'address' => 'Address',
            'contact_number' => 'Contact Number',
            'position_id' => 'Position ID',
            'user_id' => 'User ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPosition()
    {
        return $this->hasOne(Position::className(), ['id' => 'position_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
