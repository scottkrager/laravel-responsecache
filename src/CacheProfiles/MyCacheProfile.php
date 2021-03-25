<?php

namespace Spatie\ResponseCache\CacheProfiles;

use Illuminate\Http\Request;
use Spatie\ResponseCache\ CacheProfiles\CacheAllSuccessfulGetRequests;
use Illuminate\Support\Facades\Auth;

class MyCacheProfile extends CacheAllSuccessfulGetRequests
{
    public function enabled(Request $request): bool
    {
        if (! parent::enabled($request)) {
            return false;
        }
        // If user is logged in, don't cache anything
         // check if User is logged in boolean true / false
        return Auth::check();
    }
}
