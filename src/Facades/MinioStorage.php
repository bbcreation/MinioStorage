<?php

namespace bbcreation\Minio\Facades;

use Illuminate\Support\Facades\Facade;

class MinioStorage extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'miniostorage';
    }
}
