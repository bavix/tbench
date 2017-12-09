<?php

/**
 * @var Smarty $obj
 */

$obj->assign('message', 'hello world');

return $obj->fetch('print.tpl');
