<?php
namespace Demo\First\Controller\Index;
use Magento\Framework\Controller\ResultFactory;
class Index extends \Magento\Framework\App\Action\Action
{
    public Function __construct(\Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }
	public function execute()
    {
       return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}