<?php

use Phinx\Migration\AbstractMigration;

class CreatePosts extends AbstractMigration
{

    /**
     * Migrate Up.
     */
    public function up() {
        // Criar tabela de posts
        $table = $this->table("posts");
        $table->addColumn('title', 'string')
            ->addColumn('body', 'text')
            ->addColumn('created', 'datetime')
            ->addColumn('modified', 'datetime')
            ->save();
    }

    /**
     * Migrate Down.
     */
    public function down() {
        // Excluir a tabela
        if($this->hasTable("posts")) {
            $this->dropTable("posts");
        }
    }
}