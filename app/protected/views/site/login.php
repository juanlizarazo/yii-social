<? $this->pageTitle=Yii::app()->name . ' - Login' ?>

<div class="container">
    <div class="col-sm-offset-2 col-sm-8">
        <h2 class="text-primary">Login</h2>

        <?
            $form = $this->beginWidget('CActiveForm', [
                'id'=>'login-form',
                'enableAjaxValidation' => true,
            ])
        ?>

        <div class="form-group">
            <?php echo $form->labelEx($model,'username') ?>
            <?php echo $form->textField($model,'username', ['class' => 'form-control']) ?>
            <?php echo $form->error($model,'username', ['class' => 'text-danger']) ?>
        </div>

        <div class="form-group">
            <?php echo $form->labelEx($model,'password') ?>
            <?php echo $form->passwordField($model,'password', ['class' => 'form-control']) ?>
            <?php echo $form->error($model,'password', ['class' => 'text-danger']) ?>
        </div>

        <div class="form-group">
            <?php echo $form->checkBox($model,'rememberMe') ?>
            <?php echo $form->label($model,'rememberMe') ?>
            <?php echo $form->error($model,'rememberMe') ?>
        </div>

        <div class="form-group">
            <?php echo CHtml::submitButton('Login', ['class' => 'btn btn-primary']) ?>
        </div>

        <? $this->endWidget(); ?>
    </div>
</div>
