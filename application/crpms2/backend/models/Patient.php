<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "patient".
 *
 * @property integer $id
 * @property string $patient_id_no
 * @property string $lastname
 * @property string $firstname
 * @property string $middlename
 * @property string $address
 * @property string $birthdate
 * @property integer $telephone_number
 * @property integer $cellphone_number
 * @property string $email_address
 * @property string $created_at
 *
 * @property ReturnItemHeader[] $returnItemHeaders
 */
class Patient extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'patient';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id_no', 'lastname', 'firstname', 'middlename', 'address', 'birthdate'], 'required'],
            [['birthdate', 'created_at'], 'safe'],
            [['telephone_number', 'cellphone_number'], 'integer'],
            [['patient_id_no'], 'string', 'max' => 20],
            [['lastname', 'firstname', 'address', 'email_address'], 'string', 'max' => 25],
            [['middlename'], 'string', 'max' => 10]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id_no' => 'Patient Id No',
            'lastname' => 'Lastname',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'address' => 'Address',
            'birthdate' => 'Birthdate',
            'telephone_number' => 'Telephone Number',
            'cellphone_number' => 'Cellphone Number',
            'email_address' => 'Email Address',
            'created_at' => 'Created At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnItemHeaders()
    {
        return $this->hasMany(ReturnItemHeader::className(), ['patient_id' => 'id']);
    }
}
