<?php
/* @var $this EventosController */
/* @var $model Eventos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eventos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'logotipo'); ?>
		<?php echo $form->textField($model,'logotipo',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'logotipo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'convocatoria'); ?>
		<?php echo $form->textField($model,'convocatoria',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'convocatoria'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'costo'); ?>
		<?php echo $form->textArea($model,'costo',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'costo'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_inicio'); ?>
		  	<?php 
          $this->widget('application.extensions.timepicker.EJuiDateTimePicker',array(
         'model'=>$model,
         'attribute'=>'fecha_inicio',
         'language' => 'es',
         'options'=>array(
    	 'monthNames' => array('Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,
    	 	                   Diciembre'),
        'monthNamesShort' => array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"),
        'dayNames' => array('Domingo,Lunes,Martes,Miercoles,Jueves,Viernes,Sabado'),
        'dayNamesMin' => array('Do','Lu','Ma','Mi','Ju','Vi','Sa'),
        'showAnim'=>'slide',
                'showSecond'=>false,
                'ampm'=>false,
                'timeFormat' => 'hh:mm:ss',
                'dateFormat'=>'yy-mm-dd',
                'changeMonth' => true,
                'changeYear' => true,
                'showAnim'=>'fold',
                'minDate'=>'-1y',
                'maxDate'=>'+5y',
           ),
         ));
		 ?>
		<?php echo $form->error($model,'fecha_inicio'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'fecha_fin'); ?>
		  	<?php 
          $this->widget('application.extensions.timepicker.EJuiDateTimePicker',array(
         'model'=>$model,
         'attribute'=>'fecha_fin',
         'language' => 'es',
         'options'=>array(
    	 'monthNames' => array('Enero,Febrero,Marzo,Abril,Mayo,Junio,Julio,Agosto,Septiembre,Octubre,Noviembre,
    	 	                   Diciembre'),
        'monthNamesShort' => array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic"),
        'dayNames' => array('Domingo,Lunes,Martes,Miercoles,Jueves,Viernes,Sabado'),
        'dayNamesMin' => array('Do','Lu','Ma','Mi','Ju','Vi','Sa'),
        'showAnim'=>'slide',
                'showSecond'=>false,
                'ampm'=>false,
                'timeFormat' => 'hh:mm:ss',
                'dateFormat'=>'yy-mm-dd',
                'changeMonth' => true,
                'changeYear' => true,
                'showAnim'=>'fold',
                'minDate'=>'-1y',
                'maxDate'=>'+5y',
           ),
         ));
		 ?>
		<?php echo $form->error($model,'fecha_fin'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'lugar'); ?>
		<?php echo $form->textField($model,'lugar',array('size'=>60,'maxlength'=>250,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'lugar'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'mas_informacion'); ?>
		<?php echo $form->textArea($model,'mas_informacion',array('rows'=>6, 'cols'=>50,'class'=>'form-control')); ?>
		<?php echo $form->error($model,'mas_informacion'); ?>
	</div>

	<div class="form-group">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->