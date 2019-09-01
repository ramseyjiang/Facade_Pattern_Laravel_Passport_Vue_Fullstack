<?php
namespace Fspafs\Facades;

use Illuminate\Support\Facades\Facade;

class BlogRepositoryFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Fspafs\Repositories\BlogFacadeRepository';
    }
}