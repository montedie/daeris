<?php
/* Smarty version 3.1.33, created on 2018-12-06 22:38:34
  from 'C:\xampp\htdocs\daeris\shop\admin942upfv8r\themes\default\template\controllers\invoices\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c0996daddd023_03055156',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '729ffbf3a905060d3d93b11d019dba252e179f86' => 
    array (
      0 => 'C:\\xampp\\htdocs\\daeris\\shop\\admin942upfv8r\\themes\\default\\template\\controllers\\invoices\\helpers\\form\\form.tpl',
      1 => 1544118323,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c0996daddd023_03055156 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10741196675c0996daa17883_88165510', 'script');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2111640075c0996daa1f901_80469137', "input");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block 'script'} */
class Block_10741196675c0996daa17883_88165510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_10741196675c0996daa17883_88165510',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	$(document).ready(function() {
		var btn_save_date = $('span[class~="process-icon-save-date"]').parent();
		var btn_submit_date = $('#submitPrint');
		if (btn_save_date.length > 0 && btn_submit_date.length > 0)
		{
			btn_submit_date.hide();
			btn_save_date.find('span').removeClass('process-icon-save-date');
			btn_save_date.find('span').addClass('process-icon-save-calendar');
			btn_save_date.click(function() {
				btn_submit_date.before('<input type="hidden" name="'+btn_submit_date.attr("name")+'" value="1" />');

				$('#invoice_date_form').submit();
			});
		}
		var btn_save_status = $('span[class~="process-icon-save-status"]').parent();
		var btn_submit_status = $('#submitPrint2');
		if (btn_save_status.length > 0 && btn_submit_status.length > 0)
		{
			btn_submit_status.hide();
			btn_save_status.find('span').removeClass('process-icon-save-status');
			btn_save_status.find('span').addClass('process-icon-save');
			btn_save_status.click(function() {
				btn_submit_status.before('<input type="hidden" name="'+btn_submit_status.attr("name")+'" value="1" />');
				$('#invoice_status_form').submit();
			});
		}
	});
<?php
}
}
/* {/block 'script'} */
/* {block "input"} */
class Block_2111640075c0996daa1f901_80469137 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_2111640075c0996daa1f901_80469137',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'checkboxStatuses') {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values']['query'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
			<?php $_smarty_tpl->_assignInScope('id_checkbox', (($_smarty_tpl->tpl_vars['input']->value['name']).('_')).(intval($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']])));?>
			<p class="checkbox">
				<label for="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" class="control-label">
					<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['id_checkbox']->value;?>
" value="<?php echo intval($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['id']]);?>
" <?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) && $_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['id_checkbox']->value]) {?>checked="checked"<?php }?> />
					<?php if ($_smarty_tpl->tpl_vars['value']->value['invoice']) {?>
						<span class="badge badge-success">
						<?php if (isset($_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']]) && $_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']]) {?>
							<?php echo $_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']];?>

						<?php } else { ?>
							0
						<?php }?>
						</span>
						<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>

					<?php } else { ?>
						<span class="badge badge-danger">
						<?php if (isset($_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']]) && $_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']]) {?>
							<?php echo $_smarty_tpl->tpl_vars['statusStats']->value[$_smarty_tpl->tpl_vars['value']->value['id_order_state']];?>

						<?php } else { ?>
							0
						<?php }?>
						</span>
						<?php echo $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['input']->value['values']['name']];?>

					<?php }?>
				</label>
			</p>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php } else { ?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
}
