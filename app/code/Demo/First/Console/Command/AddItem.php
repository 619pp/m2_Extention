<?php

namespace Demo\First\Console\Command; 
use Symfony\Component\Console\Command\Command;
use symfony\Component\console\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Demo\First\Model\ItemFactory;
use Magento\Framework\Console\Cli;
use Symfony\Component\Console\Input\InputArgument as InputInputArgument;

class AddItem extends Command {
    const INPUT_KEY_NAME = 'name';
    const INPUT_KEY_DESCRIPTION = 'description';
    private $itemFactory;
    public function __construct(ItemFactory $itemFactory)
    {
        $this->itemFactory = $itemFactory;
        parent::__construct();
    }

    protected function configure()
    {
        $this->setName('demo:item:add')->addArgument(
            self::INPUT_KEY_NAME,InputInputArgument::REQUIRED,'Item Name'
        )->addArgument(
            self::INPUT_KEY_DESCRIPTION,InputInputArgument::OPTIONAL,'Item Description'
        );

        parent::configure();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $item = $this->itemFactory->create();
        $item->setName($input->getArgument(self::INPUT_KEY_NAME));
        $item->setDescription($input->getArgument(self::INPUT_KEY_DESCRIPTION));
        $item->setIsObjectNew(true);
        $item->save();
        return Cli::RETURN_SUCCESS;
    }
}
?>