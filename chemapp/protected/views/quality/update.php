<?php
$this->breadcrumbs=array(
	'Qualities'=>array('index'),
	$model->quality_id=>array('view','id'=>$model->quality_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Quality', 'url'=>array('index')),
	array('label'=>'Create Quality', 'url'=>array('create')),
	array('label'=>'View Quality', 'url'=>array('view', 'id'=>$model->quality_id)),
	array('label'=>'Manage Quality', 'url'=>array('admin')),
);
?>

<h1>修改规格</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>