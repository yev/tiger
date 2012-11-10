<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Id'); ?>
		<?php echo $form->textField($model,'Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_connection_date'); ?>
		<?php echo $form->textField($model,'last_connection_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'creataion_date'); ?>
		<?php echo $form->textField($model,'creataion_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Billing_Account_Id'); ?>
		<?php echo $form->textField($model,'Billing_Account_Id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'Tarif_ID'); ?>
		<?php echo $form->textField($model,'Tarif_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->