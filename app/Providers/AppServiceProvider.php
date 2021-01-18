<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Client;



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
        //Este metodo lo uso para conectarme a una api Backend
        //Y consumir sus servicios y poder usar la misma instancia en todas peticiones
        //Sin tener que reescribir codigo
        //Como sugundo parametros pasamos una funciona anonima para retorna la intanciacion de la clase GuzzleHtpp para consumir los servicios de la api externa

        $this->app->singleton('GuzzleHttp\Client', function(){

            return new Client([
                
                'base_uri' => 'https://jsonplaceholder.typicode.com/',
                 
            ]);
        });
    }
}
