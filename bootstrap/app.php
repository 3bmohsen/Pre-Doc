<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\CheckAdmin; 
use App\Http\Middleware\Checkuser; 
use App\Http\Middleware\Checkdoc; 
use App\Http\Middleware\Checkid; 

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {

        $middleware->alias([
            'Checkadmin' => Checkadmin::class,
            'Checkuser' => Checkuser::class,
            'Checkdoc' => Checkdoc::class,
            'Checkid' => Checkid::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();