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
 * GroupAcl
 */
class GroupAcl
{
    /**
     * @var string
     */
    private $ace;

    /**
     * @var \App\Entity\Group
     */
    private $group;


    /**
     * Set ace
     *
     * @param string $ace
     *
     * @return GroupAcl
     */
    public function setAce($ace)
    {
        $this->ace = $ace;

        return $this;
    }

    /**
     * Get ace
     *
     * @return string
     */
    public function getAce()
    {
        return $this->ace;
    }

    /**
     * Set group
     *
     * @param \App\Entity\Group $group
     *
     * @return GroupAcl
     */
    public function setGroup(\App\Entity\Group $group)
    {
        $this->group = $group;

        return $this;
    }

    /**
     * Get group
     *
     * @return \App\Entity\Group
     */
    public function getGroup()
    {
        return $this->group;
    }
}
