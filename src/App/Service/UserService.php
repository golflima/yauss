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

use App\Entity\User;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManager;

/**
 * Manage users.
 */
class UserService
{
    /**
     * @var UserRepository
     */
    private $userRepository;

    /**
     * @var EntityManager
     */
    private $userEntityManager;

    public function __construct()
    {
        $this->userRepository = new UserRepository();
        $this->userEntityManager = $this->userRepository->getEntityManager();
    }

    public function create(User $user)
    {
        $this->userEntityManager->persist($user);
        $this->userEntityManager->flush($user);
        return true;
    }

    public function update(User $user)
    {
        $saved = $this->userRepository->findOneByName($user->getName());
        $this->userEntityManager->flush($saved);
        return true;
    }
}