<? if (!Yii::app()->user->isGuest) :

    $this->widget('zii.widgets.CListView', [
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        'template'=>"{items}\n{pager}",
    ]);
?>
<? else : ?>
    <h1 class="text-primary">Welcome to Yii-Social<small class="text-muted"> - It's free and always will be.</small></h1>

    TODO: Sign up form here
<? endif ?>
