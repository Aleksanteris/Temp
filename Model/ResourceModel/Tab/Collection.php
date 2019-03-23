<?php

namespace Aleksanteris\TabManager\Model\ResourceModel\Tab;

use Aleksanteris\TabManager\Model\Tab;
use Aleksanteris\TabManager\Model\ResourceModel\Tab as TabResource;

/**
 * Tab entity collection
 */
class Collection extends \Magento\Eav\Model\Entity\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'entity_id';
    
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(Tab::class, TabResource::class);
    }
}
