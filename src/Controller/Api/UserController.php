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

namespace GolfLima\Yauss\Controller\Api;

use DDesrosiers\SilexAnnotations\Annotations as SLX;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use GolfLima\Yauss\Exception\NotImplementedException;

/**
 * Controller for "/api/users", manages users.
 *
 * @SLX\Controller(prefix="/api/users")
 */
class UserController
{
    /**
     * Create a new user.
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
     * Get details of logged user.
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
     * Update logged user.
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
     * Delete logged user.
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

    /**
     * Login as an existing user.
     *
     * @SLX\Route(
     *      @SLX\Request(method="POST", uri="login")
     * )
     *
     * @param   Silex\Application                        $app     Silex application object.
     * @param   Symfony\Component\HttpFoundation\Request $request Silex request object.
     *
     * @return  Symfony\Component\HttpFoundation\Response
     */
    public function login(Application $app, Request $request)
    {
        throw new NotImplementedException();
    }

    /**
     * Logout from an existing user.
     *
     * @SLX\Route(
     *      @SLX\Request(method="POST", uri="login")
     * )
     *
     * @param   Silex\Application                        $app     Silex application object.
     * @param   Symfony\Component\HttpFoundation\Request $request Silex request object.
     *
     * @return  Symfony\Component\HttpFoundation\Response
     */
    public function logout(Application $app, Request $request)
    {
        throw new NotImplementedException();
    }
}
