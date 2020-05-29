<?php

namespace App\Controller\Api;

use App\Entity\User;

class UserPutController
{
    public function __invoke(User $data)
    {
        $data->setUpdatedAt(new \DateTime("now"));

        return $data;
    }
}