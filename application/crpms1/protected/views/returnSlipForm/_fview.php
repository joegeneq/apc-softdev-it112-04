<div class="view">
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date_of_entry')); ?>:</b>
	<?php echo CHtml::encode($data->date_of_entry); ?>
	<br />
*/ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('reference_code')); ?>:</b>
	<?php echo CHtml::encode($data->reference_code); ?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('shelf_number')); ?>:</b>
	<?php echo CHtml::encode($data->shelf_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bay_number')); ?>:</b>
	<?php echo CHtml::encode($data->bay_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('box_number')); ?>:</b>
	<?php echo CHtml::encode($data->box_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('folder_number')); ?>:</b>
	<?php echo CHtml::encode($data->folder_number); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('accession_number')); ?>:</b>
	<?php echo CHtml::encode($data->accession_number); ?>
	<br />
*/ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_location_code')); ?>:</b>
	<?php echo CHtml::encode($data->employee_location_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_title')); ?>:</b>
	<?php echo CHtml::encode($data->employee_title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('restriction_id')); ?>:</b>
	<?php echo CHtml::encode($data->restriction_id); ?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('date_duration')); ?>:</b>
	<?php echo CHtml::encode($data->date_duration); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fonds_id')); ?>:</b>
	<?php echo CHtml::encode($data->fonds_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_fonds_id')); ?>:</b>
	<?php echo CHtml::encode($data->sub_fonds_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sub_sub_fonds_id')); ?>:</b>
	<?php echo CHtml::encode($data->sub_sub_fonds_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_supplementary_document')); ?>:</b>
	<?php echo CHtml::encode($data->employee_supplementary_document); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_number')); ?>:</b>
	<?php echo CHtml::encode($data->employee_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_last_name')); ?>:</b>
	<?php echo CHtml::encode($data->employee_last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_first_name')); ?>:</b>
	<?php echo CHtml::encode($data->employee_first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_middle_name')); ?>:</b>
	<?php echo CHtml::encode($data->employee_middle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->employee_date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_date_of_hired')); ?>:</b>
	<?php echo CHtml::encode($data->employee_date_of_hired); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('department_id')); ?>:</b>
	<?php echo CHtml::encode($data->department_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_position')); ?>:</b>
	<?php echo CHtml::encode($data->employee_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_last_employment_status')); ?>:</b>
	<?php echo CHtml::encode($data->employee_last_employment_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_last_basic_pay')); ?>:</b>
	<?php echo CHtml::encode($data->employee_last_basic_pay); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_date_separated')); ?>:</b>
	<?php echo CHtml::encode($data->employee_date_separated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_nature_of_separation')); ?>:</b>
	<?php echo CHtml::encode($data->employee_nature_of_separation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_reason_for_separation')); ?>:</b>
	<?php echo CHtml::encode($data->employee_reason_for_separation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_sex')); ?>:</b>
	<?php echo CHtml::encode($data->employee_sex); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_civil_status')); ?>:</b>
	<?php echo CHtml::encode($data->employee_civil_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_recent_address')); ?>:</b>
	<?php echo CHtml::encode($data->employee_recent_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_contact_number')); ?>:</b>
	<?php echo CHtml::encode($data->employee_contact_number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_pag_ibig')); ?>:</b>
	<?php echo CHtml::encode($data->employee_pag_ibig); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_philhealth')); ?>:</b>
	<?php echo CHtml::encode($data->employee_philhealth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_sss')); ?>:</b>
	<?php echo CHtml::encode($data->employee_sss); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_tin')); ?>:</b>
	<?php echo CHtml::encode($data->employee_tin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_professional_license')); ?>:</b>
	<?php echo CHtml::encode($data->employee_professional_license); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_graduate_degree')); ?>:</b>
	<?php echo CHtml::encode($data->employee_graduate_degree); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_school')); ?>:</b>
	<?php echo CHtml::encode($data->employee_school); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_school_year')); ?>:</b>
	<?php echo CHtml::encode($data->employee_school_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_year_graduated')); ?>:</b>
	<?php echo CHtml::encode($data->employee_year_graduated); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_out_employer_company')); ?>:</b>
	<?php echo CHtml::encode($data->work_out_employer_company); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_out_position')); ?>:</b>
	<?php echo CHtml::encode($data->work_out_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_out_year')); ?>:</b>
	<?php echo CHtml::encode($data->work_out_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_in_department')); ?>:</b>
	<?php echo CHtml::encode($data->work_in_department); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('work_in_position')); ?>:</b>
	<?php echo CHtml::encode($data->work_in_position); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('school_year')); ?>:</b>
	<?php echo CHtml::encode($data->school_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('final_rating')); ?>:</b>
	<?php echo CHtml::encode($data->final_rating); ?>
	<br />
		*/ ?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('employee_attachment')); ?>:</b>
	<?php echo CHtml::encode($data->employee_attachment); ?>
	<br />



</div>