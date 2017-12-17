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

namespace App\Controller\Service;

use App\Entity\Link;
use App\Repository\LinkRepository;
use Doctrine\ORM\EntityManager;

/**
 * Manage links.
 */
class LinkService
{
    /**
     * @var LinkRepository
     */
    private $linkRepository;

    /**
     * @var EntityManager
     */
    private $linkEntityManager;

    public function __construct()
    {
        $this->linkRepository = new LinkRepository();
        $this->linkEntityManager = $this->linkRepository->getEntityManager();
    }

    public function create(Link $link)
    {
        $this->linkEntityManager->persist($link);
        $this->linkEntityManager->flush($link);
        return true;
    }

    public function update(Link $link)
    {
        $saved = 
        $this->linkRepository->_em->persist($link);
        $this->linkRepository->_em->flush($link);
        return true;
    }
}