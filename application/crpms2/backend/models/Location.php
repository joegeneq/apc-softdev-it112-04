<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "location".
 *
 * @property integer $id
 * @property string $location_code
 * @property string $location_name
 *
 * @property StockInventory[] $stockInventories
 * @property StockIssueDetails[] $stockIssueDetails
 */
class Location extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'location';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['location_code', 'location_name'], 'required'],
            [['location_code', 'location_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'location_code' => 'Location Code',
            'location_name' => 'Location Name',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockInventories()
    {
        return $this->hasMany(StockInventory::className(), ['location_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getStockIssueDetails()
    {
        return $this->hasMany(StockIssueDetails::className(), ['location_id' => 'id']);
    }
}
