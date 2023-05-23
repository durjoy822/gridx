<?php

namespace App\Providers;

use App\Models\AdminProfileInfo;
use App\Models\Blog;
use App\Models\Client;
use App\Models\Logo;
use App\Models\Project;
use App\Models\Subscriber;
use Illuminate\Support\ServiceProvider;
use App\Models\CvUpload;
use App\Models\Skill;
use View;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view::composer('*' ,function($view){
            $view->with('cvDownload',CvUpload::where('status',1)->first());
            $view->with('skills',Skill::where('status',1)->inRandomOrder()->get());
            $view->with('projectcount',Project::where('status',1)->count());
            $view->with('clientcount',Client::count());
            $view->with('project',Project::count());
            $view->with('blog',Blog::count());
            $view->with('subscriber',Subscriber::count());

//            $view->with('logo',Logo::where('status',1)->first());
        });


    }
}
