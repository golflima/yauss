<?php

namespace App\Entity;

/**
 * AuthToken
 */
class AuthToken
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $expire;

    /**
     * @var \App\Entity\User
     */
    private $user;


    /**
     * Set id
     *
     * @param string $id
     *
     * @return AuthToken
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set expire
     *
     * @param \DateTime $expire
     *
     * @return AuthToken
     */
    public function setExpire($expire)
    {
        $this->expire = $expire;

        return $this;
    }

    /**
     * Get expire
     *
     * @return \DateTime
     */
    public function getExpire()
    {
        return $this->expire;
    }

    /**
     * Set user
     *
     * @param \App\Entity\User $user
     *
     * @return AuthToken
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

