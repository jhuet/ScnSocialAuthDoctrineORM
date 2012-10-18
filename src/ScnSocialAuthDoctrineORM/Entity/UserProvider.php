<?php
namespace ScnSocialAuthDoctrineORM\Entity;

use Doctrine\ORM\Mapping as ORM;
use ScnSocialAuth\Entity\UserProvider as BaseUserProvider;

/** @ORM\Entity @ORM\Table(name="user_provider") */
class UserProvider extends BaseUserProvider
{
    /** @ORM\Id @ORM\Column(type="integer",name="user_id") */
    protected $userId;

    /** @ORM\Id @ORM\Column(type="integer",name="provider_id") */
    protected $providerId;

    /** @ORM\Column(type="string") */
    protected $provider;
}