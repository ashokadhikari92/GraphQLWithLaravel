<?php

namespace App\GraphQL\Query;

use App\Category;
use GraphQL;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\Type;

class CategoryQuery extends Query
{

    private $category;

    public function __construct(Category $category)
    {
        parent::__construct();
        $this->category = $category;
    }
    protected $attributes = [
        'name' => 'categories'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Category'));
    }

    public function args()
    {
        return [
            'id' => [ 'type' => Type::int()]
        ];
    }

    public function resolve($root, $args)
    {
        if(isset($args['id'])){
            return $this->category->find($args['id']);
        }

        return $this->category->all();
    }
}