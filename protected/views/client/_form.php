<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'client-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_connection_date'); ?>
		<?php echo $form->textField($model,'last_connection_date'); ?>
		<?php echo $form->error($model,'last_connection_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'creataion_date'); ?>
		<?php echo $form->textField($model,'creataion_date'); ?>
		<?php echo $form->error($model,'creataion_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Billing_Account_Id'); ?>
		<?php echo $form->textField($model,'Billing_Account_Id'); ?>
		<?php echo $form->error($model,'Billing_Account_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Tarif_ID'); ?>
		<?php echo $form->textField($model,'Tarif_ID'); ?>
		<?php echo $form->error($model,'Tarif_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->