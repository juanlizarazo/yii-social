<? $this->pageTitle=Yii::app()->name . ' - My Profile' ?>

<div class="container">
    <h2 class="text-primary"><?= Yii::app()->user->name ?>'s profile <small>Basic information</small></h2>
    <br>
    <div class="col-sm-3 text-right">
        <!-- TODO: Use profile picname from user record -->
        <img class="img-thumbnail img-responsive" src="<?= Yii::app()->request->baseUrl ?>/img/default.png">
    </div>
    <div class="bs-callout bs-callout-success col-sm-9">
        <table class="table table-hover">
            <tr>
                <td>Username</td>
                <td><?= Yii::app()->user->name ?></td>
            </tr>
            <tr>
                <td>email</td>
                <td><?= Yii::app()->user->email ?></td>
            </tr>
        </table>
    </div>
</div>

