<?php

require_once __DIR__ . '/bootstrap.php';

// config
$config    = require __DIR__ . '/config/runner.php';
$templates = $config['templates'];
$units     = $config['units'];
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
    $engine    = require initPath($template);
    $benchmark = new \Bavix\Benchmark\Benchmark();

    $benchmarks[$template] = $benchmark;

    foreach ($units as $unit)
    {
        $obj  = clone $engine;
        $data = require dataPath($unit);

        $benchmark->task(function () use ($template, $unit, $data, $obj) {
            return require renderPath($template);
        }, $unit);
    }

    $results[$template] = $benchmark->run();
}

$table = new \Symfony\Component\Console\Helper\Table(
    new Symfony\Component\Console\Output\ConsoleOutput()
);

$headers = ['Template', 'Unit', 'Time (usage)', 'Time (avg)', 'Memory (usage)', 'Memory (avg)'];

$table->setHeaders($headers);

foreach ($results as $template => $result)
{
    foreach ($result as $unit => $response) {
        $table->addRow([
            $template,
            $unit,
            $response['time']['usage'],
            $response['time']['avg'],
            $response['memory']['usage'],
            $response['memory']['avg']
        ]);
    }
}

$table->render();
