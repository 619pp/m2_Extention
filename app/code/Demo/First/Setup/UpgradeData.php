<?php

namespace Demo\First\Setup;

use Magento\Framework\Setup\UpgradeDataInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\ModuleContextInterface;

class UpgradeData implements UpgradeDataInterface
{
    public function upgrade(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
        $setup->startSetup();
        if(version_compare($context->getVersion(), '1.0.3', '<')){
            $setup->getConnection()->update(
                $setup->getTable('demmo_first_item'),
                [
                    'description' => 'Default description'
                ],
                $setup->getConnection()->quoteInto('id = ?', 2)
            );
        }

        $setup->endSetup();
    }

}