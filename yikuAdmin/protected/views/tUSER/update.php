<?php
/* @var $this TUserController */
/* @var $model TUser */

$this->breadcrumbs=array(
	'用户'=>array('index'),
	$model->ID=>array('view','id'=>$model->ID),
	'修改用户',
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'添加用户', 'url'=>array('create')),
	array('label'=>'用户详情', 'url'=>array('view', 'id'=>$model->ID)),
	array('label'=>'修改用户', 'url'=>array('admin')),
);
?>

<h1>Update TUser <?php echo $model->ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>