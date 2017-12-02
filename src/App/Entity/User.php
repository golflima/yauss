<?php

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
    private $password_hash;

    /**
     * @var string
     */
    private $password_salt;

    /**
     * @var string
     */
    private $email;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $auth_tokens;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->auth_tokens = new \Doctrine\Common\Collections\ArrayCollection();
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
        $this->password_hash = $passwordHash;

        return $this;
    }

    /**
     * Get passwordHash
     *
     * @return string
     */
    public function getPasswordHash()
    {
        return $this->password_hash;
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
        $this->password_salt = $passwordSalt;

        return $this;
    }

    /**
     * Get passwordSalt
     *
     * @return string
     */
    public function getPasswordSalt()
    {
        return $this->password_salt;
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
     * @param \App\Entity\Token $authToken
     *
     * @return User
     */
    public function addAuthToken(\App\Entity\Token $authToken)
    {
        $this->auth_tokens[] = $authToken;

        return $this;
    }

    /**
     * Remove authToken
     *
     * @param \App\Entity\Token $authToken
     */
    public function removeAuthToken(\App\Entity\Token $authToken)
    {
        $this->auth_tokens->removeElement($authToken);
    }

    /**
     * Get authTokens
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAuthTokens()
    {
        return $this->auth_tokens;
    }
}

