<?php
/* Smarty version 3.1.33, created on 2020-01-13 20:25:55
  from '/var/www/html/themes/my_theme/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1cc443236849_77203338',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b91d5a6922809af88792ec96b0eb5b9832441b9' => 
    array (
      0 => '/var/www/html/themes/my_theme/templates/catalog/listing/category.tpl',
      1 => 1566837319,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_5e1cc443236849_77203338 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1328601375e1cc44320c374_16150109', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_1328601375e1cc44320c374_16150109 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_1328601375e1cc44320c374_16150109',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
}
