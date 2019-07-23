<?php

namespace DemoLaravel\Providers;

use DemoLaravel\About;
use DemoLaravel\Contact;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //chính là nơi bạn thực hiện việc binding vào Service Container.
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $data['abouts'] = About::all();
        $data['contacts'] = Contact::all();

        view()->share($data);
    }
}