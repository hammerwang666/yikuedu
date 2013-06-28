<?php
/* @var $this TUSERController */
/* @var $model TUSER */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ADD3'); ?>
<!--		--><?php //echo $form->textField($model,'ADD3',array('size'=>60,'maxlength'=>255)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ADD2'); ?>
<!--		--><?php //echo $form->textField($model,'ADD2',array('size'=>60,'maxlength'=>255)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ADD1'); ?>
<!--		--><?php //echo $form->textField($model,'ADD1',array('size'=>60,'maxlength'=>255)); ?>
<!--	</div>-->

    <div class="row">
        <?php echo $form->label($model,'SEX'); ?>
        <?php echo $form->textField($model,'SEX',array('size'=>20,'maxlength'=>20)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'PASSWORD'); ?>
        <?php echo $form->passwordField($model,'PASSWORD',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'NICKNAME'); ?>
        <?php echo $form->textField($model,'NICKNAME',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'USERNAME'); ?>
        <?php echo $form->textField($model,'USERNAME',array('size'=>60,'maxlength'=>255)); ?>
    </div>
<!--    -->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'PHOTO'); ?>
<!--		--><?php //echo $form->textField($model,'PHOTO',array('size'=>60,'maxlength'=>255)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'EVALUATE'); ?>
<!--		--><?php //echo $form->textField($model,'EVALUATE',array('size'=>60,'maxlength'=>2000)); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->label($model,'HOME_ADDRESS'); ?>
		<?php echo $form->textField($model,'HOME_ADDRESS',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARENT_PHONE'); ?>
		<?php echo $form->textField($model,'PARENT_PHONE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARENT_COMPANY'); ?>
		<?php echo $form->textField($model,'PARENT_COMPANY',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARENT_NAME'); ?>
		<?php echo $form->textField($model,'PARENT_NAME',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLASS'); ?>
		<?php echo $form->textField($model,'CLASS',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CURRENT_SCHOOL'); ?>
		<?php echo $form->textField($model,'CURRENT_SCHOOL',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'QQ'); ?>
		<?php echo $form->textField($model,'QQ',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'WEIBO'); ?>
		<?php echo $form->textField($model,'WEIBO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PHONE'); ?>
		<?php echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDCARD'); ?>
		<?php echo $form->textField($model,'IDCARD',array('size'=>60,'maxlength'=>255)); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'BIRTHDAY'); ?>
<!--		--><?php //echo $form->textField($model,'BIRTHDAY',array('size'=>60,'maxlength'=>255)); ?>
<!--	</div>-->


<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ID'); ?>
<!--		--><?php //echo $form->textField($model,'ID'); ?>
<!--	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('搜索'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->