<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    protected $classMap;
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton("EntityManager.classMap", function(){
            return $this->classMap;
        });

        $this->bindContract('Common\EntityManager');
        $this->bindContract('User\User', false);
        $this->bindContract('User\UserFactory');
        $this->bindContract('User\UserManager');
        $this->bindContract('User\Profile', false);
        $this->bindContract('User\ProfileManager');
        $this->bindContract('User\ProfileFactory');

        $this->bindContract('Recipe\Comment', false);
        $this->bindContract('Recipe\CommentManager');
        $this->bindContract('Recipe\CommentFactory');
        $this->bindContract('Recipe\Like', false);
        $this->bindContract('Recipe\LikeManager');
        $this->bindContract('Recipe\LikeFactory');
    }

    protected function bindContract($contract, $singleton = true)
    {
        $from = "Contracts\\$contract";
        $to= "Models\\{$contract}Impl";
        $bind = $singleton ? 'singleton' : 'bind';
        $this->classMap[$from] = $to;
        $this->app->$bind($from, $to);
    }
}
