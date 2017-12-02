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

use Symfony\Component\Debug\Debug;

$env = getenv('SYMFONY_ENV') ?: 'dev';
$loader = require __DIR__.'/../vendor/autoload.php';

switch ($env) {
    case "dev":
        Debug::enable();
        break;
    case "prod":
        ini_set('display_errors', 0);
        break;
}

$app = include __DIR__.'/../src/app.php';
require __DIR__.'/../config/'.$env.'.php';
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $app;