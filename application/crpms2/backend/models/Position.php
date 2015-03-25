<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "position".
 *
 * @property integer $id
 * @property string $position_code
 * @property string $position_name
 *
 * @property Employee[] $employees
 */
class Position extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'position';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['position_code', 'position_name'], 'required'],
            [['position_code', 'position_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'position_code' => 'Position Code',
            'position_name' => 'Position Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployees()
    {
        return $this->hasMany(Employee::className(), ['position_id' => 'id']);
    }
}
