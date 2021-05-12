<?php

use think\migration\Migrator;
use think\migration\db\Column;

class CreateRoleTable extends Migrator
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
        $table = $this->table('role');

        $table->addColumn('role_name','string', ['limit' => 100, 'default' => '', 'comment' => '角色名称'])
            ->addColumn('desc', 'text', ['comment' => '角色描述'])
            ->addColumn('status', 'boolean', ['limit' => 1, 'default' => 1, 'comment' => '角色状态'])
            ->addColumn('create_time', 'timestamp', array('default'=>'CURRENT_TIMESTAMP','comment'=>'添加时间'))
            ->addColumn('update_time', 'timestamp', array('default'=>'CURRENT_TIMESTAMP','comment'=>'更新时间'))
            ->addIndex('role_name')
            ->create();
    }
}
