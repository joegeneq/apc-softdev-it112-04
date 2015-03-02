<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "myaddress".
 *
 * @property integer $id
 * @property string $firstname
 * @property string $middlename
 * @property string $lastname
 * @property string $gender
 * @property string $created_at
 * @property string $home_address
 * @property string $landline
 * @property string $cellphone
 *
 * @property Mycomment[] $mycomments
 */
class Myaddress extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'myaddress';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['firstname', 'middlename', 'lastname', 'gender'], 'required'],
            [['created_at'], 'safe'],
            [['firstname', 'middlename', 'lastname'], 'string', 'max' => 30],
            [['gender'], 'string', 'max' => 1],
            [['home_address'], 'string', 'max' => 50],
            [['landline', 'cellphone'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'Firstname',
            'middlename' => 'Middlename',
            'lastname' => 'Lastname',
            'gender' => 'Gender',
            'created_at' => 'Created At',
            'home_address' => 'Home Address',
            'landline' => 'Landline',
            'cellphone' => 'Cellphone',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMycomments()
    {
        return $this->hasMany(Mycomment::className(), ['myaddress_id' => 'id']);
    }
}
