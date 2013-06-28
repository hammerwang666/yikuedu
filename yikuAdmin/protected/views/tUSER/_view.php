<?php
/* @var $this TUSERController */
/* @var $data TUSER */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('ADD3')); ?><!--:</b>-->
	<?php echo CHtml::encode($data->ADD3); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('ADD2')); ?><!--:</b>-->
	<?php echo CHtml::encode($data->ADD2); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('ADD1')); ?><!--:</b>-->
	<?php echo CHtml::encode($data->ADD1); ?>
<!--	<br />-->
<!---->
<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('PHOTO')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->PHOTO); ?>
<!--	<br />-->
    <b><?php echo CHtml::encode($data->getAttributeLabel('NICKNAME')); ?>:</b>
    <?php echo CHtml::encode($data->NICKNAME); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('SEX')); ?>:</b>
    <?php echo CHtml::encode($data->SEX); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
    <?php echo CHtml::encode($data->PASSWORD); ?>
    <br />


	<b><?php echo CHtml::encode($data->getAttributeLabel('EVALUATE')); ?>:</b>
	<?php echo CHtml::encode($data->EVALUATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOME_ADDRESS')); ?>:</b>
	<?php echo CHtml::encode($data->HOME_ADDRESS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('PARENT_PHONE')); ?>:</b>
	<?php echo CHtml::encode($data->PARENT_PHONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARENT_COMPANY')); ?>:</b>
	<?php echo CHtml::encode($data->PARENT_COMPANY); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PARENT_NAME')); ?>:</b>
	<?php echo CHtml::encode($data->PARENT_NAME); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLASS')); ?>:</b>
	<?php echo CHtml::encode($data->CLASS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('QQ')); ?>:</b>
	<?php echo CHtml::encode($data->QQ); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('WEIBO')); ?>:</b>
	<?php echo CHtml::encode($data->WEIBO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PHONE')); ?>:</b>
	<?php echo CHtml::encode($data->PHONE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDCARD')); ?>:</b>
	<?php echo CHtml::encode($data->IDCARD); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('BIRTHDAY')); ?>:</b>
	<?php echo CHtml::encode($data->BIRTHDAY); ?>
	<br />


	*/ ?>

</div>