<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use function md5;
use function str_replace;

class EtagMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        // If this was not a get or head request, just return
        if (! $request->isMethod('get') && ! $request->isMethod('head')) {
            return $next($request);
        }

        $initialMethod = $request->method();

        $request->setMethod('get'); // force to get in order to receive content

        // Get response
        $response = $next($request);

        // Generate Etag
        $etag = md5($response->getContent());

        $requestEtag = str_replace('"', '', $request->getETags());

        // Check to see if Etag has changed
        if ($requestEtag && $requestEtag[0] === $etag) {
            $response->setNotModified();
        }

        // Set Etag
        $response->setEtag($etag);

        $request->setMethod($initialMethod); // set back to original method

        // Send response
        return $response;
    }
}
