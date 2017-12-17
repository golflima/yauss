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
use App\Entity\UserGroup;
use App\Exception\ArgumentNullException;
use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;

class BaseService
{
    /**
     * @var EntityManager
     */
    protected $em;

    /**
     * @var EntityRepository
     */
    protected $er;

    /**
     * @param string $entity Name of entity to serve.
     */
    public function __construct($entity)
    {
        $reader = new AnnotationReader();
        $ref = new \ReflectionClass("App\Entity\${entity}");
        $classAnnotations = $reader->getClassAnnotations($ref);
        $reader->getMethodAnnotations();
    }

    /**
     * Gets the user's roles for given entity.
     * 
     * @param User   $user   The user to control.
     * @param string $entity The entity to control.
     * @return string
     */
    protected function getUserRole(User $user, $entity)
    {
        if ($user == null) { throw new ArgumentNullException("user"); }
        if ($entity == null) { throw new ArgumentNullException("entity"); }
        
    }

    protected function canRead(User $user, $entity, $property = null)
    {

    }

    protected function canCreate(User $user, $entity, $property = null)
    {

    }

    protected function canUpdate(User $user, $entity, $property = null)
    {

    }

    protected function canDelete(User $user, $entity, $property = null)
    {

    }
}