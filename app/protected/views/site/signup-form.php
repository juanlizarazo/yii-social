<div class="container">

    <div class="col-sm-6 bs-callout bs-callout-primary top-20">
        <h2>Connect with friends and the world around you on yii-social.</h2>
        <hr>
        <ul class="list-unstyled">
            <li><i class="glyphicon glyphicon-picture"></i> See photos and updates</li>
            <li><i class="glyphicon glyphicon-stats"></i> See what's new</li>
            <li><i class="glyphicon glyphicon-search"></i> Find more</li>
        </ul>
    </div>

    <div class="col-sm-6">
        <h1 class="text-primary">
            Sign up<br>
            <small class="text-muted">It's free and always will be.</small>
        </h1>

        <? $this->pageTitle=Yii::app()->name . ' - Login' ?>

        <?
            $form = $this->beginWidget('CActiveForm', [
                'id' => 'signup-form',
                'enableAjaxValidation' => true
            ])
        ?>

        <div class="form-group">
            <?= $form->labelEx($model, 'username') ?>
            <?= $form->textField($model, 'username', ['class' => 'form-control']) ?>
            <?= $form->error($model, 'username', ['class' => 'text-danger']) ?>
        </div>

        <div class="form-group">
            <?= $form->labelEx($model, 'email') ?>
            <?= $form->textField($model, 'email', ['class' => 'form-control']) ?>
            <?= $form->error($model, 'email', ['class' => 'text-danger']) ?>
        </div>

        <div class="form-group">
            <?= $form->labelEx($model, 'password') ?>
            <?= $form->passwordField($model, 'password', ['class' => 'form-control']) ?>
            <?= $form->error($model, 'password', ['class' => 'text-danger']) ?>
        </div>

        <div class="form-group">
            <?= CHtml::submitButton('Sign up', ['class' => 'btn btn-success']) ?>
        </div>

        <? $this->endWidget() ?>
    </div>
</div>
