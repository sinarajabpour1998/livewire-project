<?php

namespace Modules\Comment;

use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;
use Modules\Comment\Facades\CommentsFacade;
use Modules\Comment\Http\Livewire\CommentComponent;
use Modules\Comment\Http\Livewire\Counter;
use Modules\Comment\Repositories\CommentsRepository;

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
        Livewire::component('CommentModule::counter', Counter::class);
        Livewire::component('module-comment-component', CommentComponent::class);
        CommentsFacade::shouldProxyTo(CommentsRepository::class);
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
