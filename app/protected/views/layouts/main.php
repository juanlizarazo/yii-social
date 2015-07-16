<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="language" content="en">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="<?= Yii::app()->request->baseUrl ?>/vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/vendor/components/jquery/jquery.js"></script>
    <script type="text/javascript" src="<?= Yii::app()->request->baseUrl ?>/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>

    <title><?= CHtml::encode($this->pageTitle) ?></title>
</head>

<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#yii-social-navbar-items" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?= CHtml::encode(Yii::app()->name) ?></a>
        </div>

        <div id="yii-social-navbar-items" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <?
                $this->widget('zii.widgets.CMenu', [
                    'items' => [
                        ['label' => 'Home', 'url' => ['post/index']],
                        ['label' => 'About', 'url' => ['site/page', 'view'=>'about']],
                        ['label'=>'Contact', 'url' => ['site/contact']]
                    ],
                    'activeCssClass' => 'active',
                    'htmlOptions' => [ 'class' => 'nav navbar-nav' ],
                ]);
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?
                $this->widget('zii.widgets.CMenu', [
                    'items' => [
                        ['label'=>'Login', 'url' => ['site/login'], 'visible' => Yii::app()->user->isGuest],
                        [
                            'label'=>'Logout ('.Yii::app()->user->name.')',
                            'url' => ['site/logout'],
                            'visible' => !Yii::app()->user->isGuest
                        ]
                    ],
                    'htmlOptions' => ['class' => 'nav navbar-nav']
                ]);
                ?>
            </ul>
        </div>
    </div>
</nav>

<!-- yield to content -->
<?= $content ?>
<!--/ yield to content-->

<br>
<hr>
<footer>
    <div class="container">
        Juan Lizarazo &copy; <?= date('Y'); ?>
        <span class="pull-right"><?= Yii::powered() ?></span>
    </div>
</footer>
</body>
</html>
