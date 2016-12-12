<?php

namespace UnlemBilisim\OfficeRead;

use Illuminate\Support\ServiceProvider;

class OrgeReaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'officeread',
            'UnlemBilisim\officeread\Conversion'
        );
    }
}
