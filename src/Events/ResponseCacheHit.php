<?php

namespace Spatie\ResponseCache\Events;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ResponseCacheHit
{
    public Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        LOG::debug('cache hit for: ' . $request->fullUrl());
    }
}
