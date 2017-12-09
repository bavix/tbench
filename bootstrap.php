<?php

include_once __DIR__ . '/vendor/autoload.php';

function compilePath()
{
    return __DIR__ . '/compile';
}

function initPath(string $template)
{
    return __DIR__ . '/tests/' . $template . '/init.php';
}

function unitPath(string $template, string $unit)
{
    return __DIR__ . '/tests/' . $template . '/units/' . $unit . '.php';
}
