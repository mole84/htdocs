<?php /* Smarty version 2.6.26, created on 2015-02-23 23:27:31
         compiled from message/inputvalidation.tpl */ ?>
<?php $_from = $this->_tpl_vars['aErrors']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['oError']):
?>
  <span class="js-oxError_postError"><?php echo $this->_tpl_vars['oError']->getMessage(); ?>
</span>
<?php endforeach; endif; unset($_from); ?>