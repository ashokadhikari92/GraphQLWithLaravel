<?php

namespace App\GraphQL\Type;

use Folklore\GraphQL\Support\Type as GraphQLType;
use GraphQL\Type\Definition\Type;

class CategoryType extends GraphQLType
{
    protected $attributes = [
        'name' => 'Category',
    ];

    public function fields()
    {
        return [
            'id' => [
                'type'        => Type::int(),
                'description' => 'Id of the category.',
            ],
            'name' => [
                'type'        => Type::string(),
                'description' => 'Name of the category',
            ],
        ];
    }
}
