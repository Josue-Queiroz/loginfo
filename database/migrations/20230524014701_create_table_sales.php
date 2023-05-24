<?php

use Phinx\Migration\AbstractMigration;

class CreateTableSales extends AbstractMigration
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
        $table = $this->table('sales');
        $table->addColumn('product_id', 'integer')
            ->addColumn('buyer_user_id', 'integer')
            ->addColumn('buy_price', 'float')
            ->addColumn('unity_of_measure', 'float')
            ->addColumn('quantitaty', 'float')
            ->addForeignKey('product_id', 'products', 'id')
            ->addForeignKey('buyer_user_id', 'users', 'id')
            ->addTimestamps();
    }

    public function down()
    {
    }
}
