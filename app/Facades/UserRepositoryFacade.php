<?php
namespace Fspafs\Facades;

use Illuminate\Support\Facades\Facade;

class UserRepositoryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Fspafs\Repositories\UserFacadeRepository';
    }
}