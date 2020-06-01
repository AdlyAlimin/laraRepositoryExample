<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepositoryInterface;

class PostController extends Controller
{
    protected $post;

    /**
     * PostController constructor.
     *
     * @param PostRepositoryInterface $post
     */
    public function __construct(PostRepositoryInterface $post)
    {
        $this->post = $post;
    }

    /**
     * List all posts.
     *
     * @return mixed
     */
    public function index()
    {
    
        $posts = $this->post->all();
        
        echo $posts;
    }

    /**
     * Get a post by id
     * 
     * @param int
     * @return collection
     */
    public function get($id)
    {
        $post = $this->post->get($id);

        echo $post;
    }
}
