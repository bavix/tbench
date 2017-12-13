<?php

return Fenom::factory(
    __DIR__ . '/view',
    compilePath(),
    [
        'auto_escape' => true,
        'force_compile' => DEBUG
    ]
);
