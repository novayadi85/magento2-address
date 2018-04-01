<?php

namespace Acommerce\Address\Model;

class Region extends \Magento\Framework\Model\AbstractModel
{
    /**
     * Cache tag
     *
     * @var string
     */
    const CACHE_TAG = 'directory_country_region';
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Acommerce\Address\Model\ResourceModel\Region');
    }
}
