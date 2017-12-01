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

use Symfony\Component\Console\Application;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Filesystem\Filesystem;

$console = new Application('GL YAUSS - Yet Another Url Shortener Service', 'n/a');
$console->getDefinition()->addOption(
    new InputOption('--env', '-e', InputOption::VALUE_REQUIRED, 'The Environment name.', 'dev')
);
$console->setDispatcher($app['dispatcher']);
$console
    ->register('cache:clear')
    ->setDescription('Clears the application cache.')
    ->setCode(
        function (InputInterface $input, OutputInterface $output) use ($app) {
            $fs = new Filesystem();
            $fs->remove(
                array(
                __DIR__.'/../var/cache/annot',
                __DIR__.'/../var/cache/profiler',
                __DIR__.'/../var/cache/twig',
                )
            );
        }
    );

return $console;
