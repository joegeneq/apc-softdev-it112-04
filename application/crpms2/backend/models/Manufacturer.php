<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "manufacturer".
 *
 * @property integer $id
 * @property string $manufacturer_name
 * @property string $description
 * @property string $contact_person
 * @property string $address
 * @property string $telephone_number
 * @property string $cellphone_number
 *
 * @property Item[] $items
 */
class Manufacturer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'manufacturer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['manufacturer_name', 'description', 'contact_person', 'address', 'telephone_number', 'cellphone_number'], 'required'],
            [['description'], 'string'],
            [['manufacturer_name', 'contact_person', 'address', 'telephone_number', 'cellphone_number'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'manufacturer_name' => 'Manufacturer Name',
            'description' => 'Description',
            'contact_person' => 'Contact Person',
            'address' => 'Address',
            'telephone_number' => 'Telephone Number',
            'cellphone_number' => 'Cellphone Number',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasMany(Item::className(), ['manufacturer_id' => 'id']);
    }
}
