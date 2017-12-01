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

namespace GolfLima\Yauss\Exception;

/**
 * This exception is thrown when a function, a method or any portion of code is not implemented yet.
 * Usually, it means there is something do here ...
 */
class NotImplementedException extends \Exception
{
    /**
     * Instanciates a new NotImplementedException.
     *
     * @param string     $message  The exception message to throw.
     * @param int        $code     The exception code.
     * @param \Throwable $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        parent::__construct(
            "This method is not implemented yet. Maybe you should do something here ?\n".$message,
            $code,
            $previous
        );
    }
}
