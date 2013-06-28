<?php
/* @var $this TUSERController */
/* @var $model TUSER */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tuser-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">带有<span class="required">*</span>为必填项</p>

	<?php echo $form->errorSummary($model); ?>
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'ADD3'); ?>
<!--		--><?php //echo $form->textField($model,'ADD3',array('size'=>60,'maxlength'=>255)); ?>
<!--		--><?php //echo $form->error($model,'ADD3'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'ADD2'); ?>
<!--		--><?php //echo $form->textField($model,'ADD2',array('size'=>60,'maxlength'=>255)); ?>
<!--		--><?php //echo $form->error($model,'ADD2'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'ADD1'); ?>
<!--		--><?php //echo $form->textField($model,'ADD1',array('size'=>60,'maxlength'=>255)); ?>
<!--		--><?php //echo $form->error($model,'ADD1'); ?>
<!--	</div>-->


    <div class="row">
        <?php echo $form->labelEx($model,'USERNAME'); ?>
        <?php echo $form->textField($model,'USERNAME',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'USERNAME'); ?>
    </div>
    <div class="row">
        <?php echo $form->labelEx($model,'PASSWORD'); ?>
        <?php echo $form->passwordField($model,'PASSWORD',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'PASSWORD'); ?>
        <p>默认123456</p>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'NICKNAME'); ?>
        <?php echo $form->textField($model,'NICKNAME',array('size'=>60,'maxlength'=>255)); ?>
        <?php echo $form->error($model,'NICKNAME'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'SEX'); ?>
        <?php echo $form->textField($model,'SEX',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'SEX'); ?>
    </div>
<!---->
<!---->
<!--    <div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'PHOTO'); ?>
<!--		--><?php //echo $form->textField($model,'PHOTO',array('size'=>60,'maxlength'=>255)); ?>
<!--		--><?php //echo $form->error($model,'PHOTO'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->labelEx($model,'EVALUATE'); ?>
<!--		--><?php //echo $form->textField($model,'EVALUATE',array('size'=>60,'maxlength'=>2000)); ?>
<!--		--><?php //echo $form->error($model,'EVALUATE'); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->labelEx($model,'HOME_ADDRESS'); ?>
		<?php echo $form->textField($model,'HOME_ADDRESS',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'HOME_ADDRESS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARENT_PHONE'); ?>
		<?php echo $form->textField($model,'PARENT_PHONE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PARENT_PHONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARENT_COMPANY'); ?>
		<?php echo $form->textField($model,'PARENT_COMPANY',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PARENT_COMPANY'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PARENT_NAME'); ?>
		<?php echo $form->textField($model,'PARENT_NAME',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PARENT_NAME'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLASS'); ?>
		<?php echo $form->textField($model,'CLASS',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'CLASS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CURRENT_SCHOOL'); ?>
		<?php echo $form->textField($model,'CURRENT_SCHOOL',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'CURRENT_SCHOOL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'QQ'); ?>
		<?php echo $form->textField($model,'QQ',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'QQ'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'WEIBO'); ?>
		<?php echo $form->textField($model,'WEIBO',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'WEIBO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PHONE'); ?>
		<?php echo $form->textField($model,'PHONE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PHONE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDCARD'); ?>
		<?php echo $form->textField($model,'IDCARD',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'IDCARD'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'BIRTHDAY'); ?>
		<?php echo $form->textField($model,'BIRTHDAY',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'BIRTHDAY'); ?>
	</div>



	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? '添加' : '保存'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->