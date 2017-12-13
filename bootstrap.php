<?php

include_once __DIR__ . '/vendor/autoload.php';

function compilePath()
{
    return __DIR__ . '/compile';
}

function dataPath(string $name)
{
    return __DIR__ . '/data/' . $name . '.php';
}

function initPath(string $template)
{
    return __DIR__ . '/tests/' . $template . '/init.php';
}

function renderPath(string $unit)
{
    return __DIR__ . '/tests/' . $unit . '/render.php';
}
