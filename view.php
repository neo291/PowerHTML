<?php defined('C5_EXECUTE') or die("Access Denied.");

$isDashboard = false;
if (Page::getCurrentPage()->getCollectionPath() == "/dashboard/blocks/stacks") {
$isDashboard = true;
} 

$isStacks = false;
if (strpos(Page::getCurrentPage()->getCollectionPath(), '!stacks') !== FALSE) {
$isStacks = true;
}

$c=Page::getCurrentPage();
if ($c->isEditMode() || $isDashboard || $isStacks) {
	if ($visible != '1') {
		echo '<div style="background:#f00;color:#fff;text-align:center;">*** Content not visible in production ***</div>';
	}
	switch($preview) {
		default:
		case 0:
			echo $content;
			break;
		case 1:
			echo strip_tags($content);
			break;
		case 2:
			echo strlen($previewtext) ? $previewtext : 'Power HTML block here';
			break;
	}
}
else {
	if ($visible == '1') {
		echo $content;
	}
}