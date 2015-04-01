<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "return_item_header".
 *
 * @property integer $id
 * @property integer $patient_id
 * @property string $return_item_header_code
 * @property integer $location_id
 * @property integer $bed_id
 * @property integer $item_id
 * @property integer $quantity
 * @property string $amount
 * @property string $remarks
 * @property string $created
 *
 * @property ReturnItemDetails[] $returnItemDetails
 * @property Location $location
 * @property Bed $bed
 * @property Item $item
 * @property Patient $patient
 */
class ReturnItemHeader extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'return_item_header';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['patient_id', 'return_item_header_code', 'location_id', 'bed_id', 'item_id', 'quantity', 'amount'], 'required'],
            [['patient_id', 'location_id', 'bed_id', 'item_id', 'quantity'], 'integer'],
            [['amount'], 'number'],
            [['remarks'], 'string'],
            [['created'], 'safe'],
            [['return_item_header_code'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'patient_id' => 'Patient ID',
            'return_item_header_code' => 'Return Item Header Code',
            'location_id' => 'Location ID',
            'bed_id' => 'Bed ID',
            'item_id' => 'Item ID',
            'quantity' => 'Quantity',
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'created' => 'Created',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getReturnItemDetails()
    {
        return $this->hasMany(ReturnItemDetails::className(), ['return_item_header_id' => 'id']);
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
    public function getBed()
    {
        return $this->hasOne(Bed::className(), ['id' => 'bed_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Item::className(), ['id' => 'item_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPatient()
    {
        return $this->hasOne(Patient::className(), ['id' => 'patient_id']);
    }
}
