<?php

namespace App\Controller\Api;

use App\Services\PasswordService;

class ClientCreateController
{
    protected $passwordServices;

    public function __construct(PasswordService $passwordServices)
    {
        $this->passwordServices = $passwordServices;
    }

    public function __invoke($data)
    {
        $password = $this->passwordServices->encode($data, $data->getPassword());
        $data->setPassword($password);

        return $data;
    }
}