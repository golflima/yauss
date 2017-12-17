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
 * Group
 */
class Group
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $acl;

    /**
     * @var \App\Entity\User
     */
    private $users;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->acl = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Group
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add acl
     *
     * @param \App\Entity\GroupAcl $acl
     *
     * @return Group
     */
    public function addAcl(\App\Entity\GroupAcl $acl)
    {
        $this->acl[] = $acl;

        return $this;
    }

    /**
     * Remove acl
     *
     * @param \App\Entity\GroupAcl $acl
     */
    public function removeAcl(\App\Entity\GroupAcl $acl)
    {
        $this->acl->removeElement($acl);
    }

    /**
     * Get acl
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAcl()
    {
        return $this->acl;
    }

    /**
     * Set users
     *
     * @param \App\Entity\User $users
     *
     * @return Group
     */
    public function setUsers(\App\Entity\User $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \App\Entity\User
     */
    public function getUsers()
    {
        return $this->users;
    }
}
