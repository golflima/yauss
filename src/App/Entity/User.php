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
 * User
 */
class User
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
     * @var string
     */
    private $passwordHash;

    /**
     * @var string
     */
    private $passwordSalt;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $authTokens;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $links;

    /**
     * @var \App\Entity\Group
     */
    private $group;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->authTokens = new \Doctrine\Common\Collections\ArrayCollection();
        $this->links = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return User
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
     * Set passwordHash
     *
     * @param string $passwordHash
     *
     * @return User
     */
    public function setPasswordHash($passwordHash)
    {
        $this->passwordHash = $passwordHash;

        return $this;
    }

    /**
     * Get passwordHash
     *
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->passwordHash;
    }

    /**
     * Set passwordSalt
     *
     * @param string $passwordSalt
     *
     * @return User
     */
    public function setPasswordSalt($passwordSalt)
    {
        $this->passwordSalt = $passwordSalt;

        return $this;
    }

    /**
     * Get passwordSalt
     *
     * @return string
     */
    public function getPasswordSalt()
    {
        return $this->passwordSalt;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Add authToken
     *
     * @param \App\Entity\AuthToken $authToken
     *
     * @return User
     */
    public function addAuthToken(\App\Entity\AuthToken $authToken)
    {
        $this->authTokens[] = $authToken;

        return $this;
    }

    /**
     * Remove authToken
     *
     * @param \App\Entity\AuthToken $authToken
     */
    public function removeAuthToken(\App\Entity\AuthToken $authToken)
    {
        $this->authTokens->removeElement($authToken);
    }

    /**
     * Get authTokens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthTokens()
    {
        return $this->authTokens;
    }

    /**
     * Add link
     *
     * @param \App\Entity\LinkAcl $link
     *
     * @return User
     */
    public function addLink(\App\Entity\LinkAcl $link)
    {
        $this->links[] = $link;

        return $this;
    }

    /**
     * Remove link
     *
     * @param \App\Entity\LinkAcl $link
     */
    public function removeLink(\App\Entity\LinkAcl $link)
    {
        $this->links->removeElement($link);
    }

    /**
     * Get links
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * Set group
     *
     * @param \App\Entity\Group $group
     *
     * @return User
     */
    public function setGroup(\App\Entity\Group $group = null)
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
