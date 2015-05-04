<?php
/* @var $this ParticipantesController */
/* @var $model Participantes */

$this->breadcrumbs=array(
	'Participantes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Participantes', 'url'=>array('index')),
	array('label'=>'Create Participantes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#participantes-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Participantes</h1>

<div class="row">
    <div class="col-md-7">

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'participantes-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_participante',
		'nombres',
		'apellidos',
		'email',
		'password',

		array(
              'class'=>'CButtonColumn',
              'template'=>'{view}',
              'header'=>'ver Actividades',
              'buttons'=>array(
                   'view'=>array(
                   	   'url'=>'Yii::app()->createurl("actividades/admin",array(
                   	   		"id_participante"=>$data->id_participante
                   	   	))'
                   	)
              	),
			),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
</div>	
<div class="col-md-5">

    		<div class="panel panel-primary">
    		  <div class="panel-heading">
    		    <h3 class="panel-title">Nuevo Participante</h3>
    		  </div>
    		  <div class="panel-body">
    	    		
				<?php 
					$this->renderPartial('_form', 
						array('model'=>$model,)); 
				?>
    		  </div>
    		</div>
        
    </div>
</div>
