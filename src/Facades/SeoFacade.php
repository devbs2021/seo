<?php
namespace DevbShrestha\Seo\Facades;

use Illuminate\Support\Facades\Facade;

class SeoFacade extends Facade
{

public static function getFacadeAccessor()
{
    return 'seo';
}
}
