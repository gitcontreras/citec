<?php
/* @var $this EventosController */
/* @var $model Eventos */

$this->breadcrumbs=array(
	'Eventoses'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Eventos', 'url'=>array('index')),
	array('label'=>'Create Eventos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#eventos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manejo de Eventos</h1>

<div class="row">
    <div class="col-md-7">

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'eventos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_evento',
		'nombre',
		'logotipo',
		'convocatoria',
		'costo',
		'fecha_inicio',
		/*
		'fecha_fin',
		'lugar',
		'mas_informacion',
		*/
		array(
              'class'=>'CButtonColumn',
              'template'=>'{view}',
              'header'=>'ver Participantes',
              'buttons'=>array(
                   'view'=>array(
                   	   'url'=>'Yii::app()->createurl("participantes/admin",array(
                   	   		"id_evento"=>$data->id_evento
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
    		    <h3 class="panel-title">Nuevo Evento</h3>
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