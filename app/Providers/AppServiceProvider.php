<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Monolog;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
	    \Log::emergency('something happened');
	    $monolog = \Log::getMonolog();
	    $syslog = new Monolog\Handler\SyslogHandler('papertrail');
	    $formatter = new Monolog\Formatter\LineFormatter('%channel%.%level_name%: %message% %extra%');
	    $syslog->setFormatter($formatter);
	
	    $monolog->pushHandler($syslog);
    }
}
