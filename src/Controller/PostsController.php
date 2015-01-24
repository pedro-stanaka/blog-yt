<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 12/12/14
 * Time: 12:29
 */

namespace App\Controller;
use Cake\Controller\Component\FlashComponent;
use App\Model\Table\PostsTable;


/**
 * Class PostsController
 * @package App\Controller
 * @property PostsTable $Posts
 * @property FlashComponent $Flash
 */
class PostsController extends AppController {


    public function index()
    {
        $this->set('posts', $this->paginate($this->Posts));
    }


    public function view($id = null) {
        $post = $this->Posts->get($id);
        $this->set('post', $post);
    }

    public function add() {
        $post = $this->Posts->newEntity($this->request->data); // Transform array data in entity object
        if ( $this->request->is('POST') ) {
            if ( $this->Posts->save($post) ) {
                $this->Flash->success('A new post was published in the blog.');
                $this->redirect(['action'=>'index']);
            }else {
                $this->Flash->error('The post could not be saved. Try again, please.');
            }
        }
        $this->set(compact('post'));
    }


    public function edit() {

    }


} 