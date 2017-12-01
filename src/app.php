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

use DDesrosiers\SilexAnnotations\AnnotationServiceProvider;
use Doctrine\Common\Cache\FilesystemCache;
use Silex\Application;
use Silex\Provider\AssetServiceProvider;
use Silex\Provider\TwigServiceProvider;
use Silex\Provider\ServiceControllerServiceProvider;
use Silex\Provider\HttpFragmentServiceProvider;

$app = new Application();
$app->register(new ServiceControllerServiceProvider());
$app->register(new AssetServiceProvider());
$app->register(new TwigServiceProvider());
$app->register(new HttpFragmentServiceProvider());
$app['twig'] = $app->extend(
    'twig',
    function ($twig, $app) {
        return $twig;
    }
);
$app->register(
    new AnnotationServiceProvider(),
    array(
    "annot.cache" => new FilesystemCache(__DIR__."/../var/cache/annot"),
    "annot.controllerDir" => __DIR__."/Controller",
    "annot.controllerNamespace" => "GolfLima\\Yauss\\Controller\\",
    )
);

return $app;
