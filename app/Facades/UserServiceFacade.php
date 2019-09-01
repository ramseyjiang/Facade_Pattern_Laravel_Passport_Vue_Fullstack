<?php
namespace Fspafs\Facades;

use Illuminate\Support\Facades\Facade;

class UserServiceFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Fspafs\Services\UserFacadeService';
    }
}