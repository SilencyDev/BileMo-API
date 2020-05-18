<?php

namespace App\Services;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class PasswordService
{
    private $userPasswordEncoder;

    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    public function encode(object $entity, string $password)
    {
        return $this->userPasswordEncoder->encodePassword($entity, $password);
    }

    public function isValid(object $entity, string $password)
    {
        return $this->userPasswordEncoder->isPasswordValid($entity, $password);
    }
}
