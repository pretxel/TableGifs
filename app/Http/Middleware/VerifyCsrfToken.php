<?php

namespace Tablegifts\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        //
    ];

    public function handle($request, Closure $next)
	{

		//Las peticiones POST las excluyo de CSRF Token
		if($request->method() == 'POST')
        {
       		 return $next($request);
        }

        if($request->method() == 'DELETE')
        {
       		 return $next($request);
        }

        if($request->method() == 'PUT')
        {
       		 return $next($request);
        }

		return parent::handle($request, $next);
	}
}
