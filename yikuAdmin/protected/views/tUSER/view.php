<?php
/* @var $this TUSERController */
/* @var $model TUSER */

$this->breadcrumbs = array(
    'Tusers' => array('index'),
    $model->ID,
);

$this->menu = array(
    array('label' => 'List TUSER', 'url' => array('index')),
    array('label' => 'Create TUSER', 'url' => array('create')),
    array('label' => 'Update TUSER', 'url' => array('update', 'id' => $model->ID)),
    array('label' => 'Delete TUSER', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->ID), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage TUSER', 'url' => array('admin')),
);
?>

<h1>View TUSER #<?php echo $model->ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
//		'ADD3',
//		'ADD2',
//		'ADD1',
//		'PHOTO',

        'USERNAME',
        'NICKNAME',
//        'ID',
        'PASSWORD',
        'SEX',
        'BIRTHDAY',
        'EVALUATE',
        'HOME_ADDRESS',
        'PARENT_PHONE',
        'PARENT_COMPANY',
        'PARENT_NAME',
        'CLASS',
        'CURRENT_SCHOOL',
        'QQ',
        'WEIBO',
        'PHONE',
        'IDCARD',
    ),
)); ?>
