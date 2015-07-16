<h1 class="text-primary">Welcome to Yii-Social<small class="text-muted"> - It's free and always will be.</small></h1>

<? $this->pageTitle=Yii::app()->name . ' - Login' ?>

<h1>Sign up</h1>

<div class="form">
    <?
    $form = $this->beginWidget('CActiveForm', [
        'id' => 'signup-form',
        'enableAjaxValidation' => true
    ])
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <div class="row">
        <?= $form->labelEx($model, 'username') ?>
        <?= $form->textField($model, 'username') ?>
        <?= $form->error($model, 'username') ?>
    </div>

    <div class="row">
        <?= $form->labelEx($model, 'email') ?>
        <?= $form->textField($model, 'email') ?>
        <?= $form->error($model, 'email') ?>
    </div>

    <div class="row">
        <?= $form->labelEx($model, 'password') ?>
        <?= $form->passwordField($model, 'password') ?>
        <?= $form->error($model, 'password') ?>
    </div>

    <div class="row submit">
        <?= CHtml::submitButton('Sign up') ?>
    </div>

    <? $this->endWidget(); ?>
</div>
