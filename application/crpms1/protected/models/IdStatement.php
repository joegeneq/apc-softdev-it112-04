<?php

/**
 * This is the model class for table "id_statement".
 *
 * The followings are the available columns in table 'id_statement':
 * @property integer $id
 * @property string $date_of_entry
 * @property string $reference_code
 * @property string $location_code
 * @property string $shelf_number
 * @property string $bay_number
 * @property string $box_number
 * @property string $folder_number
 * @property string $accession_number
 * @property string $material_type
 * @property string $title
 * @property string $document_date
 * @property string $fonds
 * @property string $sub_fonds
 * @property string $sub_sub_fonds
 * @property string $record_series
 * @property string $sub_series
 * @property string $file
 * @property string $item
 * @property string $record_medium
 *
 * The followings are the available model relations:
 * @property RecordsDocuments[] $recordsDocuments
 */
class IdStatement extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return IdStatement the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'id_statement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('date_of_entry, reference_code, location_code, shelf_number, bay_number, box_number, folder_number, accession_number, material_type, title, document_date, fonds, sub_fonds, sub_sub_fonds, record_series, sub_series, file, item, record_medium', 'required'),
			array('reference_code', 'length', 'max'=>60),
			array('location_code', 'length', 'max'=>30),
			array('shelf_number, bay_number, box_number, folder_number', 'length', 'max'=>8),
			array('accession_number, material_type, title, document_date, fonds, sub_fonds, sub_sub_fonds, record_series, sub_series, file, item, record_medium', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, date_of_entry, reference_code, location_code, shelf_number, bay_number, box_number, folder_number, accession_number, material_type, title, document_date, fonds, sub_fonds, sub_sub_fonds, record_series, sub_series, file, item, record_medium', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'recordsDocuments' => array(self::HAS_MANY, 'RecordsDocuments', 'id_statement_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'date_of_entry' => 'Date Of Entry',
			'reference_code' => 'Reference Code',
			'location_code' => 'Location Code',
			'shelf_number' => 'Shelf Number',
			'bay_number' => 'Bay Number',
			'box_number' => 'Box Number',
			'folder_number' => 'Folder Number',
			'accession_number' => 'Accession Number',
			'material_type' => 'Material Type',
			'title' => 'Title',
			'document_date' => 'Document Date',
			'fonds' => 'Fonds',
			'sub_fonds' => 'Sub Fonds',
			'sub_sub_fonds' => 'Sub Sub Fonds',
			'record_series' => 'Record Series',
			'sub_series' => 'Sub Series',
			'file' => 'File',
			'item' => 'Item',
			'record_medium' => 'Record Medium',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('date_of_entry',$this->date_of_entry,true);
		$criteria->compare('reference_code',$this->reference_code,true);
		$criteria->compare('location_code',$this->location_code,true);
		$criteria->compare('shelf_number',$this->shelf_number,true);
		$criteria->compare('bay_number',$this->bay_number,true);
		$criteria->compare('box_number',$this->box_number,true);
		$criteria->compare('folder_number',$this->folder_number,true);
		$criteria->compare('accession_number',$this->accession_number,true);
		$criteria->compare('material_type',$this->material_type,true);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('document_date',$this->document_date,true);
		$criteria->compare('fonds',$this->fonds,true);
		$criteria->compare('sub_fonds',$this->sub_fonds,true);
		$criteria->compare('sub_sub_fonds',$this->sub_sub_fonds,true);
		$criteria->compare('record_series',$this->record_series,true);
		$criteria->compare('sub_series',$this->sub_series,true);
		$criteria->compare('file',$this->file,true);
		$criteria->compare('item',$this->item,true);
		$criteria->compare('record_medium',$this->record_medium,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}