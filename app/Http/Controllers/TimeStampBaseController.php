<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TimeStampBaseController extends BaseController
{
    public function cacheTimestamp(Request $request)
    {
        $hora = $request->get('hour');
        $data = Carbon::parse($hora)->format('Y-m-d H:m:s');

        Redis::set('teste', $data);
    }
}