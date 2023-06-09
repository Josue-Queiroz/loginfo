<?php

use Phinx\Migration\AbstractMigration;

class CreateTableUsers extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    addCustomColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Any other destructive changes will result in an error when trying to
     * rollback the migration.
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */

    public function up()
    {
        $table = $this->table('users');
        $table->addColumn('name', 'string')
            ->addColumn('email', 'string', ['limit' => 50])
            ->addColumn('password', 'string', ['limit' => 60])
            ->addIndex('email', ['unique' => true, 'name' => 'index_user_email'])
            ->addTimestamps()
            ->save();
    }

    public function down()
    {
        $this->dropDatabase('users');
    }
}
