<?php

namespace Fspafs\Contracts\Repositories;

interface LogRepositoryContract 
{
    public function createBlogOperateLog(object $user, string $desc);
}