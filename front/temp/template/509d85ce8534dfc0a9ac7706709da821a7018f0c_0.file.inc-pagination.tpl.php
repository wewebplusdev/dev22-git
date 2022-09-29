<?php
/* Smarty version 4.0.0, created on 2022-09-29 15:18:46
  from '/var/www/html/front/template/default/inc/inc-pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.0.0',
  'unifunc' => 'content_633554e6537541_17126386',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '509d85ce8534dfc0a9ac7706709da821a7018f0c' => 
    array (
      0 => '/var/www/html/front/template/default/inc/inc-pagination.tpl',
      1 => 1664439523,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633554e6537541_17126386 (Smarty_Internal_Template $_smarty_tpl) {
if ((($tmp = $_smarty_tpl->tpl_vars['pagination']->value ?? null)===null||$tmp==='' ? null ?? null : $tmp)) {?>
    <div class="pagination-block">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="pagination-label">
                    <?php echo $_smarty_tpl->tpl_vars['lang']->value["search:listtotal"];?>
 <?php echo number_format($_smarty_tpl->tpl_vars['pagination']->value['total']);?>
 <?php echo $_smarty_tpl->tpl_vars['lang']->value["search:list"];?>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="pagination">
                    <ul class="item-list">
                        <?php $_smarty_tpl->_assignInScope('pageStartShow', $_smarty_tpl->tpl_vars['pagination']->value['curent']-2);?>
                        <?php $_smarty_tpl->_assignInScope('pageEndShow', $_smarty_tpl->tpl_vars['pagination']->value['curent']+2);?>
            
                        <?php if ($_smarty_tpl->tpl_vars['pageStartShow']->value < 1) {?>
                            <?php $_smarty_tpl->_assignInScope('pageStartShow', 1);?>
                        <?php }?>
            
                        <?php if ($_smarty_tpl->tpl_vars['pageStartShow']->value-2 < 0) {?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['pageStartShow']->value-$_smarty_tpl->tpl_vars['pagination']->value['curent'];
$_prefixVariable1 = ob_get_clean();
ob_start();
echo 2+$_prefixVariable1;
$_prefixVariable2 = ob_get_clean();
$_smarty_tpl->_assignInScope('pageEndShow', $_smarty_tpl->tpl_vars['pageEndShow']->value+$_prefixVariable2);?>
                        <?php }?>
            
                        <?php if ($_smarty_tpl->tpl_vars['pageEndShow']->value >= $_smarty_tpl->tpl_vars['pagination']->value['totalpage']) {?>
                            <?php $_smarty_tpl->_assignInScope('pageEndShow', $_smarty_tpl->tpl_vars['pagination']->value['totalpage']);?>
                        <?php }?>
            
                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['total']-$_smarty_tpl->tpl_vars['pagination']->value['curent'] < 2) {?>
                            <?php ob_start();
echo $_smarty_tpl->tpl_vars['pagination']->value['totalpage']-$_smarty_tpl->tpl_vars['pagination']->value['curent'];
$_prefixVariable3 = ob_get_clean();
$_smarty_tpl->_assignInScope('startAdd', 2-$_prefixVariable3);?>
                            <?php $_smarty_tpl->_assignInScope('pageStartShow', $_smarty_tpl->tpl_vars['pageStartShow']->value-$_smarty_tpl->tpl_vars['startAdd']->value);?>
                        <?php }?>
            
                        <?php if ($_smarty_tpl->tpl_vars['pageStartShow']->value < 1) {?>
                            <?php $_smarty_tpl->_assignInScope('pageStartShow', 1);?>
                        <?php }?>

                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['curent']-1 > 0) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['page'];
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['parambefor'];
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['parameter'];
echo $_smarty_tpl->tpl_vars['pagination']->value['curent']-1;?>
" title="ก่อนหน้า">
                                    <span class="feather icon-chevron-left" aria-hidden="true"></span>
                                </a>
                            </li>
                        <?php }?>

                        <?php
$_smarty_tpl->tpl_vars['current'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['current']->step = 1;$_smarty_tpl->tpl_vars['current']->total = (int) ceil(($_smarty_tpl->tpl_vars['current']->step > 0 ? $_smarty_tpl->tpl_vars['pageEndShow']->value+1 - ($_smarty_tpl->tpl_vars['pageStartShow']->value) : $_smarty_tpl->tpl_vars['pageStartShow']->value-($_smarty_tpl->tpl_vars['pageEndShow']->value)+1)/abs($_smarty_tpl->tpl_vars['current']->step));
if ($_smarty_tpl->tpl_vars['current']->total > 0) {
for ($_smarty_tpl->tpl_vars['current']->value = $_smarty_tpl->tpl_vars['pageStartShow']->value, $_smarty_tpl->tpl_vars['current']->iteration = 1;$_smarty_tpl->tpl_vars['current']->iteration <= $_smarty_tpl->tpl_vars['current']->total;$_smarty_tpl->tpl_vars['current']->value += $_smarty_tpl->tpl_vars['current']->step, $_smarty_tpl->tpl_vars['current']->iteration++) {
$_smarty_tpl->tpl_vars['current']->first = $_smarty_tpl->tpl_vars['current']->iteration === 1;$_smarty_tpl->tpl_vars['current']->last = $_smarty_tpl->tpl_vars['current']->iteration === $_smarty_tpl->tpl_vars['current']->total;?>
                                <li class="<?php if ($_smarty_tpl->tpl_vars['current']->value == $_smarty_tpl->tpl_vars['pagination']->value['curent']) {?>active<?php }?>">
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['page'];
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['parambefor'];
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['parameter'];
echo $_smarty_tpl->tpl_vars['current']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['current']->value;?>
</a>
                            </li>
                        <?php }
}
?>

                        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['curent']+1 < $_smarty_tpl->tpl_vars['pagination']->value['totalpage']) {?>
                            <li>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['ul']->value;
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['page'];
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['parambefor'];
echo $_smarty_tpl->tpl_vars['pagination']->value['method']['parameter'];
echo $_smarty_tpl->tpl_vars['pagination']->value['curent']+1;?>
" title="ถัดไป">
                                    <span class="feather icon-chevron-right" aria-hidden="true"></span>
                                </a>
                            </li>
                        <?php }?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
