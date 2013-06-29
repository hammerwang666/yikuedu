<?php
/* @var $this TUserController */
/* @var $model TUser */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


    <div class="row">
        <?php echo $form->label($model,'ID'); ?>
        <?php echo $form->textField($model,'ID'); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'USERNAME'); ?>
        <?php echo $form->textField($model,'USERNAME',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'SEX'); ?>
        <?php echo $form->textField($model,'SEX',array('size'=>20,'maxlength'=>20)); ?>
    </div>


    <div class="row">
        <?php echo $form->label($model,'PHONE'); ?>
        <?php echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'IDCARD'); ?>
        <?php echo $form->textField($model,'IDCARD',array('size'=>60,'maxlength'=>255)); ?>
    </div>

    <div class="row">
        <?php echo $form->label($model,'BIRTHDAY'); ?>
        <?php echo $form->textField($model,'BIRTHDAY',array('size'=>60,'maxlength'=>255)); ?>
    </div>






    <div class="row">
		<?php echo $form->label($model,'FEE'); ?>
		<?php echo $form->textField($model,'FEE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ACCOMODATION'); ?>
		<?php echo $form->textField($model,'ACCOMODATION',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SINGUP_PART'); ?>
		<?php echo $form->textField($model,'SINGUP_PART',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SIGNUP_CLASS'); ?>
		<?php echo $form->textField($model,'SIGNUP_CLASS',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SIGNUP_TIME'); ?>
		<?php echo $form->textField($model,'SIGNUP_TIME',array('size'=>60,'maxlength'=>255)); ?>
	</div>



	<div class="row">
		<?php echo $form->label($model,'REMARK'); ?>
		<?php echo $form->textField($model,'REMARK',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PHOTO'); ?>
		<?php echo $form->textField($model,'PHOTO',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVALUATE'); ?>
		<?php echo $form->textField($model,'EVALUATE',array('size'=>60,'maxlength'=>2000)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOME_ADDRESS'); ?>
		<?php echo $form->textField($model,'HOME_ADDRESS',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARENT_REL'); ?>
		<?php echo $form->textField($model,'PARENT_REL',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PARENT_QQ'); ?>
		<?php echo $form->textField($model,'PARENT_QQ',array('size'=>60,'maxlength'=>255)); ?>
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
		<?php echo $form->label($model,'GRADE'); ?>
		<?php echo $form->textField($model,'GRADE',array('size'=>60,'maxlength'=>255)); ?>
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








	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->