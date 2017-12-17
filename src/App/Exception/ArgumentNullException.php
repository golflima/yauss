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

namespace App\Exception;

/**
 * This exception is thrown when a required argument is missing or is null.
 */
class ArgumentNullException extends \Exception
{
    /**
     * Instanciates a new ArgumentNullException.
     *
     * @param string     $argument The missing argument name.
     * @param int        $code     The exception code (optional).
     * @param \Throwable $previous The previous exception used for the exception chaining (optional).
     */
    public function __construct($argument, $code = 0, \Throwable $previous = null)
    {
        parent::__construct(
            "This argument is required and cannot be null: '${argument}'.",
            $code,
            $previous
        );
    }
}
