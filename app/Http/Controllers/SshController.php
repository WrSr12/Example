<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class SshController extends BaseController
{
    public function mergeConflict()
    {
        return '';
    }

    public function test()
    {
        return true;
    }

}
