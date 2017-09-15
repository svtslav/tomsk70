<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
        'App\Project' => 'App\Policies\ProjectPolicy',
        'App\Rubric' => 'App\Policies\RubricPolicy',
        'App\User' => 'App\Policies\UserPolicy',
        'App\ForumTopic' => 'App\Policies\ForumTopicPolicy',
        'App\ForumMessage' => 'App\Policies\ForumMessagePolicy',
        'App\ForumSection' => 'App\Policies\ForumSectionPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
