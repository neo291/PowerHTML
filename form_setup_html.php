<?php defined('C5_EXECUTE') or die("Access Denied."); ?>

<link rel="stylesheet" href="<?php echo $this->getBlockURL()?>/codemirror.min.css" />
<script>
var editor;
(function() {
	$('#ccm-dialog-loader-wrapper').show();
	$.getScript('<?php echo $this->getBlockURL()?>/codemirror.min.js', function() {
		editor = CodeMirror.fromTextArea(document.getElementById('content'), {
			mode: 'text/html',
			lineNumbers: true,
			lineWrapping: true,
			extraKeys: {'Ctrl-Space': 'autocomplete'},
			styleActiveLine: true
		});
		editor.setSize('100%', '397px');
		$('#ccm-dialog-loader-wrapper').hide();
	});
})();
</script>

<div class="ccm-ui">
<strong><?php echo t('Preview type')?></strong> <?php
echo $form->select('preview', $controller->getPreviewOptions(), $preview, array(
	'onchange' => "if($('#preview').val() == 2) { $('#previewtext').show() } else { $('#previewtext').hide() }"	
));
?> <?php
echo $form->text('previewtext', $previewtext, array(
	'placeholder' => 'Power HTML block here',
	'maxlength' => 180,
	'style' => $preview == 2 ? '' : 'display:none;'
));  
?><br /><br />
<?php
echo $form->textarea('content', $content, array(
	'style' => 'width:98%;height:375px'
));
?>
</div>