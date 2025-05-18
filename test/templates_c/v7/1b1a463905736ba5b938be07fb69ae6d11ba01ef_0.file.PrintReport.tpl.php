<?php
/* Smarty version 4.3.2, created on 2025-05-11 21:38:55
  from 'C:\xampp\htdocs\vcrm\vtigercrm8.0.0\vtigercrm\layouts\v7\modules\Reports\PrintReport.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.2',
  'unifunc' => 'content_682118efdf87a5_80263893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b1a463905736ba5b938be07fb69ae6d11ba01ef' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vcrm\\vtigercrm8.0.0\\vtigercrm\\layouts\\v7\\modules\\Reports\\PrintReport.tpl',
      1 => 1693558649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_682118efdf87a5_80263893 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="text/javascript" src="libraries/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<!DOCTYPE>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title><?php echo vtranslate('LBL_PRINT_REPORT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</title>
        <style type="text/css" media="print,screen">
            
                .printReport{
                    width:100%;
                    border:1px solid #000000;
                    border-collapse:collapse;
                }
                .printReport tbody td{
                    border:1px dotted #000000;
                    text-align:left;
                }
                .printReport thead th{
                    border-bottom:2px solid #000000;
                    border-left:1px solid #000000;
                    border-top:1px solid #000000;
                    border-right:1px solid #000000;
                }
                thead {
                    display:table-header-group;
                }
                tbody {
                    display:table-row-group;
                }
            
        </style>
    </head>
    <body marginheight="0" marginwidth="0" leftmargin="0" topmargin="0" style="text-align:center;" onLoad="JavaScript:window.print()">
        <table width="80%" border="0" cellpadding="5" cellspacing="0" align="center">
            <tr class="reportPrintHeader">
                <td align="left" valign="top" style="border:0px solid #000000;">
                    <h2><?php echo $_smarty_tpl->tpl_vars['REPORT_NAME']->value;?>
</h2>
                    <font  color="#666666"><div id="report_info"></div></font>
                </td>
                <td align="right" style="border:0px solid #000000;" valign="top">
                    <h3 style="color:#CCCCCC"><?php echo $_smarty_tpl->tpl_vars['ROW']->value;?>
 <?php echo vtranslate('LBL_RECORDS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h3>
                </td>
            </tr>
            <tr>
                <td style="border:0px solid #000000;" colspan="2">
                    <table width="100%" border="0" cellpadding="5" cellspacing="0" align="center" class="printReport reportPrintData" >
                        <?php echo $_smarty_tpl->tpl_vars['PRINT_DATA']->value;?>

                    </table>
                </td>
            </tr>
            <tr><td colspan="2">&nbsp;</td></tr>
            <tr>
                <td colspan="2">
                    <?php echo $_smarty_tpl->tpl_vars['TOTAL']->value;?>

                </td>
            </tr>
        </table>
    </body>
    <?php echo '<script'; ?>
>
        
            jQuery(document).ready(function () {
                var splitted = false;
                // chrome and safari doesn't support table-header-group option
                if (jQuery.browser.webkit) {
                    function splitTable(table, maxHeight) {
                        var header = table.children("thead");
                        if (!header.length)
                            return;

                        var headerHeight = header.outerHeight();
                        var header = header.detach();

                        var splitIndices = [0];
                        var rows = table.children("tbody").children();

                        maxHeight -= headerHeight;
                        var currHeight = 0;
                        var reportHeader = jQuery('.reportPrintHeader');
                        if (reportHeader.length > 0) {
                            currHeight = reportHeader.outerHeight();
                        }
                        rows.each(function (i, row) {
                            currHeight += $(rows[i]).outerHeight();
                            if (currHeight > maxHeight) {
                                splitIndices.push(i);
                                currHeight = $(rows[i]).outerHeight();
                            }
                        });
                        splitIndices.push(undefined);

                        table = table.replaceWith('<div id="_split_table_wrapper"></div>');
                        table.empty();

                        for (var i = 0; i < splitIndices.length - 1; i++) {
                            var newTable = table.clone();
                            header.clone().appendTo(newTable);
                            $('<tbody />').appendTo(newTable);
                            rows.slice(splitIndices[i], splitIndices[i + 1]).appendTo(newTable.children('tbody'));
                            newTable.appendTo("#_split_table_wrapper");
                            if (splitIndices[i + 1] !== undefined) {
                                $('<div style="page-break-after: always; margin:0; padding:0; border: none;"></div>').appendTo("#_split_table_wrapper");
                            }
                        }
                    }

                    if (window.matchMedia) {
                        var mediaQueryList = window.matchMedia('print');
                        mediaQueryList.addListener(function (mql) {
                            if (mql.matches && splitted == 0) {
                                var height = window.screen.availHeight;
                                $(function () {
                                    splitTable($(".reportPrintData"), height);
                                })
                                splitted = 1;
                            }
                        });
                    }
                }
            });
        
    <?php echo '</script'; ?>
>
</html>
<?php }
}
