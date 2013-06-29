<?php
/* @var $this TUserController */
/* @var $model TUser */

$this->breadcrumbs=array(
	'用户'=>array('index'),
	$model->ID,
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'添加用户', 'url'=>array('create')),
	array('label'=>'修改用户', 'url'=>array('update', 'id'=>$model->ID)),
	array('label'=>'删除用户', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ID),'confirm'=>'确定要删除此用户?')),
	array('label'=>'用户管理', 'url'=>array('admin')),
);
?>

<!--<h1>View TUser #--><?php //echo $model->ID; ?><!--</h1>-->

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        'ID',
        'USERNAME',
        'SEX',
        'PHONE',
        'PARENT_PHONE',
        'CURRENT_SCHOOL',
        'GRADE',
        'FEE',
		'ACCOMODATION',
        'SIGNUP_CLASS',
        'SIGNUP_TIME',
		'SINGUP_PART',
//		'ADD3',
//		'ADD2',
//		'ADD1',
		'REMARK',
//		'PHOTO',
		'EVALUATE',
		'HOME_ADDRESS',
		'PARENT_REL',
		'PARENT_QQ',

		'PARENT_COMPANY',
		'PARENT_NAME',
		'CLASS',


        'QQ',
		'WEIBO',

		'IDCARD',
		'BIRTHDAY',

		'PASSWORD',
		'NICKNAME',














//		'FEE',
//		'ACCOMODATION',
//		'SINGUP_PART',
//		'SIGNUP_CLASS',
//		'SIGNUP_TIME',
//		'ADD3',
//		'ADD2',
//		'ADD1',
//		'REMARK',
//		'PHOTO',
//		'EVALUATE',
//		'HOME_ADDRESS',
//		'PARENT_REL',
//		'PARENT_QQ',
//		'PARENT_PHONE',
//		'PARENT_COMPANY',
//		'PARENT_NAME',
//		'CLASS',
//		'GRADE',
//		'CURRENT_SCHOOL',
//		'QQ',
//		'WEIBO',
//		'PHONE',
//		'IDCARD',
//		'BIRTHDAY',
//		'SEX',
//		'PASSWORD',
//		'NICKNAME',
//		'USERNAME',
//		'ID',
	),
)); ?>
