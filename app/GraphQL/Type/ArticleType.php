<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class ArticleType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Article'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'Id of the article.'
            ],
            'title' => [
                'type' => Type::string(),
                'description' => 'Title of the article'
            ],
            'content' => [
                'type' => Type::string(),
                'description' => 'Content of the article.'
            ],
            'status' => [
                'type' => Type::boolean(),
                'description' => 'Status of the article.'
            ],
            'author_id' => [
                'type' => Type::int(),
                'description' => 'Author of the article.'
            ],
            'category_id' => [
                'type' => Type::int(),
                'description' => 'Category of the article.'
            ],
        ];
    }
}