<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "personal".
 *
 * @property integer $id
 * @property string $name
 * @property integer $age
 * @property string $address
 */
class Personal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'personal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'age', 'address'], 'required'],
            [['age'], 'integer'],
            [['name'], 'string', 'max' => 45],
            [['address'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'age' => 'Age',
            'address' => 'Address',
        ];
    }
}
