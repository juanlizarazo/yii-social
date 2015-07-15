<?php

// this contains the application parameters that can be maintained via GUI
$year = date('Y');

return array(
	// this is displayed in the header section
	'title'=>'Yii-Social by Juan Lizarazo',
	// this is used in error pages
	'adminEmail'=>'gabriellg4@gmail.com',
	// number of posts displayed per page
	'postsPerPage'=>10,
	// maximum number of comments that can be displayed in recent comments portlet
	'recentCommentCount'=>10,
	// maximum number of tags that can be displayed in tag cloud portlet
	'tagCloudCount'=>20,
	// whether post comments need to be approved before published
	'commentNeedApproval'=>true,
	// the copyright information displayed in the footer section
	'copyrightInfo'=>"Juan Lizarazo &copy; $year",
);
