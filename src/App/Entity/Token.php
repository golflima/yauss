<?php

namespace App\Entity;

/**
 * Token
 */
class Token
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $token;

    /**
     * @var \DateTime
     */
    private $expire;


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
     * Set token
     *
     * @param string $token
     *
     * @return Token
     */
    public function setToken($token)
    {
        $this->token = $token;

        return $this;
    }

    /**
     * Get token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set expire
     *
     * @param \DateTime $expire
     *
     * @return Token
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
}

