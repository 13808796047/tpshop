<?php

use think\migration\Migrator;
use think\migration\db\Column;

class Users extends Migrator
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $table = $this->table('user', array('engine' => 'InnoDB'));
        $table->addColumn('username', 'string', array('limit' => 15, 'default' => '', 'comment' => '用户名'))
            ->addColumn('password', 'string', array('limit' => 64, 'comment' => '用户密码'))
            ->addColumn('email', 'string', array('limit' => 16, 'default' => '', 'comment' => '用户邮箱'))
            ->addTimestamps()
            ->addSoftDelete()
            ->addIndex(array('username'), array('unique' => true))
            ->addIndex(array('email'), array('unique' => true))
            ->create();
    }
}
