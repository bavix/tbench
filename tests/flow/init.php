<?php

$native = new \Bavix\Flow\Native();

$native->addFolder('units', __DIR__ . '/view');

return new \Bavix\Flow\Flow(
    $native,
    [
        'compile' => compilePath()
    ]
);
