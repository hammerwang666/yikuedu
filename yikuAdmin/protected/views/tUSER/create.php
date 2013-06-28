<?php
/* @var $this TUSERController */
/* @var $model TUSER */

$this->breadcrumbs=array(
	'Tusers'=>array('index'),
	'添加用户',
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'用户管理', 'url'=>array('admin')),
);
?>

<h1>添加用户</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>