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

    public function add()
    {
        $post = $this->Posts->newEntity();
        if ($this->request->is(['post', 'put'])) {
            $this->Posts->patchEntities($post, $this->request->data);

            if ($this->Posts->save($post)) {
                $this->Flash->success(__('A new post was created.'));
            } else {
                $this->Flash->error(__('The post was not saved. Please, try again.'));
            }
        }

        $this->set(compact('post'));
    }

    public function edit($id = null)
    {
        $post = $this->Posts->get($id);

        if ($this->request->is(['post', 'put', 'patch'])) {

            $this->Posts->patchEntity($post, $this->request->data);
            if ($this->Posts->save($post)) {
                $this->Flash->success(__("The post was edited."));
            } else {
                $this->Flash->error(__("The post could not be updated. Please, try again."));
            }
        }

        $this->set(compact('post'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);

        $post = $this->Posts->get($id);

        if ($this->Posts->delete($post)) {
            $this->Flash->success(__("The post was removed."));
        } else {
            $this->Flash->error(__("The post could not removed."));
        }

        $this->redirect(['action'=>'index']);
    }


} 