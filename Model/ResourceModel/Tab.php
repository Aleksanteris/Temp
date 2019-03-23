<?php

namespace Aleksanteris\TabManager\Model\ResourceModel;

/**
 * Tab entity resource model
 */
class Tab extends \Magento\Eav\Model\Entity\AbstractEntity
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->connectionName = 'tab';
    }

    /**
     * Entity type getter and lazy loader
     *
     * @throws \Magento\Framework\Exception\LocalizedException
     * @return \Magento\Eav\Model\Entity\Type
     */
    public function getEntityType()
    {
        if (empty($this->_type)) {
            $this->setType(\Aleksanteris\TabManager\Model\Tab::ENTITY);
        }
        return parent::getEntityType();
    }
}
