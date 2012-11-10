<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('Id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->Id), array('view', 'id'=>$data->Id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('first_name')); ?>:</b>
	<?php echo CHtml::encode($data->first_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_name')); ?>:</b>
	<?php echo CHtml::encode($data->last_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_connection_date')); ?>:</b>
	<?php echo CHtml::encode($data->last_connection_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creataion_date')); ?>:</b>
	<?php echo CHtml::encode($data->creataion_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Billing_Account_Id')); ?>:</b>
	<?php echo CHtml::encode($data->Billing_Account_Id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('Tarif_ID')); ?>:</b>
	<?php echo CHtml::encode($data->Tarif_ID); ?>
	<br />

	*/ ?>

</div>