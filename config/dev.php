<?php

/**
 * This file is part of GL YAUSS.
 * See: <https://github.com/golflima/yauss>.
 *
 * Copyright (C) 2017 Jérémy Walther <jeremy.walther@golflima.net>.
 *
 * For the full copyright and license information, please view
 * the COPYRIGHT file that was distributed with this source code.
 * Otherwise, see: <https://www.gnu.org/licenses/agpl-3.0>.
 */

use Silex\Provider\MonologServiceProvider;
use Silex\Provider\WebProfilerServiceProvider;

// include the prod configuration
require __DIR__.'/prod.php';

// enable the debug mode
$app['debug'] = true;

$app->register(
    new MonologServiceProvider(),
    array(
    'monolog.logfile' => __DIR__.'/../var/logs/silex_dev.log',
    )
);

$app->register(
    new WebProfilerServiceProvider(),
    array(
    'profiler.cache_dir' => __DIR__.'/../var/cache/profiler',
    )
);
