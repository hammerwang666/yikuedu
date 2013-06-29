<?php
/* @var $this TUserController */
/* @var $model TUser */

$this->breadcrumbs=array(
	'用户'=>array('index'),
	'用户管理',
);

$this->menu=array(
	array('label'=>'用户列表', 'url'=>array('index')),
	array('label'=>'添加用户', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tuser-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!--<h1>用户管理</h1>-->

<!--<p>-->
<!--You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>-->
<!--or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.-->
<!--</p>-->

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tuser-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        'ID',
        'USERNAME',
        'SEX',
        'PHONE',
        'PARENT_PHONE',
        'CURRENT_SCHOOL',
        'GRADE',


		'FEE',
//		'ACCOMODATION',
        'SIGNUP_CLASS',
        'SIGNUP_TIME',
//		'SINGUP_PART',


//		'ADD3',
//		'ADD2',
//		'ADD1',
//		'REMARK',
//		'PHOTO',
//		'EVALUATE',
//		'HOME_ADDRESS',
//		'PARENT_REL',
//		'PARENT_QQ',

//		'PARENT_COMPANY',
//		'PARENT_NAME',
//		'CLASS',


		'QQ',
//		'WEIBO',

//		'IDCARD',
//		'BIRTHDAY',

//		'PASSWORD',
//		'NICKNAME',


		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
