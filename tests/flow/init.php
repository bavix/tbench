<?php

return new \Bavix\Flow\Flow(
    null,
    [
        'folders' => [
            'units' => __DIR__ . '/view'
        ],
        'compile' => compilePath(),
        'debug'   => DEBUG
    ]
);
