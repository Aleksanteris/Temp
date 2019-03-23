<?php

namespace Aleksanteris\TabManager\Model;

/**
 * Tab entity model
 */
class Tab extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Entity code
     */
    const ENTITY = 'tab';

    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Aleksanteris\TabManager\Model\ResourceModel\Tab::class);
    }
}
