<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bed".
 *
 * @property integer $id
 * @property string $bed_code
 * @property integer $bed_number
 * @property integer $location_id
 * @property string $bed_description
 * @property string $bed_comments
 * @property integer $bed_status_id
 *
 * @property Location $location
 * @property BedStatus $bedStatus
 * @property ReturnItemHeader[] $returnItemHeaders
 */
class Bed extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bed';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['bed_code', 'bed_number', 'location_id', 'bed_status_id'], 'required'],
            [['bed_number', 'location_id', 'bed_status_id'], 'integer'],
            [['bed_description', 'bed_comments'], 'string'],
            [['bed_code'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'bed_code' => 'Bed Code',
            'bed_number' => 'Bed Number',
            'location_id' => 'Location Name',
            'bed_description' => 'Bed Description',
            'bed_comments' => 'Bed Comments',
            'bed_status_id' => 'Bed Status ',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation()
    {
        return $this->hasOne(Location::className(), ['id' => 'location_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBedStatus()
    {
        return $this->hasOne(BedStatus::className(), ['id' => 'bed_status_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnItemHeaders()
    {
        return $this->hasMany(ReturnItemHeader::className(), ['bed_id' => 'id']);
    }
}
