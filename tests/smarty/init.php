<?php

return (new Smarty())
    ->setTemplateDir(__DIR__ . '/view')
    ->setCompileDir(compilePath());
