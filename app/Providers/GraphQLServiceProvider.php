<?php

namespace App\Providers;

use App\GraphQL\Type\ArticleType;
use App\GraphQL\Type\AuthorType;
use App\GraphQL\Type\CategoryType;
use GraphQL;
use Illuminate\Support\ServiceProvider;

class GraphQLServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        GraphQL::addType(AuthorType::class, 'Author');

        GraphQL::addType(CategoryType::class, 'Category');

        GraphQL::addType(ArticleType::class, 'Article');
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
