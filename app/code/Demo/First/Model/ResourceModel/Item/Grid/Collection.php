<?php
namespace Demo\First\Model\ResourceModel\Item\Grid;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Psr\Log\LoggerInterface as Logger;
class Collection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult{
    public function __construct(Entityfactory $entityFactory,Logger $logger,FetchStrategy $fetchStrategy,EventManager $eventManager,$mainTable = 'demmo_first_item',$resourceModel = 'Demo\First\Model\ResourceModel\Item')
    {
        parent::__construct(
            $entityFactory,$logger,$fetchStrategy,$eventManager,$mainTable,$resourceModel
        );
    }
}
