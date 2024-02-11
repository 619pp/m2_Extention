<?php
namespace Demo\First\Cron;
use Demo\First\Model\ItemFactory;
class AddItem{
    private $itemFactory;
    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
    }
    public function execute(){
        $this->itemFactory->create()->setName('Sceduled item')->setDescription('Created at ' . time())->save();
    }
}
?>