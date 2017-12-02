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

namespace App\Controller\Api;

use DDesrosiers\SilexAnnotations\Annotations as SLX;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use GolfLima\Yauss\Exception\NotImplementedException;

/**
 * Controller for "/api/links", manages users.
 *
 * @SLX\Controller(prefix="/api/links")
 */
class LinkController
{
    /**
     * Create a new link.
     *
     * @SLX\Route(
     *      @SLX\Request(method="POST", uri="")
     * )
     *
     * @param   Silex\Application                        $app     Silex application object.
     * @param   Symfony\Component\HttpFoundation\Request $request Silex request object.
     *
     * @return  Symfony\Component\HttpFoundation\Response
     */
    public function create(Application $app, Request $request)
    {
        throw new NotImplementedException();
    }

    /**
     * Get an existing link.
     *
     * @SLX\Route(
     *      @SLX\Request(method="GET", uri="")
     * )
     *
     * @param   Silex\Application                        $app     Silex application object.
     * @param   Symfony\Component\HttpFoundation\Request $request Silex request object.
     *
     * @return  Symfony\Component\HttpFoundation\Response
     */
    public function get(Application $app, Request $request)
    {
        throw new NotImplementedException();
    }

    /**
     * Update an existing link.
     *
     * @SLX\Route(
     *      @SLX\Request(method="PUT", uri="")
     * )
     *
     * @param   Silex\Application                        $app     Silex application object.
     * @param   Symfony\Component\HttpFoundation\Request $request Silex request object.
     *
     * @return  Symfony\Component\HttpFoundation\Response
     */
    public function update(Application $app, Request $request)
    {
        throw new NotImplementedException();
    }

    /**
     * Delete an existing link.
     *
     * @SLX\Route(
     *      @SLX\Request(method="DELETE", uri="")
     * )
     *
     * @param   Silex\Application                        $app     Silex application object.
     * @param   Symfony\Component\HttpFoundation\Request $request Silex request object.
     *
     * @return  Symfony\Component\HttpFoundation\Response
     */
    public function delete(Application $app, Request $request)
    {
        throw new NotImplementedException();
    }
}
