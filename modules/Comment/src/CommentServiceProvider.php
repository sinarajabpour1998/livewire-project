<?php

namespace Modules\Comment;

use Illuminate\Support\ServiceProvider;

class CommentServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
     public function boot()
     {
         $this->loadRoutesFrom(__DIR__ . '/routes/web.php');
         $this->loadViewsFrom(__DIR__ . '/views','CommentModule');
         $this->loadMigrationsFrom(__DIR__ . '/database/migrations');
         $this->mergeConfigFrom(__DIR__ . '/config/comment.php', 'comment');
         $this->publishes([
                __DIR__.'/config/comment.php' =>config_path('comment')
         ], 'comment');
         // This line is the menu initialize helper based on dizatech/module-menu package
         //\ModuleMenu::init('comment');
     }
}
