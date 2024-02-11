<?php

namespace Demo\First\Setup;

use Magento\Framework\Setup\InstallSchemaInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\SchemaSetupInterface;

class InstallSchema implements InstallSchemaInterface
{
    public function install(SchemaSetupInterface $setup, ModuleContextInterface $context)
    {
        //add code here for table create or update
        $setup->startSetup();
        $table = $setup->getConnection()->newTable(
            $setup->getTable('demmo_first_item')
        )->addColumn(
            'id',
            \Magento\Framework\DB\Ddl\Table::TYPE_INTEGER,
            null,
            ['identity' => true, 'nullable' => false,'primary' => true],
            'Item Id'
        )->addColumn(
            'name',
            \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
            255,
            ['nullable' => false],
            'Item Name'
        )-> addIndex(
            $setup->getIdxName('demmo_first_item', ['name']),
            ['name']
        )->setComment(
            'Sample Items'
        );
        $setup->getConnection()->createTable($table);
        $setup->endSetup();
    }
}