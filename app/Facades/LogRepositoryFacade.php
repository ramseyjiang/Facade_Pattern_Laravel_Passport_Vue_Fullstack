<?php
namespace Fspafs\Facades;

use Illuminate\Support\Facades\Facade;

class LogRepositoryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Fspafs\Repositories\LogFacadeRepository';
    }
}