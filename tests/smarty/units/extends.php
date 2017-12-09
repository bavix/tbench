<?php

/**
 * @var Smarty $obj
 */

$obj->assign('iterator', 0);
$obj->assign('limit', 300);

return $obj->fetch('extends.tpl');
