<?php
/* Smarty version 3.1.33, created on 2018-12-06 19:28:59
  from 'C:\xampp\htdocs\daeris\shop\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c096a6b2717d5_12310013',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55a3f03e994cc441434d3a5aca34e6a7d3c7f940' => 
    array (
      0 => 'C:\\xampp\\htdocs\\daeris\\shop\\themes\\classic\\templates\\index.tpl',
      1 => 1544118380,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c096a6b2717d5_12310013 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20374354915c096a6b264e92_63136389', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_2829874075c096a6b266e33_44260094 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_14275608715c096a6b26b287_23774521 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_12182911175c096a6b2697d7_33552843 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14275608715c096a6b26b287_23774521', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20374354915c096a6b264e92_63136389 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20374354915c096a6b264e92_63136389',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_2829874075c096a6b266e33_44260094',
  ),
  'page_content' => 
  array (
    0 => 'Block_12182911175c096a6b2697d7_33552843',
  ),
  'hook_home' => 
  array (
    0 => 'Block_14275608715c096a6b26b287_23774521',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2829874075c096a6b266e33_44260094', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12182911175c096a6b2697d7_33552843', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
