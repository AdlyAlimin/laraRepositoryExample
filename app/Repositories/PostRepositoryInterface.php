<?php

namespace App\Repositories;

interface PostRepositoryInterface
{
    /**
     * get a post by using post id
     * 
     * @param id
     */
    public function get($post_id);

    /**
     * get all post
     * 
     * @return mixed
     */
    public function all();

    /**
     * delete post
     * 
     * @param id
     */
    public function delete($post_id);

    /**
     * update post using post id
     * 
     * @param int
     * @param array
     */
    public function update($post_id, array $post_data);
}