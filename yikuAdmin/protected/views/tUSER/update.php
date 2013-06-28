<?php
/* @var $this TUSERController */
/* @var $model TUSER */

$this->breadcrumbs=array(
	'用户管理'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'修改用户',
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'添加用户', 'url'=>array('create')),
	array('label'=>'用户详情', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'管理用户', 'url'=>array('admin')),
);
?>

<h1>修改用户:<?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>