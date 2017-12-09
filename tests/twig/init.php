<?php

$loader = new \Twig_Loader_Filesystem(__DIR__ . '/view');

return new \Twig_Environment($loader, array(
    'cache' => compilePath(),
));
