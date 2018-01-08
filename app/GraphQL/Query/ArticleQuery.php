<?php

namespace App\GraphQL\Query;

use App\Article;
use GraphQL;
use Folklore\GraphQL\Support\Query;
use GraphQL\Type\Definition\Type;

class ArticleQuery extends Query
{

    private $article;


    public function __construct(Article $article)
    {
        parent::__construct();
        $this->article = $article;
    }

    protected $attributes = [
        'name' => 'articles'
    ];

    public function type()
    {
        return Type::listOf(GraphQL::type('Article'));
    }

    public function args()
    {
        return [
            'id' => [
                'type' => Type::int()
            ]
        ];
    }

    public function resolve($root, $args)
    {
        if(isset($args['id'])){
            return $this->article->find($args['id']);
        }

        return $this->article->all();
    }
}