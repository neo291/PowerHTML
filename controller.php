<?php defined('C5_EXECUTE') or die("Access Denied.");

class PowerHtmlBlockController extends BlockController {
	protected $btDescription = 'Add custom HTML code to the page';
	protected $btName = 'PowerHTML';
	protected $btTable = 'btPowerHtml';
	protected $btInterfaceWidth = '600';
	protected $btWrapperClass = 'ccm-ui';
	protected $btInterfaceHeight = '465';
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;

	function getPreviewOptions() {
		return array(0 => 'Full HTML', 1 => 'Content only', 2 => 'Dummy text');
	}
}