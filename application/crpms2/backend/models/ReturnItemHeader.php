<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "return_item_header".
 *
 * @property integer $id
 * @property integer $patient_id
 * @property string $return_item_header_code
 * @property integer $location_id
 * @property integer $bed_id
 * @property string $amount
 * @property string $remarks
 * @property string $created
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
            [['patient_id', 'return_item_header_code', 'location_id', 'bed_id', 'amount'], 'required'],
            [['patient_id', 'location_id', 'bed_id'], 'integer'],
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
            'amount' => 'Amount',
            'remarks' => 'Remarks',
            'created' => 'Created',
        ];
    }
}
