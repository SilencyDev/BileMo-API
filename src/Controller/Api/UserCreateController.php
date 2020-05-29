<?php

namespace App\Controller\Api;

use App\Entity\User;
use Symfony\Component\Security\Core\Security;

class UserCreateController
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }
    
    public function __invoke(User $data)
    {
        $data->setClient($this->security->getUser());

        return $data;
    }
}