<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "bed_status".
 *
 * @property integer $id
 * @property string $status_name
 * @property string $description
 *
 * @property Bed[] $beds
 */
class BedStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bed_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status_name'], 'required'],
            [['description'], 'string'],
            [['status_name'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status_name' => 'Status Name',
            'description' => 'Description',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBeds()
    {
        return $this->hasMany(Bed::className(), ['bed_status_id' => 'id']);
    }
}
