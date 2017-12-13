<?php

/**
 * @var Smarty $obj
 * @var array $data
 * @var $unit string
 */

$obj->assign($data);

return $obj->fetch($unit . '.tpl');
