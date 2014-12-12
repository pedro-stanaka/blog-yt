<?php
/**
 * Created by PhpStorm.
 * User: pedro
 * Date: 05/11/14
 * Time: 12:38
 */

namespace App\Model\Table;


use Cake\ORM\Table;

/**
 * Class PostsTable
 * @package App\Model\Table
 * @property Table $this
 */
class PostsTable extends Table {

    public function initialize(array $config) {
        $this->addBehavior('Timestamp');
        $this->displayField('title');
    }

}