<?
    $this->widget('zii.widgets.CListView', [
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
        'template'=>"{items}\n{pager}",
    ]);
?>
