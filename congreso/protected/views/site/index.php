<style type="text/css">
  /* unvisited link */
  #al:link {
      color: #FF0000;
  }
  #al:visited {
      color: #FF0000;
      
  }
  /* mouse over link */
  #al:hover {
      color: #000000;
      text-decoration: underline;
  }
  /* selected link */
  #al:active {
      color: #FF0000;

  }
</style>

<script>

  $(document).ready(function()
  {
      $('#ourServices').attr('style','visible:fale;');

      var menuAcceso = $('a[href="#Acceso"]');
      menuAcceso.attr('id','menuAcceso');
      menuAcceso.attr('data-toggle','modal');
      menuAcceso.attr('data-target','#exampleModal');
      menuAcceso.attr('data-whatever','@getbootstrap');
      menuAcceso.attr('href','');

      
  });

</script>

       

<!-- Informacion -->
<div id="ourServices">  
  <div class="container"> 
      <div class="row">
                
        <div class="row-fluid">
          <div class="span4">
            <div class="info-img">
              <img src="themes/img/calendar.png" >
            </div>
            
            <h4>¿Cuándo?</h4>
            <p><?php echo $evento->fecha_inicio; ?>
            </p>
          </div>
          
          <div class="span4">
            <div class="info-img"><img src="themes/img/where.png" >
            </div>
            <h4>¿Dónde?</h4>
            <p><?php echo $evento->lugar; ?></p>
            <a id="al" href="https://www.google.com.mx/maps/place/Tecnologico+de+celaya+Campus+2/@20.5412342,-100.8118068,17z/data=!4m2!3m1!1s0x0000000000000000:0x655a93bfa763b7ce" target="_blank">¿Cómo llegar?</a>
            <br>
            <a id="al" href="mailto:lince@itc.mx">Contacto: lince@itc.mx</a>
          </div>

          <div class="span4">
            <div class="info-img">
              <a href="https://www.facebook.com/events/1420970331536992/" target="_blank">
              <img src="themes/img/facebook.png">
              </a>
            </div>
      
            <h4>Redes Sociales</h4>
            <p>Visítanos para conocer los más recientes aconteceres del evento.</p>
            <a id="al" href="https://www.facebook.com/itcelayaOficial?fref=ts" target="_blank">Pagina Oficial del Instituto Tecnologico de Celaya</a>
          </div>  
        </div>
      </div>
    </div>
</div>

<!-- ESPECIFICACIONES --> 
<div id="portfolioSection"> 
  <div class="span6">
    <h1 class="cntr">Especificaciones</h1> 
    <p>En esta sección ecnontrarás todo lo que necesitas saber acerca del evento. Haz clic sobre la opción que desees ver en el menú de abajo.</p>
  </div> 
  <div class="container">    
    <ul class="nav nav-pills">   
      <li class="active">
        <a href="#Costo" data-toggle="tab">COSTOS</a>
      </li>
      <li>
      <a href="#Calendario" data-toggle="tab">CALENDARIO</a>
      </li>     
      <li><a href="#ConvocatoriaPdf" data-toggle="tab">CONVOCATORIA</a>
      </li>     
      <li>
      <a href="#Info" data-toggle="tab">MÁS INFORMACIÓN</a>
      </li>
    </ul>
      <!-- <div class="clr">
      </div> -->
    <div class="tabbable tabs">
      <div class="tab-content label-primary">
        <div class="tab-pane active" id="Costo">
          <p><?php echo $evento->costo; ?></p>  
        </div>
        <div class="tab-pane" id="Calendario">
          Fecha inicio
          <p><?php echo $evento->fecha_inicio; ?></p>
          Fecha fin
          <p><?php echo $evento->fecha_fin; ?></p>
        </div>
        <div class="tab-pane" id="ConvocatoriaPdf">
          <a href="pdfs/<?php echo $evento->convocatoria; ?>" download="Convocatoria" class="btn btn btn-danger btn-primary">
            Descargar convocatoria
          </a>
        </div>
        
        <div class="tab-pane" id="Info">
          <p><?php echo $evento->mas_informacion; ?></p>  
        </div>
          <!-- <a href="#" class="btn btn-large btn-primary disabled">SHOW MORE</a> -->  
      </div>
    </div>
  </div>
</div>


<!-- DOCUMENTOS -->
<div id="blogSection"> 
  <div class="container">
    <div class="row span12"> 
      <div class="span8">    
        <div class="inner">
          <h1>Lineamientos</h1>
          <p>En esete documento encontrará la especificación de lineamientos requeridos para la publicación de artículos</p>
          <a  href="pdfs/<?php echo $evento->convocatoria; ?>" download="Lineamiento" class="btn btn-danger btn-large btn-primary ">Ver Documento</a>
        </div>
      </div>  
        
        <div class="span4">
           <img src="themes/img/lineamientos.png" alt="" />
        </div>
    </div>    
        <hr class="soften clear"/>
    <div class="row span12">      
        <div class="span4">
          <img src="themes/img/formato.png" alt="" />
        </div>
        <div class="span8">
          <div class="inner">
            <h1>Formato</h1>
            <p>Conozca y descargue el formato a utilizar para el artículo final.</p>
            <a  href="pdfs/<?php echo $evento->convocatoria; ?>" download="Formato" class="btn btn-danger btn-large btn-primary">Ver Documento</a>
          </div>
        </div>
    </div>    
  </div>
