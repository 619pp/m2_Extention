<?php
namespace Demo\First\Api;
interface ItemRepositoryInterface{
    /**
     * @return \Demo\First\Api\Data\ItemInterface[]
     */
    public function getList();
}