<?php

$smarty = (new Smarty())
    ->setTemplateDir(__DIR__ . '/view')
    ->setCompileDir(compilePath());

$smarty->setDebugging(DEBUG);

return $smarty;
