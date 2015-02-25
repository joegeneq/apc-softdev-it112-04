<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_entry')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_entry); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reference_code')); ?>:</b>
	<?php echo CHtml::encode($data->reference_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location_code')); ?>:</b>
	<?php echo CHtml::encode($data->location_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('shelf_number')); ?>:</b>
	<?php echo CHtml::encode($data->shelf_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bay_number')); ?>:</b>
	<?php echo CHtml::encode($data->bay_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('box_number')); ?>:</b>
	<?php echo CHtml::encode($data->box_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('folder_number')); ?>:</b>
	<?php echo CHtml::encode($data->folder_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accession_number')); ?>:</b>
	<?php echo CHtml::encode($data->accession_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('material_type')); ?>:</b>
	<?php echo CHtml::encode($data->material_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('document_date')); ?>:</b>
	<?php echo CHtml::encode($data->document_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fonds')); ?>:</b>
	<?php echo CHtml::encode($data->fonds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_fonds')); ?>:</b>
	<?php echo CHtml::encode($data->sub_fonds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_sub_fonds')); ?>:</b>
	<?php echo CHtml::encode($data->sub_sub_fonds); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_series')); ?>:</b>
	<?php echo CHtml::encode($data->record_series); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_series')); ?>:</b>
	<?php echo CHtml::encode($data->sub_series); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('file')); ?>:</b>
	<?php echo CHtml::encode($data->file); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item')); ?>:</b>
	<?php echo CHtml::encode($data->item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('record_medium')); ?>:</b>
	<?php echo CHtml::encode($data->record_medium); ?>
	<br />

	*/ ?>

</div>