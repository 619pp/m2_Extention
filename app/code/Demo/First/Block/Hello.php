<?php
namespace Demo\First\Block;

use Magento\Framework\View\Element\Template;
use Demo\First\Model\ResourceModel\Item\Collection;
use Demo\First\Model\ResourceModel\Item\CollectionFactory;
class Hello extends Template
{
    private $collectionFactory ;
    public function __construct(Template\Context $context, CollectionFactory $collectionFactory, array $data = [])
        {
            $this->collectionFactory = $collectionFactory;
            parent::_construct($context, $data);
        }
    /**
     * @return \Demo\First\Model\Item[]
     */
    public function getItems(){
        return $this->collectionFactory->create()->getItems();
    }
}