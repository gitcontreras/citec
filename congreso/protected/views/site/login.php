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
            
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Email','required'=>'true')); ?>
            <?php echo $form->error($model,'email'); ?>
          </div>

          <div class="form-group">
            
            <?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>250,'class'=>'form-control','placeholder'=>'Contraseña','required'=>'true')); ?>
            <?php echo $form->error($model,'password'); ?>
          </div>
         
          <div class="form-group buttons">
          <!-- <input type="submit" class="btn btn-danger btn-primary" value="Iniciar"> -->
            <?php echo CHtml::submitButton('Iniciar',array('class'=>'btn btn-danger btn-primary'));?>
            
          </div>
        <?php $this->endWidget(); ?>



    
</div><!-- form -->