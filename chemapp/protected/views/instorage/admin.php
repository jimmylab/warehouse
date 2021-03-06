<?php
$this->breadcrumbs=array(
	'Instorages'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'创建入库单', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('instorage-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>入库列表</h1>

<?php echo CHtml::link('高级搜索','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'instorage-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'instorage_id',
		'purchasing_id',
		'user_id',
		'verifydate',
		'expired',
		'specail_note',
		/*
		'weight',
		'nums',
		'storage_id',
		'note',
		'pics',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
