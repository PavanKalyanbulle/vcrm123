<?php
/* Smarty version 4.3.2, created on 2025-05-11 21:20:33
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\ModComments\FilePreview.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_682114a1942483_81610894',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13192d1a2274bb955fa47e2a16adf62a5ff57d2f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\ModComments\\FilePreview.tpl',
      1 => 1744046269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682114a1942483_81610894 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-dialog modal-lg"><div class="modal-content"><div class="filePreview container-fluid"><div class="modal-header row"><div class="filename <?php if ($_smarty_tpl->tpl_vars['FILE_PREVIEW_NOT_SUPPORTED']->value != 'yes') {?> col-lg-8 <?php } else { ?> col-lg-11 <?php }?>"><h4 class="textOverflowEllipsis maxWidth50" title="<?php echo $_smarty_tpl->tpl_vars['FILE_NAME']->value;?>
"><b><?php echo $_smarty_tpl->tpl_vars['TRIMMED_FILE_NAME']->value;?>
</b></h4></div><?php if ($_smarty_tpl->tpl_vars['FILE_PREVIEW_NOT_SUPPORTED']->value != 'yes') {?><div class="col-lg-3"><a class="btn btn-default btn-small pull-right marginTop5px" href="<?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_URL']->value;?>
"><?php echo vtranslate('LBL_DOWNLOAD_FILE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></div><?php }?><div class="col-lg-1 pull-right"><button type="button" class="close" aria-label="Close" data-dismiss="modal"><span aria-hidden="true" class='fa fa-close'></span></button></div></div><div class="modal-body row" style="height:550px;"><?php if ($_smarty_tpl->tpl_vars['FILE_PREVIEW_NOT_SUPPORTED']->value == 'yes') {?><div class="well" style="height:100%;"><center><b><?php echo vtranslate('LBL_PREVIEW_NOT_AVAILABLE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b><br><br><br><a class="btn btn-default btn-large" href="<?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_URL']->value;?>
"><?php echo vtranslate('LBL_DOWNLOAD_FILE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><br><br><br><br><div class='span11 offset1 alert-info' style="padding:10px"><span class='span offset1 alert-info'><i class="icon-info-sign"></i><?php echo vtranslate('LBL_PREVIEW_SUPPORTED_FILES',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</span></div><br></center></div><?php } else {
if ($_smarty_tpl->tpl_vars['BASIC_FILE_TYPE']->value == 'yes') {?><div style="overflow:auto;height:100%;"><pre><?php echo htmlentities($_smarty_tpl->tpl_vars['FILE_CONTENTS']->value);?>
</pre></div><?php } elseif ($_smarty_tpl->tpl_vars['OPENDOCUMENT_FILE_TYPE']->value == 'yes') {?><iframe id="viewer" src="libraries/jquery/Viewer.js/#../../../<?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_URL']->value;?>
" width="100%" height="100%" allowfullscreen webkitallowfullscreen></iframe><?php } elseif ($_smarty_tpl->tpl_vars['PDF_FILE_TYPE']->value == 'yes') {?><iframe id='viewer' src="libraries/jquery/pdfjs/web/viewer.html?file=<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/<?php echo rawurlencode((string)$_smarty_tpl->tpl_vars['DOWNLOAD_URL']->value);?>
" height="100%" width="100%"></iframe><?php } elseif ($_smarty_tpl->tpl_vars['IMAGE_FILE_TYPE']->value == 'yes') {?><div style="overflow:auto;height:100%;width:100%;float:left;background-image: url(<?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_URL']->value;?>
);background-color: #EEEEEE;background-position: center 25%;background-repeat: no-repeat;display: block; background-size: contain;"></div><?php } elseif ($_smarty_tpl->tpl_vars['AUDIO_FILE_TYPE']->value == 'yes') {?><div style="overflow:auto;height:100%;width:100%;float:left;background-color: #EEEEEE;background-position: center 25%;background-repeat: no-repeat;display: block;text-align: center;"><div style="display: inline-block;margin-top : 10%;"><audio controls><source src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_URL']->value;?>
" type="<?php echo $_smarty_tpl->tpl_vars['FILE_TYPE']->value;?>
"></audio></div></div><?php } elseif ($_smarty_tpl->tpl_vars['VIDEO_FILE_TYPE']->value == 'yes') {?><div style="overflow:auto;height:100%;"><link href="libraries/jquery/video-js/video-js.css" rel="stylesheet"><?php echo '<script'; ?>
 src="libraries/jquery/video-js/video.js"><?php echo '</script'; ?>
><video class="video-js vjs-default-skin" controls preload="auto" data-setup="{'techOrder': ['flash', 'html5']}" width="100%" height="100%"><source src="<?php echo $_smarty_tpl->tpl_vars['SITE_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['DOWNLOAD_URL']->value;?>
" type='<?php echo $_smarty_tpl->tpl_vars['FILE_TYPE']->value;?>
' /></video></div><?php }
}?></div></div></div></div>
<?php }
}
