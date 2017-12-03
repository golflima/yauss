<?php

namespace App\Entity;

/**
 * LinkUser
 */
class LinkUser
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var \App\Entity\Link
     */
    private $link;

    /**
     * @var \App\Entity\User
     */
    private $user;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return LinkUser
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set link
     *
     * @param \App\Entity\Link $link
     *
     * @return LinkUser
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
     * @return LinkUser
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

