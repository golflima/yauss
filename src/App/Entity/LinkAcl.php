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

namespace App\Entity;

/**
 * LinkAcl
 */
class LinkAcl
{
    /**
     * @var string
     */
    private $role;

    /**
     * @var \App\Entity\Link
     */
    private $link;

    /**
     * @var \App\Entity\User
     */
    private $user;


    /**
     * Set role
     *
     * @param string $role
     *
     * @return LinkAcl
     */
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }

    /**
     * Get role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set link
     *
     * @param \App\Entity\Link $link
     *
     * @return LinkAcl
     */
    public function setLink(\App\Entity\Link $link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return \App\Entity\Link
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set user
     *
     * @param \App\Entity\User $user
     *
     * @return LinkAcl
     */
    public function setUser(\App\Entity\User $user = null)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \App\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }
}
