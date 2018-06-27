<?php

namespace App\GraphQL\Query;

use App\Author;
use Folklore\GraphQL\Support\Query;
use GraphQL;
use GraphQL\Type\Definition\Type;

class AuthorQuery extends Query
{
    /**
     * @var Author
     */
    private $author;

    /**
     * AuthorQuery constructor.
     *
     * @param Author $author
     */
    public function __construct(Author $author)
    {
        parent::__construct();
        $this->author = $author;
    }

    protected $attributes = [
        'name' => 'authors',
    ];

    /**
     * Define the GraphQL type.
     *
     * @return \GraphQL\Type\Definition\ListOfType
     */
    public function type()
    {
        return Type::listOf(GraphQL::type('Author'));
    }

    /**
     * Query arguments.
     *
     * @return array
     */
    public function args()
    {
        return [
            'id'    => ['name' => 'id', 'type' => Type::int()],
            'email' => ['name' => 'email', 'type' => Type::string()],
        ];
    }

    /**
     * Resolve the query.
     *
     * @param $root
     * @param $args
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function resolve($root, $args)
    {
        if (isset($args['id'])) {
            $this->author->find($args['id']);
        } elseif (isset($args['email'])) {
            return $this->author->where('email', $args['email'])->get();
        } else {
            return $this->author->all();
        }
    }
}
