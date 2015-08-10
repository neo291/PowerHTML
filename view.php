<?php defined('C5_EXECUTE') or die("Access Denied.");

$c=Page::getCurrentPage();
if ($c->isEditMode()) {
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
	echo $content;
}