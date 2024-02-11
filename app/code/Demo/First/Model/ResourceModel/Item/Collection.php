<?php
namespace Demo\First\Model\ResourceModel\Item;

use Demo\First\Model\Item;
use Demo\First\Model\ResourceModel\Item as ItemResource;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'id';
    protected function _construct()
    {
        $this->_init(
            Item::class, ItemResource::class);
    }
}

