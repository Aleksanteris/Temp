<?php

namespace Aleksanteris\TabManager\Setup;

class TabSetup extends \Magento\Eav\Setup\EavSetup
{
    /**
     * @return array
     */
    public function getDefaultEntities()
    {
        return [
            'tab' => [
                'entity_model' => \Aleksanteris\Blog\TabManager\ResourceModel\Tab::class,
                'table' => 'tab_entity',
                'attributes' => [
                    'store_id' => [
                        'type' => '',
                    ],
                    'group_id' => [
                        'type' => '',
                    ],
                    'created_at' => [
                        'type' => 'static',
                    ],
                    'updated_at' => [
                        'type' => 'static',
                    ],
                    'title' => [
                        'type' => 'varchar',
                    ],
                    'content' => [
                        'type' => 'text',
                    ],
                    'is_sold' => [
                        'type' => 'int',
                    ],
                    'status' => [
                        'type' => 'int',
                    ],
                    'order_id' => [
                        'type' => 'int',
                    ],
                    'active_from_date' => [
                        'type' => 'datetime',
                    ],
                    'active_to_date' => [
                        'type' => 'datetime',
                    ],
                ],
            ],
        ];
    }
}
