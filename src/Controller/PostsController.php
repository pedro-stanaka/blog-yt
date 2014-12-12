<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 12/12/14
 * Time: 12:29
 */

namespace App\Controller;




class PostsController extends AppController {


    public function index()
    {
        $this->set('posts', $this->paginate($this->Posts));
    }


    public function view($id = null) {
        $post = $this->Posts->get($id);
        $this->set('post', $post);
    }


} 