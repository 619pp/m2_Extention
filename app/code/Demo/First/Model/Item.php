<?php
namespace Demo\First\Model;

use Demo\First\Model\ResourceModel\Item as ResourceModelItem;
use Magento\Framework\Model\AbstractExtensibleModel;

class Item extends AbstractExtensibleModel 
{
    protected function _construct()
    {
        $this->_init(ResourceModelItem::class);
    }
}