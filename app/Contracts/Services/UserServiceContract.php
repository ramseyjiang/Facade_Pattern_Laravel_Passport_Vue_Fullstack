<?php

namespace Fspafs\Contracts\Services;

interface UserServiceContract
{
    public function checkLogin(string $username, string $password);
}