</div>

<!-- PONENTES -->
<div id="meetourteamSection">
  <div class="span6">
    <h1 class="cntr">Ponentes</h1>
    <p>Estos serán los ponentes (y sus proyectos) con los que contaremos durante el evento. </p>
  </div>
  
  <div class="container"> 
    <div class="tabbable tabs">
      <div class="tab-content label-primary">
        <div class="tab-pane active" id="all">
          <ul class="thumbnails">
            <?php foreach ($participantes as $key => $value) 
            {
            ?>
            <li class="span4">
              <div class="thumbnail">
                <div class="blockDtl">
                  <img src="themes/img/presenter1.png" alt="themes/img/presenter2.png">
                  <h2><?php echo $value->nombres; ?></h2>
                  <h4><?php echo $value->apellidos; ?></h4>
                  <a id="al" href="mailto:<?php echo $value->email; ?>"><h5><?php echo $value->email; ?></h5></a>
                  <!-- <a class="facebook" href="#"></a>
                      <a class="twitter" href="#"></a>
                      <a class="pin" href="#"></a> -->
                </div>
              </div>
            </li>
            <?php } ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- REGISTRO -->
<div id="contactSection">
  <div class="span6">
    <h1 class="cntr">Registro</h1>
    <p>Llene el siguiente formulario para registrarse.</p>
  </div>
    
  <div class="container"> 
    <div class="row"> 
      <div class="span8">
        <?php $form=$this->beginWidget(
                                      'CActiveForm', array(
                                                          'id'=>'participantes-form',
                                                          'enableAjaxValidation'=>false,
                                                          )); ?>
        
          <div class="control-group">
            <div class="controls">
              <?php echo $form->labelEx($model,'nombres'); ?>
              <?php echo $form->textField($model,'nombres',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Nombre','required'=>'true')); ?>
              <?php echo $form->error($model,'nombres'); ?>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <?php echo $form->labelEx($model,'apellidos'); ?>
              <?php echo $form->textField($model,'apellidos',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Apellidos','required'=>'true')); ?>
              <?php echo $form->error($model,'apellidos'); ?>
            </div>
          </div>
            
          <div class="control-group">
            <div class="controls">
              <?php echo $form->labelEx($model,'email'); ?>
              <?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Email','required'=>'true')); ?>
              <?php echo $form->error($model,'email'); ?>
            </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <?php echo $form->labelEx($model,'password'); ?>
              <?php echo $form->passwordfield($model,'password',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Contraseña','required'=>'true')); ?>
              <?php echo $form->error($model,'password'); ?>
            </div>
          </div>
          <div class="control-group">
            <button type="submit" class="btn btn btn-danger btn-primary">Registrar</button>
            <?php $this->endWidget(); ?>
          </div> 
        </div> 
      </div> 
    </div>


<!-- ACCESO -->

  <div class="container" id="Acceso">      
        
      <div class="modal fade" id="exampleModal" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;
                </span>
              </button>
                <h4 class="modal-title" id="exampleModalLabel">Iniciar Sesión</h4>
            </div>
            <div class="form">
              <?php
                      /* @var $this SiteController */
                      /* @var $model LoginForm */
                      /* @var $form CActiveForm  */

              $this->pageTitle=Yii::app()->name . ' - Login';
              $this->breadcrumbs=array(
                'Login',
              );
              ?>
              <?php $form=$this->beginWidget('CActiveForm', array(
              'id'=>'login-form',
              'enableClientValidation'=>true,
              'clientOptions'=>array(
                'validateOnSubmit'=>true,
              ),
              )); ?>
              <div class="form-group">
                <?php echo $form->emailField($model,'email',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Email','required'=>'true')); ?>
                <?php echo $form->error($model,'email'); ?>
              </div>
              <div class="form-group">             
                <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Contraseña','required'=>'true')); ?>
                <?php echo $form->error($model,'password'); ?>
              </div>   
              <div class="form-group buttons">
                  <!-- <input type="submit" class="btn btn-danger btn-primary" value="Iniciar"> -->
                  <?php echo CHtml::submitButton('Iniciar',array('class'=>'btn btn-danger btn-primary'));?>
                <button type="button" class="btn btn btn-danger btn-primary" data-dismiss="modal">Cerrar</button>
              </div>
              <?php $this->endWidget(); ?>
            </div><!-- form -->
          </div>
        </div>
      </div>
    </div>
  


  <!-- PIE DE PAGINA -->              
  <div class="footerSection container">       
    <div class=" span4 socialicon">
      <a class="facebook" href="https://www.facebook.com/events/1420970331536992/" target="_blank"></a>
      <!-- <a class="twitter" href="http://www.twitter.com/xtendify"></a> -->
      <!-- <a class="html5" href="#"></a> -->
      <!-- <a class="icon2" href="#"></a> -->
    </div>
    <div class="span8 copyright"><p>  Instituto Tecnológico de Celaya | CITEC  </p>
    </div>
  </div>
</div>


<a href="#top" class="go-top"><i class="icon-arrow-up"></i></a>

