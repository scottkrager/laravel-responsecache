<?php

namespace Spatie\ResponseCache\Events;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CacheMissed
{
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        LOG::debug('cache MISSED for: ' . $request->fullUrl());
    }
}
