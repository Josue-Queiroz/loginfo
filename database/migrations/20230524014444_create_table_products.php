<?php

use Phinx\Migration\AbstractMigration;

class CreateTableProducts extends AbstractMigration
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
    public function change()
    {
        $table = $this->table('products');
        $table->addColumn('name', 'string', ['limit' => 50])
            ->addColumn('user_id', 'integer')
            ->addColumn('unity_of_measure', 'float')
            ->addColumn('quantitaty', 'float')
            ->addColumn('price', 'float')
            ->addColumn('product_perishable', 'boolean')
            ->addColumn('expiration_date', 'date', ['null' => true])
            ->addColumn('date_of_manufacture', 'date')
            ->addTimestamps()
            ->addForeignKey('user_id', 'users', 'id')
            ->save();
    }

    public function down()
    {
        $this->dropDatabase('products');
    }
}
