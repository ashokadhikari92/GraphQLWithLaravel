<?php

namespace App\GraphQL\Type;

use GraphQL\Type\Definition\Type;
use Folklore\GraphQL\Support\Type as GraphQLType;

class AuthorType extends GraphQLType
{
	protected $attributes = [
	  'name' => 'Author'
    ];

    public function fields()
    {
        return [
            'id' => [
                'type' => Type::int(),
                'description' => 'Id of the author.'
            ],
            'name' => [
                'type' => Type::string(),
                'description' => 'Name of the author.'
            ],
            'email' => [
                'type' => Type::string(),
                'description' => 'Email of the author.'
            ]
        ];
	}
}