<?php
namespace Demo\First\Setup;

use Magento\Framework\Setup\UpgradeSchemaInterface;
use Magento\Framework\Setup\SchemaSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeSchema implements UpgradeSchemaInterface{
    public function upgrade( SchemaSetupInterface $setup, ModuleContextInterface $context ) {
        $setup->startSetup();
        if(version_compare($context->getVersion(), '1.0.3', '<')){
            $setup->getConnection()->addColumn(
                $setup->getTable('demmo_first_item'),
                'description',
                [
                    'type' => \Magento\Framework\DB\Ddl\Table::TYPE_TEXT,
                    'nullable' => true,
                    'comment' => 'Item description'
                ]
                );
        }

        $setup->endSetup();
    }
}