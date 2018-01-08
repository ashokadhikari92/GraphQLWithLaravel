<?php

namespace App\Providers;

use App\GraphQL\Query\AuthorQuery;
use App\GraphQL\Type\ArticleType;
use App\GraphQL\Type\AuthorType;
use App\GraphQL\Type\CategoryType;
use Illuminate\Support\ServiceProvider;
use GraphQL;

class GraphQLServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        GraphQL::addType(AuthorType::class,'Author');

        GraphQL::addType(CategoryType::class,'Category');

        GraphQL::addType(ArticleType::class,'Article');

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
