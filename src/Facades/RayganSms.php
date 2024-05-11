<?php

namespace TrezSms\NewRayganSms\Facades;

use Illuminate\Support\Facades\Facade;

class NewRayganSms extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'RayganSms';
    }
}
