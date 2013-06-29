<?php
/* @var $this TUserController */
/* @var $data TUser */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('USERNAME')); ?>:</b>
    <?php echo CHtml::encode($data->USERNAME); ?>
    <br />


    <b><?php echo CHtml::encode($data->getAttributeLabel('SEX')); ?>:</b>
    <?php echo CHtml::encode($data->SEX); ?>
    <br />



    <b><?php echo CHtml::encode($data->getAttributeLabel('SIGNUP_TIME')); ?>:</b>
	<?php echo CHtml::encode($data->SIGNUP_TIME); ?>
	<br />







	<b><?php echo CHtml::encode($data->getAttributeLabel('REMARK')); ?>:</b>
	<?php echo CHtml::encode($data->REMARK); ?>
	<br />



	<b><?php echo CHtml::encode($data->getAttributeLabel('PHONE')); ?>:</b>
	<?php echo CHtml::encode($data->PHONE); ?>
	<br />








</div>