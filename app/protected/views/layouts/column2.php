<? $this->beginContent('/layouts/main') ?>
<div class="container-fluid">
    <div class="col-lg-9">
        <?= $content ?>
    </div>

	<div class="col-lg-3">
		<div id="sidebar">
			<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

			<?php $this->widget('RecentComments', array(
				'maxComments'=>Yii::app()->params['recentCommentCount'],
			)); ?>
		</div>
	</div>
</div>
<? $this->endContent() ?>
