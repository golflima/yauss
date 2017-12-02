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

namespace App\Controller;

use DDesrosiers\SilexAnnotations\Annotations as SLX;
use Parsedown;
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

/**
 * Controller for "/", redirect links and new user to the Editor.
 *
 * @SLX\Controller(prefix="/")
 */
class RootController
{
    /**
     * Redirect new users to the BackOffice.
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
    public function backoffice(Application $app, Request $request)
    {
        return $app->redirect($app["url_generator"]->generate("bo"));
    }

    /**
     * Redirect new users to the requested link.
     *
     * @SLX\Route(
     *      @SLX\Request(method="GET", uri="{link}"),
     *      @SLX\Assert(variable="link", regex="[A-Za-z0-9_-]{4,32}")
     * )
     *
     * @param   Silex\Application                        $app     Silex application object.
     * @param   Symfony\Component\HttpFoundation\Request $request Silex request object.
     * @param   string                                   $link    Short link code for redirection.
     *
     * @return  Symfony\Component\HttpFoundation\Response
     */
    public function link(Application $app, Request $request, $link)
    {
        return $app->redirect("http://$link");
    }
}
