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

ini_set('display_errors', 0);

require_once __DIR__.'/../vendor/autoload.php';

$app = include __DIR__.'/../src/app.php';
require __DIR__.'/../config/prod.php';
require __DIR__.'/../src/controllers.php';
$app->run();
