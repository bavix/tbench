<?php

require_once __DIR__ . '/bootstrap.php';

// config
$config = require __DIR__ . '/config/runner.php';
$templates = $config['templates'];
$units = $config['units'];
// /config

/**
 * @var \Bavix\Benchmark\Benchmark[] $benchmarks
 */
$benchmarks = [];

/**
 * @var \Bavix\Foundation\Arrays\Collection[] $results
 */
$results = [];

foreach ($templates as $template)
{
    $obj = require initPath($template);
    $benchmark = new \Bavix\Benchmark\Benchmark();
    $benchmarks[$template] = $benchmark;

    foreach ($units as $unit)
    {
        $benchmark->task(function () use ($template, $unit, $obj) {
            return require unitPath($template, $unit);
        }, $unit);
    }

    $results[$template] = $benchmark->run();
}

foreach ($results as $template => $result)
{
    var_dump($template, $result->asArray());
}
