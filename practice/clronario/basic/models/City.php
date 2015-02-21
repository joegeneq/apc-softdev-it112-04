<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "city".
 *
 * @property integer $id
 * @property string $city_code
 * @property string $city_description
 * @property integer $province_id
 *
 * @property Province $province
 */
class City extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'city';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'city_code', 'city_description', 'province_id'], 'required'],
            [['id', 'province_id'], 'integer'],
            [['city_code', 'city_description'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'city_code' => 'City Code',
            'city_description' => 'City Description',
            'province_id' => 'Province ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProvince()
    {
        return $this->hasOne(Province::className(), ['id' => 'province_id']);
    }
}
