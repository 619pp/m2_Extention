<?php

namespace Demo\First\Setup;

use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\InstallDataInterface;

class InstallData implements InstallDataInterface
{
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        //code for install data
        $setup->startSetup();
        $setup->getConnection()->insert(
            $setup->getTable('demmo_first_item'),
            [
                'name' => 'Item 1'
            ]
            );
        $setup->getConnection()->insert(
            $setup->getTable('demmo_first_item'),
            [
                'name' => 'Item 2'
            ]
            );
        $setup->endSetup();
    }
}