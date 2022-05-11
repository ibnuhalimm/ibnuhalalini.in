<?php

namespace App\Providers;

use App\Voyager\Actions\SeeInvitationUrl;
use App\Voyager\Actions\SendWhatsappMessage;
use Illuminate\Support\ServiceProvider;
use TCG\Voyager\Facades\Voyager;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Voyager::addAction(SendWhatsappMessage::class);
        Voyager::addAction(SeeInvitationUrl::class);
    }
}
